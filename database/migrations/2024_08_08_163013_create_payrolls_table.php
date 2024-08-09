<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('payrolls', function (Blueprint $table) {
        $table->id();
        $table->string('title', 255)->nullable();
        $table->string('year', 4);
        $table->enum('month', ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre']);
        $table->enum('type',['Haberes','Jornales']);
        $table->string('file_uri', 255);
        $table->foreignId('user_id')->constrained();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
