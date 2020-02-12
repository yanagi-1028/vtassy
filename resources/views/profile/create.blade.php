  @extends('layouts.admin')
    
    @section('title', 'アカウント作成')
    
　　@section('content')
　　<div class="container">
　　    <div class="row">
　　        <div class="col-md-8 mx-auto">
　　            <h2>アカウント登録</h2>
　　            <form action="{{ action('ProfileController@create') }}" method="post" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label class="col-md-2">氏名</label></label>
                        <div class="col-md-10">
                            <input type="text" class="form-control"　size="10" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                <div class="form-group">
                　性別<br>
                     　　　　　<label><input type="radio" name="gender" value="男性">男性</label><br>
                     　　　　　<label><input type="radio" name="gender" value="女性">女性</label><br>
                     　　　　　<label><input type="radio" name="gender" value="未記入">未記入</label><br>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2">勤務地</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="workplace" value="{{ old('workplace') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2">メールアドレス</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="mailaddress" value="{{ old('mailaddress') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2">パスワード</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="password" value="{{ old('password') }}">
                        </div>
                    </div>
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="登録">
                </form>
               
                </div>
            </div>
        </div>
    </div>
　　        </div>
　　    </div>
　　</div>
　　@endsection
