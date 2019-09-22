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
<div class="col-md-8">
<div class="card">
<div class="card-header">{{"Integrant"}}</div>
<div class="card-body">
<h1>Usuario: {{$padres->name." ".$padres->lastname}}</h1>
<p><b>{{$padres->lastname}}</b> Usted tiene una gran virtud por delante y felicidades por su progreso.</p>
<hr>
<p>Su edad es: <b>{{$padres->age}}</b> falta por tener mas edad</p>
<p>sin mas nada que decir nos encontremos en su proxima actualizacion de <b>{{env('APP_NAME', 'Laravel')}}</b></p>
<p>Su color de pies es: <b>{{$padres->color}}</b></p>
<p>Su creacion de archivo es: <b>{{$padres->created_at}}</b></p>
<p>Su ultima actualizacion es: <b>{{$padres->updated_at}}</b></p>
<hr size="10">
{!!Form::button(link_to('padre','Regresar'))!!}
</div>
</div>
</div>
</div>
</div>
@endsection