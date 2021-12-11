{{-- Laylouts/admin/blade.phpを読み込む --}}

@extends('layouts.admin')

{{-- admin.blade.phpのtitle --}}
@section('title', 'MyDog公開プロフィール')

{{-- admin.blade.phpのcontent --}}
@section('content')
{{-- left side --}}
    <div class="container">
        {{--
        @if (count($posts1) === 0)
            <div>登録がありません。準備中。</div>
        @else
            @foreach ($posts1 as $post)
        --}}
            <div>
                <div class="col-md-4">
                    <a href="{{ action('Admin\DogsController@add') }}" role="button" class="btn btn-primary">公開プロフィールを編集</a>
                </div>
                <div class="row">
                    <label class="col-md-2">名前</label>
                    <label class="col-md-2">{{ $post->name, 100 }}</label>
                </div>
                <div class="row">
                    <label class="col-md-2">生まれ年</label>
                    <label class="col-md-2">{{ $post->birthday_year, 100 }}</label>
                </div>
                <div class="row">
                    <label class="col-md-2">年齢</label>
                    <label class="col-md-2">{{ $post->age, 100 }}</label>
                </div>
                <div class="row">
                    <label class="col-md-2">犬種</label>
                    <label class="col-md-2">{{ $post->breed, 100 }}</label>
                </div>
                <div class="row">
                    <label class="col-md-2">性格</label>
                    <label class="col-md-2">{{ $post->personality, 100 }}</label>
                </div>
                <div class="row">
                    <label class="col-md-2">メイン画像</label>
                    @if ($post->image_path != null)
                        <img src="{{ secure_asset('storage/image/'.$post->image_path) }}" style="max-height:200px;max-width:200px">
                    @endif
                </div>
            </div>
            {{--
            @endforeach
        @endif
        
        @if (count($post->images) === 0)
            <div>写真投稿まち</div>
        @else    
            @foreach ($post->images as $image)
                <div class="row">
                    @if ($image->image_path !== null)
                        <img src="{{ secure_asset('storage/image/'.$image->image_path) }}" style="max-height:50px;max-width:50px">
                    @endif
                </div>
            @endforeach
        @endif
        --}}
    </div>
@endsection
