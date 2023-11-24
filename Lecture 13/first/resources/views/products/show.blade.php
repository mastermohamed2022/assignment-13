@extends('layouts.app')

@section('title','Show Products')

@section('content')

@if($product['is_new'])

<p>this product is new</p>
@else
<p>this product is old</p>
@endif

@isset($product['has_reviews'])

<h2>this ptoduct has reviews</h2>

@endisset

<h1>{{$product['title']}}</h1>
<p>{{$product['description']}}</p>


@stop


