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
{!!Form::open(['url' => 'hijo/', 'method' => 'Post'])!!}
{{csrf_field()}}
{{Form::label('nombre', 'Nombre del Hijo:')}}
{!!Form::text('name',null,['placeholder' => 'Nombre'])!!}<br>
{{Form::label('apellido', 'Apellido del Hijo:')}}
{!!Form::text('lastname',null,['placeholder' => 'Apellido'])!!}<br>
{{Form::label('padre', 'Padre del hijo:')}}
{!!Form::select('padres_id',[$requiere['name'] = $hijo->padre->name], ['placeholder' => 'Select option']);!!}<br>
{{Form::label('madre', 'Madre del hijo:')}}
{!!Form::select('madres_id',[$requiere['name'] = $hijo->madre->name], ['placeholder' => 'Select option']);!!}<br>
{!!Form::submit('Enviar')!!}
{!!Form::reset('Borrar')!!}
{!!Form::button(link_to_route('family.hijo.index','Regresar'))!!}
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>
@endsection