<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistribusisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribusis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('document_id')
                    ->constrained('documents')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
            $table->string('tanggal');
            $table->foreignId('terbitan_id')
                    ->constrained('terbitans')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
            $table->foreignId('departement_id')
                    ->constrained('departements')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
            $table->string('namaPenerima');
            $table->integer('copyFile');
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
        Schema::dropIfExists('distribusis');
    }
}
