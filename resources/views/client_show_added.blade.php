
@extends('layouts.app')

@section('content')
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
                 
                    @foreach($items as $item)
                    <tr>
                      <td>{{ $item->run_event->name }}</td>
                      <td>{{$item->run_event->hold_time}}</td>
                      <td>{{$item->run_event->admin_email}}</td>
                      <td>{{$item->achievement}}</td>
                      <td>
                        <form action="delete" method="POST" onsubmit="return prevent_delete()">
                          {{ method_field('DELETE') }}
                          <input type="submit" name="submit" value="刪除">
                          <input type="hidden" name="id" value="{{$item->id}}">
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

    <script>
      function prevent_delete()
      {
        var aa=confirm("確定要刪除嗎?");
        if(aa==false)
        {
          return false;
        }
        return true;
      }
    </script>
@endsection