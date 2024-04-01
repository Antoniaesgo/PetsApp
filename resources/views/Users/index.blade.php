@extends('layouts.app')
@section('title', 'User Page - PetsApp ')

@section( 'content')

        <header class="nav level-1">
            <a href="{{route('dashboard')}}">
                <img src="{{ asset('images/iconback.svg') }}" alt="Back">
            </a>
            <img src="{{ asset('images/logo.svg') }}" alt="Logo">
            <a href="javascript:;" class="BURGER">
                <img src="{{ asset('images/BURGER.svg') }}" alt="Menu Burger" style-opacity="0" >
            </a>
        </header>
        <section class="module">
            <h1>MODULE USERS</h1>
            <a class="add" href="{{url('users/create')}}">
                <img src="{{ asset('images/circle-plus-solid (1).svg') }}" alt="Add" width="30px">
                Add User
            </a>
            <table>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td><img src="{{asset('images/'.$user->photo)}}" alt="User"></td>
                        <td>
                            <span>{{ $user->fullname}}</span>
                            <span>{{ $user->role}}</span>
                        </td>
    
                        <td>
                            <a href="{{url('users/'. $user->id)}}" class="show">
                                <img src="{{asset('images/search.svg')}}" alt="">
                            <a href="{{url('users/' . $user->id  . '/edit' )}}" class="show">
                                <img src="{{asset('images/edit.svg')}}" alt="Edit">
                            </a>
                            <form action="{{url('users/' .$user->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="button" class="btn-delete">
                                    <img src="{{asset('images/delete.svg')}}" alt="Delete">
                                </button>
                            </form>
        
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">{{$users->links('layouts.paginator')}}</td> 
                    </tr> 
                </tfoot>  
            </table>

        </script>
   </main>
</body>
</html>
@endsection
@section('js')
@if (session('message'))
<script>
     $(document).ready(function() {
            Swal.fire({
                position: "top-end",
                title: "Great jon!!",
                text:"{{session('message')}}",
                icon: "success",
                showConfirmButton: false,
                timer: 5000
            })
        })
</script>
@endif
<script>
    $(document).ready(function () {
        $('body').on('click', '.btn-delete', function () {
            Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#7F5539",
            cancelButtonColor: "#B08968",
            confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).parent().submit()
                    }

           
        })                  
    })
})

</script>
@endsection