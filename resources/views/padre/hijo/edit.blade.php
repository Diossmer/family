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
{!!Form::open(['url' => 'hijo/'.$edit->id, 'method' => 'put'])!!}
{{csrf_field()}}
{{Form::label('nombre', 'Nombre:')}}
{!!Form::text('user',$edit->name,['placeholder' => 'Nombre'])!!}<br>
{{Form::label('apellidos', 'Apellido:')}}
{!!Form::text('apellido',$edit->apellido,['placeholder' => 'Apellido'])!!}<br>
{{Form::label('padre', 'Padre:')}}
{!!Form::select('user_id',[$padres,$edit->user_id], ['placeholder' => 'Select option']);!!}<br>
{{--Form::checkbox('name', 'valor', true)--}}
{!!Form::submit('Enviar')!!}
{!!Form::reset('Borrar')!!}
{!!Form::button(link_to_route('todowebsie.hijo.index','Regresar'))!!}
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>
@endsection