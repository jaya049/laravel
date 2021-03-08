<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form class="box" action='check' method='get'>
                @if(Session::get('fail'))
                {{Session::get('fail')}}
                @endif
                    <h1>Login</h1>
                    <p class="text-muted"> Please enter your login and password!</p>
                     <input type="text" name="email" placeholder="email"> </br>
                     <span>@error('email'){{$message}}@enderror</span>

                     <input type="password" name="password" placeholder="Password"></br>
                     <span>@error('password'){{$message}}@enderror</span>

                      <!-- <a class="forgot text-muted" href="#">Forgot password?</a></br> -->
                     <input type="submit" name="submit" value="Login" href="#">
                    <div class="col-md-12">
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>