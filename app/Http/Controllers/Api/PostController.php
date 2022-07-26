<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// importo il Model su cui lavorare
use App\Post;

class PostController extends Controller
{
    public function index() {

        // salvo in $posts QUEI post che hanno un valore true nella colonna 'published' (i post pubblicati)
        $posts = Post::where('published', true)->get();

        // restituisco tutti i post in formato json
        return response()->json($posts);
    }
}
