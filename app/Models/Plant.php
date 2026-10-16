<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    // Hanya menyajikan data tanpa perlu $fillable untuk simpan/edit
    protected $table = 'plants';
}