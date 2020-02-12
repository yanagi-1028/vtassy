@extends('layouts.admin')
@section('title', 'アカウント一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>アカウント一覧</h2>
        </div>
        <div class="row">
            
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-success">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">名前</th>
                                <th width="20%">性別</th>
                                <th width="20%">勤務地</th>
                                <th width="50%">メールアドレス</th>
                            </tr>
                            <tbody>
                            @foreach($posts as $profile)
                                <tr>
                                    <th>{{ $profile->id }}</th>
                                    <td>{{ $profile->name}}</td>
                                    <td>{{ $profile->gender}}</td>
                                    <td>{{ $profile->workplace}}</td>
                                    <td>{{ $profile->mailaddress}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection