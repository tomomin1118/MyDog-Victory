{{-- Laylouts/admin/blade.phpを読み込む --}}

@extends('layouts.admin')

{{-- admin.blade.phpのtitle --}}
@section('title', 'MyDog公開プロフィール')

{{-- admin.blade.phpのcontent --}}
@section('content')
{{-- left side --}}
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\DogsController@add') }}" role="button" class="btn btn-primary">公開プロフィールを編集</a>
            </div>
            <div class="row">
                <label class="col-md-2">名前</label>
                <label class="col-md-2">{{ $posts1->name, 100 }}"></label>
            </div>
            <div class="row">
                <label class="col-md-2">生まれ年</label>
                <label class="col-md-2">{{ $posts1->birthday_year, 100 }}"></label>
            </div>
            <div class="row">
                <label class="col-md-2">年齢</label>
                <label class="col-md-2">{{ $posts1->age, 100 }}"></label>
            </div>
            <div class="row">
                <label class="col-md-2">犬種</label>
                <label class="col-md-2">{{ $posts1->breed, 100 }}"></label>
            </div>
            <div class="row">
                <label class="col-md-2">性格</label>
                <label class="col-md-2">{{ $posts1->personality, 100 }}"></label>
            </div>
            <div class="row">
                <label class="col-md-2">メイン画像</label>
                <label class="col-md-2">{{ $posts1->image, 100 }}"></label>
            </div>
        </div>
    </div>
@endsection
