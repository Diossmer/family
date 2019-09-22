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
    {!!Form::open(['url' => 'padre/'.$padre->id, 'method' => 'Put'])!!}
    {{csrf_field()}}
    {{Form::label('nombres', 'Nombre del Padre:')}}
    {!!Form::text('name',$padre->name,['placeholder' => 'Name'])!!}<br>
    {{Form::label('apellidos', 'Apellido del Padre:')}}
    {!!Form::text('lastname',$padre->lastname,['placeholder' => 'Lastname'])!!}<br>
    {{Form::label('edad', 'Edad del Padre:')}}
    {!!Form::text('age',$padre->age,['placeholder' => 'Age'])!!}<br>
    {{Form::label('color', 'Color del Padre:')}}
    {!!Form::text('color',$padre->color,['placeholder' => 'Color','Required'])!!}<br>
    {!!Form::submit('Enviar')!!}
    {!!Form::reset('Borrar')!!}
    {!!Form::button(link_to_route('family.padre.index','Regresar'))!!}
    {!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>
@endsection