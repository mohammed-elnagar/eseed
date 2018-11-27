@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        name: {{ $user->name }}<br>
        email: {{ $user->email }}<br>
        type: {{ $user->type }}
    </div>
</div>



@endsection
