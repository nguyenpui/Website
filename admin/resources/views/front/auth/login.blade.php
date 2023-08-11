
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/fonts/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="front/css/register.css">
</head>
<body>
    <div class="wrapper">
        <h1>Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <div class="recover">
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit">Login</button>
        </form>
        <div class="member">
            Not a member? <a href="{{ route('register') }}">Register Now</a>
        </div>
    </div>
</body>
</html>



