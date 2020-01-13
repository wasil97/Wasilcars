@extends('layouts.app')

@section('content')
<h1>Car List</h1>

<table  id="carlist" width="100%">
        <thead>
            <tr>
                <th>Car Id</th>
                <th>Car Name</th>
                <th>Description</th>
                <th>Color</th>
                <th>Make</th>
                <th>Model</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
            <tr>
            <td>{{$car->id ?? ''}}</td>
            <td><a href="car/{{$car->id}}">{{$car->name}}</a> </td>
            <td>{{$car->description}}</td>
            <td>{{$car->color}}</td>
            <td>{{$car->make}}</td>
            <td>{{$car->model}}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>

@endsection