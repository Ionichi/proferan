<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Berita extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'berita';

    // Define which attributes are mass assignable
    protected $fillable = [
        'tanggal', 'judul', 'keterangan', 'link', 'gambar'
    ];
}