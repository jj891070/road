
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
                <form action="store" method="post" onsubmit="return prevent_no_data()">
                  {{ csrf_field() }}
                  <td><label>賽事編號</label>
                  <input id="input_id" type="text" name="run_event_id" >
                  <input id="submit_id" type="submit" name="submit" value="加入" ></td>
                </form>
            </div>
          </div>
        </div>
      </div>

    <script>
    //$data=$('input[type="text"]').val();
          function prevent_no_data()
          {
            $data=$('#input_id').val();
            if($data=="")
            {
              alert("你忘了輸入賽事編號");
              $('#input_id').focus();
              return false;
              
            }
            return true;
            
          }
      </script>>
  </body>
</html>

@endsection
