<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Schema::create('banners', function (Blueprint $table) {
//     $table->integer('id');
//     $table->integer('adminId')->unsigned();
//     $table->string('nama');
//     $table->date('uploadTime');
//     $table->string('link');

//     $table->foreign('adminId')->references('id')->on('admins')
//     ->onDelete('cascade')->onUpdate('cascade');
class Banners extends Model
{
    //
    // public $timestamps = false;
    protected $table='banners';
    
    protected $fillable=[
        'admin_id', 'nama', 'uploadTime', 'link', 'users_id', 'id', 'dueDate'
    ];

    public function admins(){
        return $this->belongsTo(\App\Admins::class);
    }

    public function user(){
        return $this->belongsTo(App\User::class);
    }
}
