<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Age</th>
            <th>Roll Number</th>
            <th>Class</th>
            <th><a href=""><button>Add Person</button></a></th>
        </tr>
    </thead>
    <tbody>
        @foreach($student as $stu)
        <tr>
            <th>{{$stu->Name}}</th>
            <th>{{$stu->Email}}</th>
            <th>{{$stu->Age}}</th>
            <th>{{$stu->Phone}}</th>
            <th>{{$stu->Rollnum}}</th>
            <th>{{$stu->Class}}</th>
            <th><a href="{{url('delete',$stu->id)}}"><button>Delete</button></a>
                <a href="{{url('update',$stu->id)}}"><button>Update</button></a>
            </th>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
