<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show()

    {
         $posts = Post::all();
         return view('listecandidature', compact('posts'));
    }
    public function store(PostRequest $request)
    {
        $validatedData = $request->validated();
    
      
        if (!Post::where('email', $validatedData['email'])->exists()) {
            Post::create($validatedData);
            return redirect(route('jobList'))->with('success', 'Candidature envoyée avec succès.');
        } else {
            return back()->with('error', 'Cette candidature existe déjà.');
        }
    }
}
