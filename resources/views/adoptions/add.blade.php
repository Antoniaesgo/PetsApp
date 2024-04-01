@extends('layouts.app')
@section('title', 'Show Pet Page - PetsApp')


@section('content')


<header class="nav level-2">
    <a href="{{ url('adoptions/create') }}">
        <img src="{{ asset('images/iconback.svg') }}" alt="Back">
    </a>
    <img src="{{ asset('images/logo.svg') }}" alt="Logo" width="200px">
    <a href="javascript:;" class="BURGER">
        <img src="{{ asset('images/BURGER.svg') }}" alt="Menu Burger">
    </a>
</header>
<section class="show">
    <h1>Adoption</h1>
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
    <form action="{{url('myadoptions/store')}}" method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <input type="hidden" name="pet_id" value="{{$pet->id}}">
        <button class="btn">Adopt Me</button>
    </form>
</section>
@endsection

