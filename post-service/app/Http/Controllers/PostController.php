<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate(([
            'user_id' => 'required|integer',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]));

        $post = Post::create($validated);
        return response()->json($post, 201);
    }
    public function index()
    {
        return response()->json(Post::all(), 200);
    }
}
