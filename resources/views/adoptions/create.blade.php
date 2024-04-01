@extends('layouts.app')
@section('title', 'Adoption Page - PetsApp')


@section('content')
<header class="nav level-2">
    <a href="{{ url('myadoptions') }}">
        <img src="{{ asset('images/iconback.svg') }}" alt="Back">
    </a>
    <img src="{{ asset('images/logo.svg') }}" alt="Logo" width="200px">
    <a href="javascript:;" class="BURGER">
        <img src="{{ asset('images/BURGER.svg') }}" alt="Menu Burger">
    </a>
</header>
<h1> ADOPTIONS</h1>
            <div class="pets">
                @forelse($pets as $pet)
                    
                <article>
                    <header>
                        <img src="{{asset('images/' . $pet->photo)}}" alt="pet">
                        <p>
                            <span>{{$pet->name}}</span>
                            <span>{{$pet->kind}}</span>
                           
                        </p>
                    </header>
                    <footer>
<a href="{{url('myadoptions/add/' . $pet->id)}}">VIEW</a>
                    </footer>
                </article>
                @empty
                    
                @endforelse
                
            </div>
        </section>
@endsection
