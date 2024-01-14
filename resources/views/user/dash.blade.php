
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DASHBOARD</title>
</head>
<body>

    <h2>dashboard</h2>
    <hr>

    <table>
        <tr>
            <th>Id</th>
            <th>U name</th>
            <th>U email</th>
           
            <th>actions</th>
        </tr>
        <tr>
            
             <td>{{$data->id}} </td>   
            <td>{{$data->name}} </td>
            
            <td>{{$data->email}} </td>
            <td><a href="{{route{'user.logout'}}}">Logout</a></td>
            
        </tr>

    </table>
    
</body>
</html> 