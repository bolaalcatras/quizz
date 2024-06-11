<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Hola desde index</h1>

    <a href="{{route('crud.create')}}">Ingresar nuevos datos</a>

    <ul>
        @foreach ($datos as $datos)
        <li>
          <a href="{{route('crud.show',$datos->id)}}">
            {{$datos->editorial}}
          </a>
        </li>


        @endforeach
    </ul>
</body>

</html>