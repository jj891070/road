
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <head>
       <title>Customer</title>
  </head>
  <body>
    <div class="content">
      <div class="container">
	    <div class="row">
		   <div class="col-xs-12">
              <table class="table table-hover">
                    <tr>
                      <td>賽事編號</td>
                      <td>賽事名稱</td>
                      <td>舉辦時間</td>
                      <td>賽事修改</td>
                      <td>瀏覽賽況</td>
                      <td>賽事刪除</td>
                    </tr>
                  
                    <?php foreach($search_event as $row):?>
                  
                    <tr>
                      <td><?php echo $row['id'];?></td>
                      <td><?php echo $row['name'];?></td>
                      <td><?php echo $row['hold_time'];?></td>
                      <td><a href="adminupdate/{{ $row['id'] }}">修改</a></td>
                      <td><a href="adminrundetail/{{ $row['id'] }}">細項</a></td>
                      <td>
                      <form action="admindelete" method="POST">
                          {{ method_field('DELETE') }}
                          <input type="submit" name="submit" value="刪除">
                          <input type="hidden" name="id" value="{{$row['id']}}">
                          {{ csrf_field() }}
                      </form>
                      </td>
                      
                    </tr>
                
                    <?php endforeach;?>         

                  
               </table>
           </div>
	    </div>
	  </div>
    </div>
  </body>
</html>
@endsection