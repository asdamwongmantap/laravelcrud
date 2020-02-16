<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'nama', 'email', 'tempat_lahir', 'tanggal_lahir', 'gender', 'alamat', 
        //tambahkan kolom sesuai tabel users kecuali kolom id dan timestamp (created_at & updated_at)
    ];
    protected $primaryKey = 'id';
}