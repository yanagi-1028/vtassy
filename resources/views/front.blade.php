@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="image">
                                    @if ($headline->image_path)
                                        <img src="{{ asset('storage/image/' . $headline->image_path) }}">
                                    @endif
                                </div>
                                <div class="title p-2">
                                    <h1>{{ str_limit($headline->title, 70) }}</h1>
                                </div>
                            </div>
                        </div>
                        <!-- <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li> -->
//url()
<!--<li><a href="{{ url('/posts', $post->id) }}">{{ $post->title }}</a></li>-->

//action() コントローラーとメソッドを指定する記述　(Postsコントローラのshowメソッド)
<li><a href="{{ action('PostsController@show', $post->id) }}">{{ $post->title }}</a></li>


                        <div class="col-md-6">
                            <p class="body mx-auto">{{ str_limit($headline->content, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date"　style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333;">
                                    
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                
                                <div class="title">
                                    {{ str_limit($post->title, 150) }}
                                </div>
                                <div class="content mt-3">
                                    {{ str_limit($post->content, 1500) }}
                                </div>
                            </div>
                            <div class="image col-md-6 text-right mt-4">
                                @if ($post->image_path)
                                    <img src="{{ asset('storage/image/' . $post->image_path) }}">
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
