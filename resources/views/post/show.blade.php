@extends('layouts.admin')

@section('投稿詳細')
　<div calss="container mt-4">
　    <div class="border p-4">
　        <h1 class="h5 mb-4">
　            {{ $post->title}}
　        </h1>
　        
　        <p class="md-5">
　            {{!! nl2br(e($post->content) !!)}}
　        </p>
　    </div>
　</div>

@endsection