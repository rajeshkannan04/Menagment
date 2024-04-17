<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information Table</title>
    <style>
        #body{
            display:grid;
            grid-template-columns: 1fr 1fr 1fr;
        }
        .card{
            width:360px;
            height:350px;
            margin-left: 5%;
            margin-bottom:5%;
            border:2px solid black;
            padding:10px;
        }
        img {
            max-width: 359px;
            max-height: 200px;
        }
        .add{
            margin:5% 40% 5% 40%;
            background-color: green;
            color:white;
            height: 30px;
        }
        button{
            border-radius:10px;
            background-color: brown;
            color:white;
        }
    </style>
</head>
<body>
    <div id ="add"><a href="{{url('product')}}"><button class="add">ADD PRODUCT</button></a></div>
    <div id="body">

        @foreach($product as $things)
        <div class ="card">
            <div id="img">
                <img src="/storage/{{$things->img}}" alt="{{$things->name}}">
            </div>
            <p>NAME : {{$things->name}}</p>
            <p>QUANTITY : {{$things->quantity}}</p>
            <p>RATE : {{$things->rate}}</p>
                    <a href="{{url('delete',$things->id)}}"><button>DELETE</button></a>
                    <a href="{{url('update',$things->id)}}"><button>UPDATE</button></a>
        </div>
        @endforeach
        </div>

</body>
</html>
