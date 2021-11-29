<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Schema::create('proposal', function (Blueprint $table) {
//     $table->integer('id');
//     $table->integer('adminId')->unsigned();
//     $table->string('kabinet');
//     $table->date('uploadTime');
//     $table->string('eventName');
//     $table->string('eventTimeHeld');

//     $table->foreign('adminId')->references('id')->on('admins')
//     ->onDelete('cascade')->onUpdate('cascade');

class Proposal extends Model
{
    //
    public $timestamps = false;
    
    protected $table='proposal';

    protected $fillable=[
        'adminId', 'kabinet', 'uploadTime', 'eventName', 'eventTimeHeld'
    ];
        
    public function admins(){
        return $this->belongsTo( related: \app\Admins::class, foreignKey: 'adminId', ownerKey: 'id');
    }

    public function user(){
        return $this->belongsTo( related: \app\User::class, foreignKey: 'users_id', ownerKey: 'id');
    }
}
