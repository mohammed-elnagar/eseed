
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Hire date</th>
                    <th scope="col">Controle</th>
                </tr>
            </thead>
            <tbody>
                @if($employees)
                    @foreach ($employees as $employee)
                        <tr>
                            <th scope="row">{{ $employee->id }}</th>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->mobile_number }}</td>
                            <td>{{ $employee->hire_date }}</td>
                            <td>
                                <a class="btn btn-info" href="{{ route('employee.edit', $employee->id) }}">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('employee.delete', $employee->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="submit" class="btn btn-danger" value="Delte"/>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                <tr>
                    <td class="text-center" colspan="5">dont have data</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>



@endsection


