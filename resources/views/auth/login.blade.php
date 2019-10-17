@extends('layouts.app')

@section('content')

<div class="jumbotron h-100">
    <div class="row justify-content-center align-items-center">
        <h1>LOG IN</h1>    
    </div>
    <hr/>
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-6">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="username">USERNAME</label>
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="password">PASSWORD</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <br/>
                <button type="submit" class="btn btn-dark col-12">LOG IN</button>
            </form>
        </div>
    </div>
</div>

@endsection
