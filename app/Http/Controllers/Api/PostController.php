<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// importo il Model su cui lavorare
use App\Post;

class PostController extends Controller
{
    public function index() {

        // salvo in $posts TUTTI i post (all()) attraverso una query
        $posts = Post::all();

        // restituisco tutti i post in formato json
        return response()->json($posts);
    }
}
