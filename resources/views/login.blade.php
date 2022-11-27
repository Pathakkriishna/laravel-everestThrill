<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Everest Thrill</title>
    <style type="text/css">
        .row {
            padding-top: 100px;
            /* background: powderblue; */
        }

        body {
            background: #66b3ff;
        }

        .form-signup {
            padding-top: 50px;
            margin: 0 auto;
            max-width: 400px;
            /* background-color: white; */
            padding: 15px;
        }

        .form-signup h2,
        p {
            text-align: center;
        }

        .box {
            -webkit-box-shadow: -5px 2px 62px 8px rgba(0, 0, 0, 0.36);
            -moz-box-shadow: -5px 2px 62px 8px rgba(0, 0, 0, 0.36);
            box-shadow: -5px 2px 62px 8px rgba(0, 0, 0, 0.36);
        }
    </style>
</head>

<body>
    <div class="row">>
        @if(Session::has('fail'))
        <div class="alert alert-danger" role="alert">
            {{Session::get('fail')}}
        </div>
        @endif
        <form class="form-signup box" action="{{route('login')}}" method="POST">
            @csrf
            <h2>LOGIN</h2>
            <p>Login to your account</p>
            <div class="form-group">
                <label class="form-label">Email</label><br />
                <input type="email" class="form-control @error ('email') is-invalid @enderror" name="email" placeholder="Enter your email" />
                <span style="color :red;">@error('email') {{$message}} @enderror</span>
            </div>
            <br />
            <div class="form-group">
                <label class="form-label">password</label><br />
                <input type="password" class="form-control @error ('password') is-invalid @enderror" name="password" />
                <span style="color :red;">@error('password') {{$message}} @enderror</span>
            </div>
            <br />

            <div class="form-group mt-3 text-center">
                Did't have account? <a href="{{route('register')}}">Signin</a>
            </div>
            <br />
            <div class="d-grid gap-2">
                <input type="submit" class="btn btn-success" name="" value="Submit" />
            </div>
        </form>
    </div>

</body>

</html>