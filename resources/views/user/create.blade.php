<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>
<body>
    <h2>Create a User in Database.</h2>

    <form action="{{route('store')}}" method="POST">
        @csrf

        {{-- Session Key Value Pair --}}

        @if (Session::has('success'))
            <h2>{{Session::get('success')}} </h2>
        @endif
        @if (Session::has('fail'))
            <h2>{{Session::get('fail')}} </h2>
        @endif

        <div>
            <label>User Name:</label>
            <input type="text" name="name">
        </div>

        <div>
            <label>email:</label>
            <input type="email" name="email">
        </div>

        <div>
            <label>Password:</label>
            <input type="password" name="password">
        </div>

        <input type="submit" name="submit" value="save">

        <div>
            <a href="{{route('user.login')}}">already register!! login here</a>
        </div>

    </form>
    
</body>
</html>