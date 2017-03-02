
@extends('layouts.app')

@section('content')
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
                      <td>{{$row->achievement}}</td>
                    </tr>
                
                      
                    @endforeach         

                  
               </table>
           </div>
  	    </div>
  	  </div>
    </div>

    
@endsection