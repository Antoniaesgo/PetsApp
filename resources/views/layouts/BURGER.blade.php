<div class="menu">
    <a href="javascript:;" class="closem">
        <img src="{{ asset('images/salir-removebg-preview.png') }}" alt="Close" width="50px">
    </a>
    <nav>
        <img src="{{ asset('images') . '/' . Auth::user()->photo }}" alt="Photo">
        <h4>{{ Auth::user()->fullname }}</h4>
        <h5>{{ Auth::user()->role }}</h5>
        <form action="{{ route('logout') }}" method="post">
            <button class="closes">Log Out</button>
            @csrf
        </form>
    </nav>
</div>


