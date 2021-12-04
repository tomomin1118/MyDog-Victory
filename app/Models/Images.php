<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    //テーブル名
    protected $table = 'images';
    
    protected $guarded = array(
        'id',
        );
    
    public static $rules = array(
        'image' => 'required',
        'one_comment' => 'required',
        );
    
    // public function images() 
    // {
    //     return $this->hasMany('Models/Images');
    // }
}