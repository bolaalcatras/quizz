<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Ingresa nuevos datos</h1>

        <form action="{{ route('crud.update', $datos->id) }}" method="POST">

            @csrf

            @method('PUT')

            <label>
                Ingresa el numero de telefono:
                <input type="text" name="telefono" value="{{$datos->telefono}}">
            </label>
            <br>
            <br>
            <label>
                Ingresa la editorial:
                <input type="text" name="editorial" value="{{$datos->editorial}}">
            </label>
            <br>
            <br>
            <label>
                Ingresa el isbn:
                <input type="text" name="isbn" value="{{$datos->isbn}}">
            </label>
            <br>
            <br>
            <label>
                Ingresa las paginas:
                <input type="text" name="paginas" value="{{$datos->paginas}}">
            </label>

            <br>
            <br>
            <button type="submit">Actualizar informacion</button>

        </form>
    </div>
</body>

</html>
