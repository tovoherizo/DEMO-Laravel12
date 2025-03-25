<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class ProfileController extends Controller
{
    public function create()
    {

    }

    public function show()
    { 
        $user = Auth::user();//recuperation utilisateur
       
        if(!$user){
            return redirect()->route('login');
            
        }
      
        return view('profile.user.profil',compact('user'));
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        
        // Mettre à jour les champs validés
        $user->fill($request->validated());

        // Vérifier si l'email a éyèté changé et invalider la vérification
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return Redirect::route('profil.show')->with('status', 'profile-updated');
    }
    public function updateProfileImage(Request $request): RedirectResponse
    {
        $request->validate([
            'cropped_image' => 'required|string', // L'image recadrée est en base64
        ]);
    
        $user = $request->user();
    
        // Supprimer l'ancienne image si elle existe
        if ($user->image) {
            Storage::disk('public')->delete($user->image);
        }
    
        // Récupérer l'image base64 envoyée depuis Cropper.js
        $imageData = $request->cropped_image;
        list($type, $imageData) = explode(';', $imageData);
        list(, $imageData) = explode(',', $imageData);
        $imageData = base64_decode($imageData);
    
        // Générer un nom unique pour le fichier
        $fileName = 'profiles/' . Str::random(10) . '.jpg';
    
        // Sauvegarde l'image dans le stockage public
        Storage::disk('public')->put($fileName, $imageData);
    
        // Mettre à jour l'utilisateur avec la nouvelle image
        $user->image = $fileName;
        $user->save();
    
        
        return Redirect::back()->with('status', 'profile-image-updated');
    }
    
    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
