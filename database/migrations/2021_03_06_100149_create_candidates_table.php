<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->integer('enrol');
            $table->string('name');
            $table->string('image');
            $table->text('detail');
            $table->unsignedBigInteger('position_id');
            $table->foreign('position_id')->references('id')->on('positions');
            // $table->unsignedBigInteger('menifesto_id');
            // $table->foreign('menifesto_id')->references('id')->on('menifestos');
            $table  ->integer('vote_count')->default(0);
            $table->integer('yes_count')->default(0);
            $table->integer('no_count')->default(0);
            // $table->boolean('declare')->default(false);
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
        Schema::dropIfExists('candidates');
    }
}
