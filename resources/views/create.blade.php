<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <h2>Create a Student in Database.</h2>
    {{-- action="{{url('/store')}}" --}}


    <form action="{{route('students.store')}}" method="POST">
        @csrf

        <div>
            <label>Student Name:</label>
            <input type="text" name="name">
        </div>

        <div>
            <label>Student Age:</label>
            <input type="text" name="age">
        </div>

        {{-- <div>
            <label>email:</label>
            <input type="email" name="email">
        </div>

        <div>
            <label>Password:</label>
            <input type="password" name="password">
        </div> --}}

        <input type="submit" name="submit" value="save">

    </form>
    
</body>
</html>