<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerbitansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terbitans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('document_id')
                    ->constrained('documents')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
            $table->string('tanggal');
            $table->string('keterangan');
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
        Schema::dropIfExists('terbitans');
    }
}
