
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <head>
       <title>Customer</title>
  </head>
  <body>
    <form action="store" method="post">
    {{ csrf_field() }}
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
                <table class="table table-hover">
                    <tr>
                      <td>賽事編號</td>
                      <td>賽事名稱</td>
                      <td>舉辦時間</td>
                      <td>舉辦單位email</td>

                    </tr>
                  
                    <?php foreach($client_search_event as $row):?>
                  
                    <tr>
                      <td><?php echo $row['id'];?></td>
                      <td><?php echo $row['name'];?></td>
                      <td><?php echo $row['hold_time'];?></td>
                      <td><?php echo $row['admin_email'];?></td>
                      
                    </tr>
                
                    <?php endforeach;?>         

                  
                </table>

                <td><label>賽事編號</label>
                <input type="text" name="run_event_id" >
                <input type="submit" name="submit" value="加入"></td>
            </div>
          </div>
        </div>
      </div>
    </form>
  </body>
</html>
@endsection