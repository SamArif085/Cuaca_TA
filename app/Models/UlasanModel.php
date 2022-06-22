<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UlasanModel extends Model
{
    use HasFactory;
    protected $table = 'ulasan_models';
    protected $fillable = ['nama_ulasan'];
    

    protected $cast = ['created_at'];
}