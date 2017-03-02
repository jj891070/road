@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center"><h2>中佑資訊股份有限公司</h2></div>

                <div class="panel-body" align="center">
                    您好，您已經登入了路跑系統!</br>
                    <h4>Admin Control:</h4>
                    <a href="{{ url('adminsearch') }}">Admin_hold_run_event</a></br>
                    <a href="{{ url('admincreate') }}">Admin_set_run_event</a></br>
                    <h4>Client Control:</h4>
                    <a href="{{ url('clientsearch') }}">client_add</a></br>
                    <a href="{{ url('show') }}">client_history_list</a></br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
