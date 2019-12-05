@extends('layouts.app')

@section('content')

    <div class="jumbotron h-100">
        <div class="row justify-content-center align-items-center">
            <h1>APPOINTMENT MAKING</h1>
        </div>
        <hr/>
        
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-6">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="ddlLecturer">LECTURER</label>
                        <select id="ddlLecturer" class="form-control">
                            <option selected>Select...</option>
                            @foreach($users as $user)
                            <option value="{{$user -> name}}">{{$user -> name}}</option>   
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ddlDate">DATE</label>
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
                    </div>
                    <br/>
                    <button type="button" class="btn btn-dark col-12" id="search">SEARCH</button>
                    <input type="hidden" name="submitted" value="true" />
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
            var name = $("#ddlLecturer").val();
            window.location.href = '/makeappointment_/' + date + '/' + name;
        });
    </script>
@endsection