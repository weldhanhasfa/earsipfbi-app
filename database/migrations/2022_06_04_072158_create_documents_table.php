<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('departement_id')
                    ->constrained('departements')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
            $table->string('noDocument');
            $table->foreignId('jenis_id')
                    ->constrained('jenis_documents')
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
            $table->string('judulDoc');
            $table->string('createBy');
            $table->string('file')
                    ->nullable()
                    ->default(null);
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
        Schema::dropIfExists('documents');
    }
}
