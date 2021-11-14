<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DogsController extends Controller
{
    //写真投稿画面(マイプロフィールページ)
    public function add()
    {
        return view('admin.dogs.create');
    }
    
    public function create(Request $request)
    {
        return redirect('admin/dogs/create');
    }
}
