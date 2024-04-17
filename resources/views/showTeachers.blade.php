<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{
            border:2px solid black;
            border-collapse : collapse;
        }
        table{
            width:60%;
            margin-left:20%;
            text-align:center;
        }
        th,td{
            height:50px;
        }

    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Phone</th>
        </tr>
        @foreach($teacher as $teac)
        <tr>
            <td>{{$teac->Name}}</td>
            <td>{{$teac->Email}}</td>
            <td>{{$teac->Age}}</td>
            <td>{{$teac->Phone}}</td>
            <td>
                <a href="{{url('delete', $teac->id)}}"><button>delete</button></a>

                <a href="{{url('update', $teac->id)}}"><button>update</button></a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>