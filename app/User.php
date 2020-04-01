<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'nama', 'username', 'password','role',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $primaryKey=['id_user'];
}
