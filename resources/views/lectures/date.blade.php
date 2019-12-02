@extends('layouts.app')

@section('content')
    <div class="jumbotron h-100">
        <div class="row justify-content-center align-items-center">
            <h1>MANAGE TIMESLOTS</h1>
        </div>
        <hr/>

        <div class="row justify-content-center align-items-center h-100">
            <div class="col-6">
                <form method="POST" action="">
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" id="datepicker" placeholder='Choose date...'/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <br/>
                    <button type="button" class="btn btn-dark col-12" id="search">SEARCH</button>
                </form>
            </div>
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