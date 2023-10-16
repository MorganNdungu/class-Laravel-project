<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registration Form</title>

    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    background-color: #fff;
    width: 500px;
    margin: 50px auto;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 20px 30px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #555;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
}

input[type="submit"] {
    background-color: #007BFF;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>

    @extends('layout.bars')

    @section('content')
    <div class="container">
        <h2>Registration Form</h2>
        <form id="registration-form" action='/signup' method='POST'>

        @csrf
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="name" placeholder="Enter username">
           @if ($errors->has('name'))
            <div class="alert alert-danger">{{ $errors->first('name') }}</div>
            @endif
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Enter email">
                @if ($errors->has('email'))
                 <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                 @endif
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Enter password">
                @if ($errors->has('password'))
                 <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                 @endif
            </div>
            <div class="form-group">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
    @endsection
</body>
</html>
