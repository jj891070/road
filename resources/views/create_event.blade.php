@extends('layouts.app')

@section('content')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $new_event }}</title>
</head>
<body>
    <div class="content">
      <div class="container">
         <div class="row">
            <div class="col-xs-12">
               <h1>{{ $new_event }}</h1>

                      <form action="adminstore" method="post">
                      {{csrf_field()}}
                         <td>
                           <tr><label>賽事名稱 :</label></tr>
                           <tr><input type="text" name="name" placeholder=" 請輸入賽事名稱"></tr>
                         </td></br>
                         <td>
                           <tr><label>舉辦時間 :</label></tr>
                           <tr><input type="text" name="hold_time" placeholder=" 1999/09/09"></tr>
                         </td></br>
                         <td>
                           <tr><label>舉辦單位email :</label></tr>
                           <tr><input type="text" name="admin_email" placeholder=" XXX@gmail.com"></tr>
                         </td></br>
                         <td>
                         <tr><input type="submit" name="submit" value="建立"></tr>
                         </td>
                      </form>
            </div>
         </div>
      </div>
    </div>


    
    
</body>
</html>
@endsection