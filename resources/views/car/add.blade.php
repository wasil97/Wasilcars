@extends('layouts.app')

@section('content')
<h1>Add Car</h1>

<div>
        <form action="create" method="POST">
            @csrf
            <th>Car Name:</th>
            <input name="name" type="text">
            <th>Car Description:</th>
            <input name="description" type="text">
            <th>Car Color:</th>
            <input name="color" type="text">
            <br>
            <br>
            <th>Car Make:</th>
            <input name="make" type="text">
            <th>Car Model:</th>
            <input name="model" type="text">
            <input name="addcar" type="submit" value="Add">
        </form>
    </div>
@endsection