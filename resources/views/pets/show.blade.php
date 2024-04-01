@extends('layouts.app')
@section('title', 'Show Pet - PetsApp')


@section('content')


<header class="nav level-2">
    <a href="{{ url('pets') }}">
        <img src="{{ asset('images/iconback.svg') }}" alt="Back">
    </a>
    <img src="{{ asset('images/logo.svg') }}" alt="Logo">
    <a href="javascript:;" class="BURGER">
        <img src="{{ asset('images/BURGER.svg') }}" alt="Menu Burger">
    </a>
</header>
<section class="show">
    <h1>Show Pet</h1>
    <img src="{{ asset('images/'.$pet->photo) }}" alt="Photo" class="photo">
    <p class="role">{{$pet->kind}}</p>
    <div class="info">
        <p>{{$pet->name}}</p>
        <p>{{$pet->kind}}</p>
        <p>{{$pet->weight}}</p>
        <p>{{$pet->age}}</p>
        <p>{{$pet->breed}}</p>
        <p>{{$pet->location}}</p>
    </div>
</section>
@endsection
 