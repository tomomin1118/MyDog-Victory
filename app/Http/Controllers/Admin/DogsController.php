<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Dogs;

class DogsController extends Controller
{
    //写真投稿画面(マイプロフィールページ)
    public function add()
    {
        return view('admin.dogs.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Dogs::$rules);
        
        $dogs = new $Dogs;
        $form = $request->all();
        
        if(isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $dogs->image_path = basename($path);
        } else {
            $dogs->image_path = null;
        }
        
        unset($form['_token']);
        unset($form['image']);
        
        $dogs->fill($form);
        $dogs->save();
        
        return redirect('admin/dogs/create');
    }
}
