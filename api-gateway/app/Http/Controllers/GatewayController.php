<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GatewayController extends Controller
{
    public function registerUser(Request $request)
    {
        $response = Http::post(env('USER_SERVICE_URL') . '/api/register', $request->all());
        return $response->json();
    }

    public function getAllUsers()
    {
        $response = Http::get(env('USER_SERVICE_URL') . '/api/users');
        return $response->json();
    }

    public function createPost(Request $request)
    {
        $response = Http::post(env('POST_SERVICE_URL') . '/api/posts', $request->all());
        return $response->json();
    }

    public function getAllPosts()
    {
        $response = Http::get(env('POST_SERVICE_URL') . '/api/posts');
        return $response->json();
    }
}
