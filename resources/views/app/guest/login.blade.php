@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-push-3">

                <form action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                        @if($errors->has('email'))
                            {{ $errors->first('email') }}
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
