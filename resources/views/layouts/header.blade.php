<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoes Website</title>
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/login.css')}}">
    <link rel="shortcut icon" href="image/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<header>
        <h2 class="logo">Run <span>Fast</span></h2>
        <nav class="navigations">
            <a href="{{url('/home')}}">Home</a>
            <a href="#Products">Products</a>
            <a href="#Review">Review</a>
            <a href="#Services">Services</a>
            <a href="#Contact">Contact</a>
            <a href="{{url('/login')}}" class="btnLogin">Login</a>
            <a href="{{url('/register')}}" class="btnSignup">Signup</a>
        </nav>
    </header>

