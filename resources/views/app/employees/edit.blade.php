@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-push-3">
                <h3>Edit Employee {{ $employee->name }}</h3>
                <form action="{{ route('employee.update') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $employee->id }}">

                    <div class="form-group">
                        <label for="name">Type name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ old('name', $employee->name) }}">
                        @if($errors->has('name'))
                            {{ $errors->first('name') }}
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ old('email', $employee->email) }}">
                        @if($errors->has('email'))
                            {{ $errors->first('email') }}
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="mobile_number">mobile_number</label>
                        <input type="text" name="mobile_number" class="form-control" id="mobile_number" placeholder="Mobile number"  value="{{ old('mobile_number', $employee->mobile_number) }}">
                        @if($errors->has('mobile_number'))
                            {{ $errors->first('mobile_number') }}
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="hire_date">hire_date</label>
                        <input type="text" name="hire_date" class="form-control" id="hire_date" placeholder="Hire date" value="{{ old('hire_date', $employee->hire_date) }}">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
