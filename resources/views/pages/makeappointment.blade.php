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
                            <option>Lecturer 1</option>
                            <option>Lecturer 2</option>
                            <option>Lecturer 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ddlDate">DATE</label>
                        <select id="ddlDate" class="form-control">
                            <option selected>Select...</option>
                            <option>Date 1</option>
                            <option>date 2</option>
                            <option>date 3</option>
                        </select>
                    </div>
                    <br/>
                    <button type="submit" class="btn btn-dark col-12">SEARCH</button>
                    <input type="hidden" name="submitted" value="true" />
                </form>
            </div>
        </div>
    </div>
    
@endsection