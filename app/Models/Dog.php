<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    //テーブル名
    protected $table = 'dogs';
    
    protected $guarded = array(
        'id',
        );
    
    public static $rules = array(
        'name' => 'required',
        'birthday_year' => 'required',
        'age' => 'required',
        'breed' => 'required',
        'personality' => 'required',
        'image' => 'required',
        'comment' => 'required',
        );
    
    public function dogs() 
    {
        return $this->hasMany('Models/Dog');
    }
}

