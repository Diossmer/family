@extends('layouts.app')
@section('title', 'create')
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
{!!Form::open(['url' => 'madre/', 'method' => 'Post'])!!}
{{csrf_field()}}
{{Form::label('nombres', 'Nombre del madre:')}}
{!!Form::text('name',null,['placeholder' => 'Name'])!!}<br>
{{Form::label('apellidos', 'Apellido del madre:')}}
{!!Form::text('lastname',null,['placeholder' => 'Lastname'])!!}<br>
{{Form::label('edad', 'Edad del madre:')}}
{!!Form::text('age',null,['placeholder' => 'Age'])!!}<br>
{{Form::label('color', 'Color del madre:')}}
{!!Form::text('color',null,['placeholder' => 'Color','Required'])!!}<br>
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