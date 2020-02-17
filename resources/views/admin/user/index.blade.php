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
                                <th width="50%">emali</th>
                            </tr>
                            <tbody>
                            @foreach($posts as $user)
                                <tr>
                                    <th>{{ $user->id }}</th>
                                    <td>{{ $user->name}}</td>
                                    <td>{{ $user->gender}}</td>
                                    <td>{{ $user->workplace}}</td>
                                    <td>{{ $user->email}}</td>
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