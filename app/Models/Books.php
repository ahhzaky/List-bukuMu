<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //use HasFactory;
    protected $table = 'bukumu';
    protected $fillable = ['judul', 'nama_pengarang', 'deskripsi', 'bintang', "image"];
}
