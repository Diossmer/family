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
{{Form::label('nombre', 'Nombre:')}}
{!!Form::text('user',null,['placeholder' => 'Nombre'])!!}<br>
{{Form::label('apellido', 'Apellido:')}}
{!!Form::text('apellido',null,['placeholder' => 'Apellido'])!!}<br>
{{Form::label('padre', 'Padre:')}}
{!!Form::select('user_id',[], ['placeholder' => 'Select option']);!!}<br>
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