<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table    = "book";
    protected $fillable = [
        'id',
        'judul',
        'pengarang',
        'penerbit',
        'tahun_terbit',
        'created_at',
        'updated_at'
    ];
}
