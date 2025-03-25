<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;

use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use App\Http\Requests\JobUpdateRequest;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('jobList', compact('jobs'));
    }
    public function show( $id)
    {
        $job = Job::find($id);
    
        if (!$job) {
            return redirect()->route('jobs.index')->with('error', 'Job not found.');
        }
    
        return view('jobdetails', compact('job'));
    }
    public function store(JobRequest  $request)
    {
        $validatedData = $request->validated();
        $validatedData['user_id'] = Auth::id(); 
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('jobs', 'public');
        }
        $job = Job::create($validatedData);

       
        return redirect(route('dashboard', absolute: false))->with('success', 'Job créé avec succès.');
    }
    public function edit($id)
    {
        $job = Job::findOrFail($id);
    
        if ($job->user_id !== Auth::id()) {
            return redirect()->route('dashboard')->with('error', 'Vous n’avez pas l’autorisation de modifier cette offre.');
        }
    
        return view('offreedit', compact('job'));
    }
    public function update(JobUpdateRequest $request, $id)
    {
        $job = Job::findOrFail($id); 
    
        if ($job->user_id !== Auth::id()) {
            return redirect()->route('listeoffre')->with('error', 'Vous n’avez pas l’autorisation de modifier ce job.');
        }
    
        $validatedData = $request->validated();
        $validatedData['user_id'] = Auth::id(); 
    
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('jobs', 'public');
        }
    
        $job->update($validatedData);
    
        return redirect()->route('listeoffre')->with('success', 'Offre mise à jour avec succès.');
    }
    
    
    

    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        if ($job->user_id !== Auth::id()) {
            return redirect()->route('listeoffre')->with('error', 'Vous n’avez pas l’autorisation de supprimer ce job.');
        }

        $job->delete();

        return redirect()->route('listeoffre')->with('success', 'Job supprimé avec succès.');
    }
    public function photo()
    {
        $jobs = Job::where('user_id', Auth::id())->get(); 
        return view('photo', compact('jobs'));
    }
    public function listeoffre()
    {
        $jobs = Job::where('user_id', Auth::id())->get();
        return view('listeoffre', compact('jobs'));
    }
}
