<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Petani extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'petani';
    protected $primaryKey = 'id_petani';

    protected $fillable = [
        'nama_lengkap',
        'username',
        'email',
        'gender',
        'no_telp',
        'alamat',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
