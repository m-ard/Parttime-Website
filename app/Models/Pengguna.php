<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    protected $fillable = ['id_pengguna', 'nama', 'ttl', 'jenis_kelamin', 'tinggi', 'bb', 'agama', 'kebangsaan', 'status', 'alamat', 'no_hp', 'email', 'password'];
}
