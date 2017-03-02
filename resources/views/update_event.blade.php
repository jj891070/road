@extends('layouts.app')

@section('content')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>賽事修改</title>
</head>
<body>
    <div class="content">
      <div class="container">
         <div class="row">
            <div class="col-xs-12">


                      <form action="{{ url('adminsave') }}" method="post">

                      {{csrf_field()}}
                         <tr><label>賽事名稱</label>
                         <input type="text" name="name" value="{{$data->name}}"></tr>
                         <tr><label>舉辦時間</label>
                         <input type="text" name="hold_time" value="{{$data->hold_time}}"></tr>
                         <tr><label>舉辦單位email</label>
                         <input type="text" name="admin_email" value="{{$data->admin_email}}"></tr>
                         <input type="hidden" name="id" value="{{$data->id}}">
                         <tr><input type="submit" name="submit" value="儲存修改"></tr>
                      </form>
            </div>
         </div>
      </div>
    </div>


    
    
</body>
</html>
@endsection