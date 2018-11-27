@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-push-3">
                <h3>New Employee</h3>
                <form action="{{ route('employee.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Type name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                        @if($errors->has('name'))
                            {{ $errors->first('name') }}
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                        @if($errors->has('email'))
                            {{ $errors->first('email') }}
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="mobile_number">mobile_number</label>
                        <input type="text" name="mobile_number" class="form-control" id="mobile_number" placeholder="Mobile number">
                        @if($errors->has('mobile_number'))
                            {{ $errors->first('mobile_number') }}
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="hire_date">hire_date</label>
                        <input type="text" name="hire_date" class="form-control" id="hire_date" placeholder="Hire date">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
