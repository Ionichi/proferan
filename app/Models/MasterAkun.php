<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterAkun extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'master_akun';
    protected $guarded = [''];
}
