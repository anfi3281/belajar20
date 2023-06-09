<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class murids extends Model
{
    use SoftDeletes;

    protected $table = 'murids';
    protected $fillable = ['nama', 'alamat'];
    protected $dates = ['deleted_at'];

    public function orangtua(){
        return $this->hasOne('App\Models\orangtua');
    }
}
