<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index User</title>
</head>
<body>

    <h2>Display all USER data from the Database.</h2>
    <hr>

    <table>
        <tr>
            <th>Id</th>
            <th>user name</th>
            <th>user email</th>
            {{-- <th>user password</th> --}}
            {{-- <th>actions</th> --}}
        </tr>
        <tr>
            @foreach ($users as $user )
             <td>{{$user->id}} </td>   
            <td>{{$user->name}} </td>
            
            <td>{{$user->email}} </td>
            {{-- <td>{{$user->password}} </td> --}}
            
            {{-- <td><button><a href="{{route('edit.user', ['id' => $user->id])}}">update</a> </button>
                <button><a href="{{route('delete.user', ['id' => $user->id])}}">delete</a></button></td>
             --}}
        </tr>
        @endforeach

    </table>
    



</body>
</html> 