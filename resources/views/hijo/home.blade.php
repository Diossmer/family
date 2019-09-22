@extends('layouts.app')
@section('title', 'home')
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
<div class="card-header">{{"Integrant"}} Hijo</div>
<div class="card-body">
<table  border="2" width="100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Lastname</th>
            <th>Father</th>
            <th>Mother</th>
            <th>Action</th>
        </tr>
    </thead>
   @foreach ($families as $family)
        <tbody>
            <tr>
                <td>{!!link_to_route('family.hijo.show',$family->name,$family->id)!!}</td>
                <td>{{$family->lastname}}</td>
                <td>{{$family->padre->name." ".$family->padre->lastname}}</td>
                <td>{{$family->madre->name." ".$family->padre->lastname}}</td>
                <td>
                    {!!Form::open(['url' => 'hijo/'.$family->id, 'method' => 'DELETE'])!!}
                    {!!Form::button(link_to_route('family.hijo.edit','Editar',$family->id))!!}
                    {!!Form::submit('Eliminar')!!}
                    {{Form::close()}}
                </td>    
            </tr>            
        </tbody>
    @endforeach
</table>
{!!Form::button(link_to_route('family.hijo.create','Add Son'))!!}
{!!Form::button(link_to_route('family.madre.index','Go Mother'))!!}
{!!Form::button(link_to_route('family.padre.index','Go Father'))!!}
{{-- {{$families->links()}} --}}
composer require laravelcollective/html "5.8.*" -> "laravelcollective"
</div>
</div>
</div>
</div>
</div>
@endsection