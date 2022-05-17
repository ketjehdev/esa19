<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kompetisi extends Model
{
    use HasFactory;
    protected $table = 'kompetisi';
    protected $fillable = [
        'jenis_lomba',
        'lomba',
        'ekskul',
        'status',
        'image',
        'guide_book'
    ];
}
