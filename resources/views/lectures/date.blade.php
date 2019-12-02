@extends('layouts.app')

@section('content')
    <div class="jumbotron h-100">
        <div class="row justify-content-center align-items-center">
            <h1>Manage the appointment</h1>
        </div>
        <hr/>

        <div>
            <form class="form-horizontal" method="post" action="">
                <div class=''>
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" id="datepicker"/>
                            <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                        </div>
                    </div>
                </div>
                <div class="float-right pb-4">
                    <button type="button" class="btn btn-primary" id="search">Search</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('#datepicker').datepicker({
            todayHighlight: true,
            format: 'dd-mm-yyyy',
            orientation: "top",
            startDate: new Date()
        });
        $( "#search" ).click(function() {
            var date = $("#datepicker").datepicker().val();
            window.location.href = '/manage/' + date;
        });
    </script>
@endsection