<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = 'owners';
    
    protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'required',
        'birthday' => 'required',
        'address' => 'required',
        'tel' => 'required',
        'mail' => 'required',
        'password' => 'required',
        'comment' => 'required',
        );
    
    public function dogs() 
    {
        return $this->hasMany('App\Models\Dog');
    }
}
