<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Article App</title>


</head>

<body>
    <form action="" method="post">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <a class="nav-link active" aria-current="page" href="{{url('./')}}">Everest Thrill</a>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
                    <div class="d-flex ">
                        @auth
                        <a class="nav-link" href="#">{{auth()->user()->name}}</a>
                        <a class="nav-link" href="{{route('logout')}}">Logout</a>
                        @endauth

                        @guest
                        <a class="nav-link" href="">Login</a>
                        <a class="nav-link" href="{{route('register')}}">Signup</a>
                        @endguest 
                    </div>


                </ul>
            </div>
        </div>
    </nav>
    </form>
    <!-- dynamic content here -->
    @yield('content')
</body>

</html>