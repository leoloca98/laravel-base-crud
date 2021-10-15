@extends('layouts.main')

@section('title', 'Home')

@section('content')
    @include('includes.content')
@endsection

{{-- @foreach ($comic as $element)
    <br>
    <div>{{ $element->title }}</div>
    <div>{{ $element->price }}$</div>
    <div>{{ $element->series }}</div>
    <div>{{ $element->type }}</div>

@endforeach --}}
