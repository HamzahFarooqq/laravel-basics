<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>

    <h2>Display all data from the Database.</h2>
    <hr>

    {{-- <table>
        <tr>
            <th>Id</th>
            <th>student name</th>
            <th>student age</th>
            <th>actions</th>
        </tr>
        <tr>
            @foreach ($students as $student )
             <td>{{$student->id}} </td>   
            <td>{{$student->student_name}} </td>
            <td>{{$student->age}} </td>
            <td>{{$student->email}} </td>
            <td>{{$student->password}} </td>
            
            <td><button><a href="{{route('edit.student', ['id' => $student->id])}}">update</a> </button>
                <button><a href="{{route('delete.student', ['id' => $student->id])}}">delete</a></button></td>
            
        </tr>
        @endforeach

    </table> --}}


    {{-- @foreach ($students as $student)
        echo $student;
    @endforeach
     --}}

     {{ $student }}


</body>
</html> 