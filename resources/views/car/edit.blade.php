@extends('layouts.app')

@section('content')
<h1>Edit Car</h1>

<div>
        <form action="{{   route('editcar', $car->id) }}" method="POST">
            @csrf
            <th>Car Name:</th>
            <input name="name" type="text" value="{{ $car->name}}">
            <th>Car Description:</th>
            <input name="description" type="text" value="{{ $car->description}}">
            <th>Car Color:</th>
            <input name="color" type="text" value="{{ $car->color}}">
            <br>
            <br>
            <th>Car Make:</th>
            <input name="make" type="text" value="{{ $car->make}}">
            <th>Car Model:</th>
            <input name="model" type="text" value="{{ $car->model}}">
            <input name="editcar" type="submit" value="Update" value="{{ $car->name}}">
        </form>
</div>
@endsection