<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Adminlain extends Model
{
    protected $table = 'adminlain';

    // Define which attributes are mass assignable
    protected $fillable = [
        'judul', 'subjudul', 'keterangan', 'file'
    ];
}
