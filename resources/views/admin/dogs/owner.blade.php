{{-- Laylouts/admin/blade.phpを読み込む --}}

@extends('layouts.admin')

{{-- admin.blade.phpのtitle --}}
@section('title', 'Myプロフィール')

{{-- admin.blade.phpのcontent --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Myプロフィール</h2>
                {{--@foreach($profile as $profiles)--}}
                    <div class="form-group row">
                        <label class="col-md-2">名前</label>
                        <label class="col-md-2">{{ $profiles->name }}</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">生年月日</label>
                        <label class="col-md-2">{{ $profiles->birthday }}</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">都道府県</label>
                        <label class="col-md-2">{{ $profiles->address }}</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">電話番号</label>
                        <label class="col-md-2">{{ $profiles->tel }}</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">メールアドレス</label>
                        <label class="col-md-2">{{ $profiles->mail }}</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">パスワード</label>
                        <label class="col-md-2">{{ $profiles->password }}</label>
                    </div>
                {{--@endforeach--}}
                <div class="col-md-4">
                    <a href="{{ action('Admin\OwnerController@editowner') }}" role="button" class="btn btn-primary">Myプロフィールを編集</a>
                </div>
            </div>
        </div>
    </div>
@endsection
