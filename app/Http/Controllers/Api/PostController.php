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
        // il metodo with() permette di passare (durante la query di filtraggio) anche gli oggetti (e tutte le loro informazioni) associati appartenenti ad altre tabelle legate a questa da una relazione
        $posts = Post::where('published', true)->with(['category', 'tags', 'user'])->get();

        // restituisco i post filtrati in formato json
        return response()->json($posts);
    }
}
