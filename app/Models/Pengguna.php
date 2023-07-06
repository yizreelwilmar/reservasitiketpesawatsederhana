<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $fillable = [
        'nama',
        'username',
        'password',
        'email',
        'jenis_kelamin',
        'agama',
        ];
}
