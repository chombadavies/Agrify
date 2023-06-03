<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function Category(){
        return $this->belongsTo('App\Models\Category');
    }
    public function achievements(){
        return $this->hasMany('App\Models\Achievement');
      }
}
