
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <head>
       <title>Customer</title>
  </head>
  <body>
         {{ csrf_field() }}
    <div class="content">
      <div class="container">
	    <div class="row">
		   <div class="col-xs-12">
              <table class="table table-hover">
                    <tr>
                      <td>賽事名稱</td>
                      <td>舉辦時間</td>
                      <td>廠商email</td>
                      <td>成績</td>
                      <td>刪除賽事</td>
                    </tr>
                 
                    @foreach($client_show_added->run_event_item as $row)
                                     
                    <tr>
                      <td>{{$row->run_event->name}}</td>
                      <td>{{$row->run_event->hold_time}}</td>
                      <td>{{$row->run_event->admin_email}}</td>
                      <td>{{$row->achievement}}</td>
                      <td>
                        <form action="delete" method="POST">
                          {{ method_field('DELETE') }}
                          <input type="submit" name="submit" value="刪除">
                          <input type="hidden" name="id" value="{{$row['id']}}">
                          {{csrf_field()}}
                        </form>
                      </td>
                    </tr>
                
                      
                    @endforeach         

                  
               </table>
           </div>
	    </div>
	  </div>
    </div>
  </body>
</html>
@endsection