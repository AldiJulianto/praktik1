<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table -> String ('nama');
            $table -> String ('lahir') -> nullable();
            $table -> date ('tgl')-> nullable();
            $table -> String ('jk');
            $table -> String ('hobi') -> nullable();
            $table -> String ('agama');
            $table -> String ('almt') -> nullable();
            $table -> String ('telp')-> nullable();
            $table -> String ('email');
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
        Schema::dropIfExists('biodatas');
    }
}
