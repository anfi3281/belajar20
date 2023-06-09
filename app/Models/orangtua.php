<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class orangtua extends Model
{
    use SoftDeletes;
    protected $table = 'orangtuas';
    protected $dates = ['deleted_at'];

    public function murids(){
        return $this->belongsTo('App\Models\murids');
    }
}
