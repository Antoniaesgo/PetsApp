@extends('layouts.app')

@section('title', 'Dashboard Page - PetsApp')

@section('content')

@include('layouts.BURGER')


<header class="nav level-0">
    <a href="">
        <img src="{{ asset('images/iconback.svg') }}" alt="Back">
    </a>
    <img src="{{ asset('images/logo.svg') }}" alt="Logo">
    <a href="javascript:;" class="BURGER">
        <img src="{{ asset('images/BURGER.svg') }}" alt="Menu Burger">
    </a>
</header>


<section class="dashboard">
    <h1>Dashboard: Admin</h1>
    <menu>
        <ul>
            <li>
                <a href="{{ url('users') }}">
                    <img src="{{ asset('images/users.svg') }}" alt="Users">
                    <span>Module User</span>    
                </a>
            </li>
            <li>
                <a href="{{ url('pets') }}">
                    <img src="{{ asset('images/iconpets.svg') }}" alt="Pets">
                    <span>Module Pets</span>
                </a>
            </li>
            <li>
                <a href="{{ url('adoptions') }}">
                    <img src="{{ asset('images/iconadopstions.svg') }}" alt="Adoptions">
                    <span>Module Adoptions</span>
                </a>
            </li>
        </ul>
    </menu>
</section>
@endsection

@section('js')
<script>
    $(document).ready(function () {
        $('body').on('click', '.BURGER',  function () {
            $('.menu').addClass('open')
        })
        $('body').on('click', '.closem',  function () {
            $('.menu').removeClass('open')
        })
    })
</script>
@endsection