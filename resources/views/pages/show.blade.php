@extends('master')

@section('content')

<h1>Liste of Pages : </h1>

@foreach ($pages as $page)

    <div>{{ $page->title }}</div>

@endforeach

@stop