<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/login.css')}}">
    <title>Faculty Login</title>
</head>
<body class="admin-bg">
    <div class="container-box">
        <img src="{{ asset('/images/sample-logo-design-png-3.png') }}" alt="" class="img-logo-2">
        <form action="">
            <div class="container">
                <div class="input-login">
                    <div class="form-group">
                        <label for="">Username:</label>
                        <input type="text" class="login-input" placeholder="Username / I.D. No">
                    </div>

                    <div class="form-group">
                        <label for="">Password:</label>
                        <input type="password" class="login-input" placeholder="Password">
                    </div>
                    
                    <div class="form-group">
                        <input type="checkbox" value=""><i> I have read the policies, terms and conditions. See the <a href="">terms and conditions.</a></i>
                    </div>

                    <div class="form-group">
                        <a href="" class="float-right">Forgot Password?</a>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary float-right" value="Log in">
                    </div>
                </div>
            </div>
            @csrf
        </form>
    </div>
<script src="{{ asset('/js/app.js')}}" type="text/javascript"></script>
</body>
</html>