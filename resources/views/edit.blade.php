<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>
<body>

    <h2>Edit a Student in Database.</h2>

    <form action="{{route('update.student', ['id' => $student])}}" method="post">
        @csrf
        @method('put')

        {{-- <label>Id</label>
        <input readonly name='id' value="{{$student->id}}"> --}}

        <label>Student Name:</label>
        <input type="text" name="name" value='{{$student->student_name}}' >

        <label>Student Age:</label>
        <input type="text" name="age" value="{{$student->age}}">

        <input type="submit" value="update">

    </form>
    
</body>
</html>