<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id')->unsigned();
            // $table->string('kabinet')->unsigned();
            // $table->date('uploadTime');
            $table->string('eventName');
            $table->string('eventTimeHeld');
            $table->string('file');

            $table->foreign('admin_id')->references('id')->on('admins')
            ->onDelete('cascade')->onUpdate('cascade');

            // $table->foreign('kabinet')->references('ormawa')->on('admins')
            // ->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('proposal');
    }
}
