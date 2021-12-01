<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Admin extends Model implements Authenticatable
{
    use Notifiable;
    use AuthenticableTrait;

    protected $table = 'admins';
    protected $fillable = [
        'email',
        'password',
        'ormawa',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getAuthPassword() {
        return $this->password;
    }

    public function proposal()
    {
        return $this->hasMany(\App\Proposal::class);
    }

    public function banners()
    {
        return $this->hasMany(\App\Banners::class);
    }
}
