<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <title>Registration page</title>
</head>

<body>
    <h3>Registration >>> Create >>> Wait for to be Answered!
    </h3>
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
                <div class="panel border bg-white">
                    <div class="panel-heading">
                        <h3 class="pt-3 font-weight-bold">Royxatdan O'tish</h3>
                    </div>
                    <div class="panel-body p-3">
                        <form action="{{route('register.store')}}" method="POST">
                            @csrf

                            <div class="form-group py-2">
                                <div class="input-field"> <span class="far fa-user p-2"></span>
                                    <input type="text" name="name" placeholder="Ismingiz" required> </div>
                            </div>
                            <div class="form-group py-2">
                                <div class="input-field"> <span class="far fa-user p-2"></span>
                                    <input type="text" name="email" placeholder="email" required> </div>
                            </div>
                            <div class="form-group py-1 pb-2">
                                <div class="input-field"> <span class="fas fa-lock px-2"></span>
                                    <input type="password" name="password" placeholder="Password" required>

                                    
                             </div>
                            </div>


                            <button type="submit" class="btn btn-primary btn-block mt-3">Jo'natish</button >
                            <div class="text-center pt-4 text-muted">Ro'yxatdan o'tganmisiz? <a href="{{route('login')}}">Kirish</a> </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
