<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use App\Models\Dog;
use App\Models\Images;


class DogsController extends Controller
{
    //mydogプロフィールページ(写真投稿画面) 
    public function add()
    {
        return view('admin.dogs.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Dog::$rules);
        
        $dogs = new Dog;
        $form = $request->all();
        
        if(isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $dogs->image_path = basename($path);
        } else {
            $dogs->image_path = null;
        }
        
        unset($form['_token']);
        unset($form['image']);
        
        //後に続く画像のバックアップのための変数
        $form2 = $form;
        
        unset($form['one_comment']);
        unset($form['images']);
        
        $form['user_id'] = Auth::id();
        
        $dogs->fill($form);
        $dogs->save();
        
        if(isset($form2['images']) && is_array($request->file('images'))) {
            foreach($request->file('images') as $key =>$images) {
                $path = $images->store('public/image');
                $image_model = new Images;
                $image_model->image_path = basename($path);
                $image_model->dog_id = $dogs->id;
                $image_model->one_comment = $form2['one_comment'][$key];
                $image_model->save();
            }
        }
        
        return redirect('admin/dogs/create');
    }
    
    //mydogプロフィール画面(公開用)
    public function open()
    {
      
        $posts1 = Dog::where('user_id', Auth::id())->get()->first();
        
        $params = [
            'post' => $posts1
        ];
        
        return view('admin/dogs/open', $params);
    
    }
    
}
