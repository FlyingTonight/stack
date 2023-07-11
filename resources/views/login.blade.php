<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <title>Login Page</title>
</head>
<body>
    <h3>Login</h3>
    <div class="b-example-divider"></div>

    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
      <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
          <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Vertically centered hero sign-up form</h1>
          <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
                    <div class="panel border bg-white">
                        <div class="panel-heading">
                            <h3 class="pt-3 font-weight-bold">Kirish</h3>
                        </div>
                        <div class="panel-body p-3">
                            <form action="{{route('authenticate')}}" method="POST">
                                @csrf
                                <div class="form-group py-2">
                                    <div class="input-field"> <span class="far fa-user p-2"></span>
                                        <input type="text" name="email" placeholder="Email" required> </div>
                                </div>
                                <div class="form-group py-1 pb-2">
                                    <div class="input-field"> <span class="fas fa-lock px-2"></span>
                                        <input type="password" name="password" placeholder="Password" required>
                                            <span class="far fa-eye-slash"></span> </button> </div>
                                </div>
                                <div class="form-inline"> <input type="checkbox" name="remember" id="remember">
                                    <label for="remember" class="text-muted">Eslab qolish</label>
                                    <a href="#" id="forgot" class="font-weight-bold">Parolni unutdingizmi?</a> </div>
                                <button type="submit" class="btn btn-primary btn-block mt-3">Kirish</button >
                                <div class="text-center pt-4 text-muted">Ro'yxatdan o'tmaganmisiz? <a href="{{route('register')}}">Ro'yxatdan o'tish</a> </div>
                            </form>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>
