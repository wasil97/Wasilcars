@extends('layouts.app')

@section('content')
<h1>My Cars</h1>
{{-- {{$cars}} --}}
<table  id="mycar" width="100%">
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
            <td>{{$car->name}}</td>
            <td>{{$car->description}}</td>
            <td>{{$car->color}}</td>
            <td>{{$car->make}}</td>
            <td>{{$car->model}}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>

@endsection