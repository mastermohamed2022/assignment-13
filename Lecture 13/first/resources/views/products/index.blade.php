@extends('layouts.app')

@section('title','All Product')

@section('content')
<h1>All products</h1>
@foreach ($products as $key=>$value)

{{$loop->iteration}} . {{$value['title']}}
<br>

@endforeach
@stop

