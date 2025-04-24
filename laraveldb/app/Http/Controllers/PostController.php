<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    public function index()

    {
        
         $posts = Post::all();
         return view('listecandidature', compact('posts'));
    }
    public function show($id)
    {
        $posts = Post::find($id);
        return view('candidatureDetails',compact('posts'));
    }
    public function store(PostRequest $request)
    {
         
        if (!Auth::check()) {
            return redirect()->route('register')->with('error', 'Vous devez être inscrit pour postuler.');
        }
        $validatedData = $request->validated();
        $validatedData['user_id'] = Auth::id();
        //sauvegarder candidature
        Post::create($validatedData);

        return redirect()->back()->with('success', 'Votre candidature a été envoyée avec succès.');
       
        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('documents', $fileName, 'public');
   

    // Stocke le chemin du fichier en base (sans "public/")
    $validatedData['document'] = str_replace('public/', '', $filePath);
        }
      
        if (!Post::where('email', $validatedData['email'])->exists()) {
            Post::create($validatedData);
            return redirect(route('jobList'))->with('success', 'Candidature envoyée avec succès.');
        } else {
            return back()->withErrors('error', 'Cette candidature existe déjà.');
        }
    }
    public function openDocument($filename) {
        $path = storage_path('app/public/documents/' . $filename);
        if (!file_exists($path)) {
            abort(404, "Le fichier n'existe pas.");
        }
        return response()->file($path);
    }
    public function downloadDocument($filename) {
        $path = storage_path('app/public/documents/' . $filename);
        if (!file_exists($path)) {
            abort(404, "Le fichier n'existe pas.");
        }
        return response()->download($path);
    }

}
