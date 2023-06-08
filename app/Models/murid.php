<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class murid extends Model
{
    use SoftDeletes;

    protected $table = 'murids';
    protected $fillable = ['nama', 'alamat'];
    protected $dates = ['deleted_at'];
}
