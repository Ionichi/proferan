<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapDataAkun extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'rekap_data_akun';
    protected $guarded = [''];
}
