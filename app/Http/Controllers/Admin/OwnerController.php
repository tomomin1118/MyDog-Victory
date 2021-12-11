<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use App\Models\Owner;

class OwnerController extends Controller
{
    //ユーザー登録画面
    public function newowner()
    {
        return view('admin.dogs.newowner');
    }
    
    public function createowner(Request $request)
    {
        
        $this->validate($request, Owner::$rules);
        
        $owners = new Owner;
        $form = $request->all();
        $form['user_id'] = Auth::id();
        
        unset($form['_token']);
        
        $owners->fill($form);
        $owners->save();
        
        return view('admin.dogs.owner');
    }
    
    //ユーザープロフィール画面
    public function owner()
    {
        $profile = Owner::where('id', Auth::id())->get()->first();
        
        $profiles = [
            'post' => $profile
        ];
        
        return view('admin/dogs/owner', $profiles);
        
    }
    
    //ユーザープロフィール更新画面
    public function editowner(Request $request)
    {
        $profile = Owner::find($request->id);
        
        $this->validate($request, Owner::$rules);
        $profile = Owner::find($request->id);
        $profile_form = $request->all();
        
        unset($profile_form['_token']);
        
        $profile->file($profile_form)->save();
    
        return view('admin/dogs/owner');
    }
}
