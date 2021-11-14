{{-- Laylouts/admin/blade.phpを読み込む --}}

@extends('layouts.admin')

{{-- admin.blade.phpのtitle --}}
@section('title', 'MyDogプロフィール')

{{-- admin.blade.phpのcontent --}}
@section('content')
{{-- left side --}}
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>MyDogプロフィール</h2>
                <form action="{{ action('Admin\DogsController@create') }}" method="post" enctype="multipart/form-data">
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
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">生まれ年</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="birthday_year" value="{{ old('birthday_year') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">年齢</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="age" value="{{ old('age') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">犬種</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="breed" value="{{ old('breed') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">性格</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="personality" rows="3">{{ old('personality') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
                
                {{-- right side --}}
                <div>
                    <label class="col-md-2">photo</label>
                    <div class="form-group row">
                        <label class="col-md-2">一言</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="comment" rows="1">{{ old('comment') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
                
                 <div>
                    <label class="col-md-2">photo</label>
                    <div class="form-group row">
                        <label class="col-md-2">一言</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="comment" rows="1">{{ old('comment') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
                
                 <div>
                    <label class="col-md-2">photo</label>
                    <div class="form-group row">
                        <label class="col-md-2">一言</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="comment" rows="1">{{ old('comment') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
                
                <div>
                    <label class="col-md-2">photo</label>
                    <div class="form-group row">
                        <label class="col-md-2">一言</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="comment" rows="1">{{ old('comment') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
                
                 <div>
                    <label class="col-md-2">photo</label>
                    <div class="form-group row">
                        <label class="col-md-2">一言</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="comment" rows="1">{{ old('comment') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
                
                 <div>
                    <label class="col-md-2">photo</label>
                    <div class="form-group row">
                        <label class="col-md-2">一言</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="comment" rows="1">{{ old('comment') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
                
                <div>
                    <label class="col-md-2">photo</label>
                    <div class="form-group row">
                        <label class="col-md-2">一言</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="comment" rows="1">{{ old('comment') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
                
                 <div>
                    <label class="col-md-2">photo</label>
                    <div class="form-group row">
                        <label class="col-md-2">一言</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="comment" rows="1">{{ old('comment') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
                
                 <div>
                    <label class="col-md-2">photo</label>
                    <div class="form-group row">
                        <label class="col-md-2">一言</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="comment" rows="1">{{ old('comment') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
                
                <div class="form-group row">
                    <label class="col-md-2">お気に入りポイント</label>
                    <div class="col-md-10">
                        <textarea class="form-control" name="comment" rows="1">{{ old('comment') }}</textarea>
                    </div>
                </div>
                
                    
            </div>
        </div>
    </div>
@endsection
