@extends('layouts.app')
@section('title', 'edit')
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
<div class="col-md-8">
<div class="card">
<div class="card-header">{{"Integrant"}}</div>
<div class="card-body">
    {!!Form::open(['url' => 'madre/'.$madre->id, 'method' => 'Put'])!!}
    {{csrf_field()}}
    {{Form::label('nombres', 'Nombre del madre:')}}
    {!!Form::text('name',$madre->name,['placeholder' => 'Name'])!!}<br>
    {{Form::label('apellidos', 'Apellido del madre:')}}
    {!!Form::text('lastname',$madre->lastname,['placeholder' => 'Lastname'])!!}<br>
    {{Form::label('edad', 'Edad del madre:')}}
    {!!Form::text('age',$madre->age,['placeholder' => 'Age'])!!}<br>
    {{Form::label('color', 'Color del madre:')}}
    {!!Form::text('color',$madre->color,['placeholder' => 'Color','Required'])!!}<br>
    {!!Form::submit('Enviar')!!}
    {!!Form::reset('Borrar')!!}
    {!!Form::button(link_to_route('family.madre.index','Regresar'))!!}
    {!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>
@endsection