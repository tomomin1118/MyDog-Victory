{{-- Laylouts/admin/blade.phpを読み込む --}}

@extends('layouts.admin')

{{-- admin.blade.phpのtitle --}}
@section('title', 'Myプロフィール')

{{-- admin.blade.phpのcontent --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Myプロフィール編集画面</h2>
                <form action="{{ action('Admin\OwnerController@editowner') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0 )
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $profile_form->name) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">生年月日</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="birthday" value="{{ $profile_form->birthday }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">都道府県</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="address" value="{{ $profile_form->address }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">電話番号</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="tel" value="{{ $profile_form->tel }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">メールアドレス</label>
                        <div class="col-md-10">
                            <input class="form-control" name="mail">{{ $profile_form->mail }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">パスワード</label>
                        <div class="col-md-10">
                            <input class="form-control" name="password">{{ $profile_form->password }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection
