<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.6">

  <title>Signin Template · Bootstrap</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css">

  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <style>

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

  </style>

  <!-- Custom styles for this template -->
  <link href="https://getbootstrap.com/docs/4.4/examples/sign-in/signin.css" rel="stylesheet">

</head>

<body class="text-center">

  <form class="form-signin" method="post" action="/postRegister">

    @csrf

    <img class="mb-4" src="https://getbootstrap.com/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">

    <h1 class="h3 mb-3 font-weight-normal">Register {{config('app.name')}}</h1>

    <label for="inputEmail" class="sr-only">Name</label>
    <input type="text" name="name" id="inputEmail" class="form-control @error('name') is-invalid @enderror" placeholder="Please insert your name" value="{{old('name')}}" required autofocus>
    @error ('name')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror

    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" value="{{old('email')}}" required>
    @error ('email')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror

    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
    @error ('password')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror

    <label for="inputPassword" class="sr-only">Re-type Password</label>
    <input type="password" name="password_confirmation" id="inputPassword" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Password Confirmation" required>
    @error ('password_confirmation')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror

    <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>

    <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>

  </form>

</body>

</html>