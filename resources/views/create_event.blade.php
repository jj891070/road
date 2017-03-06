@extends('layouts.app')

@section('content')

<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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

                      <form action="adminstore" method="post" onsubmit="return prevent_no_data()">
                      {{csrf_field()}}
                         <td>
                           <tr><label>賽事名稱 :</label></tr>
                           <tr><input id="input1" type="text" name="name" placeholder=" 請輸入賽事名稱"></tr>
                         </td></br>
                         <td>
                           <tr><label>舉辦時間 :</label></tr>
                           <tr><input id="input2" type="text" name="hold_time" placeholder=" 1999/09/09"></tr>
                         </td></br>
                         <td>
                           <tr><label>舉辦單位email :</label></tr>
                           <tr><input id="input3" type="text" name="admin_email" placeholder=" XXX@gmail.com" value="{{$user->email}}" ></tr>
                         </td></br>
                         <td>
                         <tr><input type="submit" name="submit" value="建立"></tr>
                         </td>
                      </form>
            </div>
         </div>
      </div>
    </div>
<script>
  function prevent_no_data()
  {
    $data1=$('#input1').val();
    $data2=$('#input2').val();
    $data3=$('#input3').val();
    if($data1=="")
    {
        alert("你忘了輸入賽事名稱");
        $('#input_id').focus();
        return false;     
    }
    if($data2=="")
    {
        alert("你忘了輸入舉辦時間");
        $('#input_id').focus();
        return false;     
    }
    if($data3=="")
    {
        alert("你忘了輸入email");
        $('#input_id').focus();
        return false;     
    }
    return true;
  }
</script>

    
    
</body>
</html>
@endsection