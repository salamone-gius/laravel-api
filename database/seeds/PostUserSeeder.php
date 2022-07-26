<?php

use Illuminate\Database\Seeder;

// importo il model del post
use App\Post;

// importo il model dello user
use App\User;


class PostUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    
    public function run()
    {
        // attraverso una query prendo i post che hanno la colonna 'user_id' vuota ('NULL')
        $posts = Post::where('user_id', NULL)->get();

        // ciclo sui post già filtrati. Ad ogni post...
        foreach ($posts as $post) {

            // ...prendo uno user a caso dalla tabella users ($user = il PRIMO USER che capita in maniera RANDOMICA)...
            $user = User::inRandomOrder()->first();

            // ...attribuisco alla colonna user_id del post su cui sto ciclando, l'id dello user casuale capitato...
            $post->user_id = $user->id;

            // ...salvo il dato a db
            $post->save();
        }
    }
}
