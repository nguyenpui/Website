<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/fonts/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="front/css/register.css">
</head>
<body>
    <div class="wrapper">
        <h1>Sign Up</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="password_confirmation" placeholder="Re-Enter Password">
            <div class="terms">
                <input type="checkbox" id="checkbox">
                <label for="checkbox">I agree to these <a href="#">Terms & Conditions</a></label>
            </div>
            <button type="submit">Sign Up</button>
        </form>
        <div class="member">
            Already a member? <a href="{{ route('login')}}">Login Here</a>
        </div>
    </div>
</body>
</html>
