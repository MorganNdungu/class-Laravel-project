<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to the dashboard <span><a href="/logout">Logout</a></span></h1>

    @hasrole('Admin')
    <a href="">Manage Users</a>
    <a href="">Manage Roles</a>
    @endhasrole

    <a href="">Manage Products</a>
    
</body>
</html>