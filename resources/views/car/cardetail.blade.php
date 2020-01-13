@extends('layouts.app')

@section('content')
<h1>Car Details</h1>

<div>
    <table style="width:90%; margin:5%;">
        <tr>
          <th>Car Name:</th>
          <td>{{$car->name}}</td>
        </tr>
        <tr>
          <th>Description:</th>
          <td>{{$car->description}}</td>
        </tr>
        <tr>
          <th>Color:</th>
          <td>{{$car->color}}</td>
        </tr>
        <tr>
           <th>Make:</th>
           <td>{{$car->make}}</td>
        </tr>
        <tr>
           <th>Model:</th>
           <td>{{$car->model}}</td>
        </tr>
      </table>
</div>
@endsection