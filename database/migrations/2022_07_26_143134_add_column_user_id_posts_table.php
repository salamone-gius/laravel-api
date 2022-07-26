<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnUserIdPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            
            // instauro la relazione tra le tabelle aggiungendo la colonna 'user_id' alla tabella 'posts' e assegnandole il ruolo di foreign key
            $table->foreignId('user_id')->nullable()->after('id')->constrained()->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {

            // faccio decadere (drop) il vincolo/relazione
            $table->dropForeign(['user_id']);

            // elimino la colonna
            $table->dropColumn('user_id');
        });
    }
}
