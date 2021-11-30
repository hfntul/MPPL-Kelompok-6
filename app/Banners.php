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
        'adminId', 'nama', 'uploadTime', 'link', 'users_id'
    ];

    public function admins(){
        return $this->belongsTo( related: \app\Admins::class, foreignKey: 'adminId', ownerKey: 'id');
    }

    public function user(){
        return $this->belongsTo( related: \app\User::class, foreignKey: 'users_id', ownerKey: 'id');
    }
}
