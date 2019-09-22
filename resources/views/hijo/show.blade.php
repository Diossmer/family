@extends('layouts.app')
@section('title', 'show')
@section('navbar')
@include('include.navbar')
@endsection
@section('sidebar')
@include('include.sidebar')
@endsection
@section('footer')
@include('include.footer')
@endsection
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-10">
<div class="card">
<div class="card-header">{{"Integrant"}}</div>
<div class="card-body">
<h1>Usuario: {{$hijo->name." ".$hijo->lastname}}</h1>
<p>Usted tiene una gran virtud por delante</p>
<hr>
<p>Se felicita por adquirir conocimiento puro en su tiempo.</p>
<p>Le damos la bienvenida: <b>{{$hijo->name." ".$hijo->lastname}}</b></p>
<table border="1" style="background-color:#ff7000">
        <tr>
            <td><h3>padre:</h3></td>
        </tr>
        <tr>
                <th>Name</th>
                <th>Lastname</th>
                <th>Age</th>
                <th>Color</th>
                <th>Ingreso</th>
                <th>Actualizacion</th>
        </tr>
        <tr>
            <td><p>Su nombre es: <b>{{$hijo->padre->name}}</b></p></td>
            <td><p>Su apellido es: <b>{{$hijo->padre->lastname}}</b></p></td>
            <td><p>Su edad es: <b>{{$hijo->padre->age}}</b></p></td>
            <td><p>Su color es: <b>{{$hijo->padre->color}}</b></p></td>
            <td><p>Su creacion de archivo es: <b>{{$hijo->padre->created_at}}</b></p></td>
            <td><p>Su ultima actualizacion es: <b>{{$hijo->padre->updated_at}}</b></p></td>
        </tr>
        <tr>
            <td><h3>Madre</h3></td>
        </tr>
        <tr>
                <th>Name</th>
                <th>Lastname</th>
                <th>Age</th>
                <th>Color</th>
                <th>Ingreso</th>
                <th>Actualizacion</th>
        </tr>
        <tr>
            <td><p>Su nombre es: <b>{{$hijo->madre->name}}</b></p></td>
            <td><p>Su apellido es: <b>{{$hijo->madre->lastname}}</b></p></td>
            <td><p>Su edad es: <b>{{$hijo->madre->age}}</b></p></td>
            <td><p>Su color es: <b>{{$hijo->madre->color}}</b></p></td>
            <td><p>Su creacion de archivo es: <b>{{$hijo->madre->created_at}}</b></p></td>
            <td><p>Su ultima actualizacion es: <b>{{$hijo->madre->updated_at}}</b></p></td>
        </tr>
    </table>
    <p>sin mas nada que decir nos encontremos en su proxima actualizacion de <b>{{env('APP_NAME', 'Laravel')}}</b></p>
<hr>
{!!Form::button(link_to('hijo','Regresar'))!!}
</div>
</div>
</div>
</div>
</div>
@endsection