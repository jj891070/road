
@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <div class="content">
      <div class="container">
	    <div class="row">
		   <div class="col-xs-12">
              <table class="table table-hover">
                    <tr>
                      <td>姓名</td>
                      <td>email</td>
                      <td>成績</td>
                    </tr>
                 
                    @foreach($data as $row)
                      
                  
                    <tr>
                      <td>{{$row->user->name}}</td>
                      <td>{{$row->user->email}}</td>
                      <td id="zz{{ $row->id }}" onclick="changeInput({{ $row->id }})">{{ $row->achievement }}</td>
                      <td id="score{{ $row->id }}" style="display: none;"><input  id="aa{{ $row->id }}" type="text" name="" onkeydown="saveScore(event, {{$row->id}})"></td>
                      
                    </tr>
                
                      
                    @endforeach         

                  
               </table>
           </div>
  	    </div>
  	  </div>
    </div>

    <script>
  // $(document).ready(function(){
  //   $.ajax({
  //     method:"GET",
  //     url:"{{url('adminrungrade/{id}')}}",
  //     data:{body:$().value(),postId:''}
  //   })
  //   .done(function(msg){
  //     console.log(msg);
  //     var email=msg.result[0].email;
  //     $('div').append(email);
  //   });
  // });
  // $().on('click',function(){
  //    $.ajax({
  //      method:'POST',
  //      url:'',
  //    });
  // });

  function changeInput(id) {
    $('#score'+id).show();
    $('#aa'+id).val($('#zz'+id).text());
    $('#zz'+id).hide();
  }

  function saveScore(event, id) {
    console.info(event);
    if (event.key != 'Enter') {
      return ;
    }
    var val = $('#aa'+id).val();
    console.log(val);

    $.ajax({
      method: 'GET',
      url: "{{ url('adminSaverungrade') }}",
      data: {
        'grade': val,
        'id': id
      },
      success: function(res) {
        console.info(res);
        $('#zz' + id).text(val).show();
        $('#score'+id).hide();
      },
      error: function(err) {
        console.warn(err);
      }
    });
  }
</script>
@endsection