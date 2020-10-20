<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('tt_identifiant')->unique();
            $table->string('tt_motdepasse');
            $table->string('tt_nom');
            $table->string('tt_prenom');
            $table->string('tt_adresse');
            $table->string('tt_codepostal');
            $table->string('tt_ville');
            $table->string('tt_pays');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
