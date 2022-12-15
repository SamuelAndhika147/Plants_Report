<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('name_plant');
            $table->enum('type', ['Obat', 'Hias', 'Pangan']);
            $table->text('note')->nullable();
            $table->enum('growth', ['Benih', 'Bertunas', 'Tumbuh Batang', 'Tumbuh Daun', 'Tumbuh Bunga', 'Berbuah', 'Layu', 'Daun Rontok', 'Mati'])->nullable();
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
        Schema::dropIfExists('plants');
    }
}
