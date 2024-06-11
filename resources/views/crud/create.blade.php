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

        <form action="{{ route('crud.store') }}" method="POST">

            @csrf

            <label>
                Ingresa la editorial:
                <input type="text" name="editorial">
            </label>
            <br>
            <br>
            <label>
                Ingresa el isbn:
                <input type="text" name="isbn">
            </label>
            <br>
            <br>
            <label>
                Ingresa el numero de telefono:
                <input type="text" name="telefono">
            </label>
            <br>
            <br>
            <label>
                Ingresa la direccion:
                <input type="text" name="direccion">
            </label>
            <br>
            <br>
            <label>
                Ingresa el numero de paginas:
                <input type="text" name="paginas">
            </label>

            <br>
            <br>
            <button type="submit">Enviar</button>

        </form>
    </div>
</body>

</html>