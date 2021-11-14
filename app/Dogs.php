<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dogs extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'required',
        'age' => 'required',
        'breed' => 'required',
        'personality' => 'required',
        'comment' => 'required',
        );
}
