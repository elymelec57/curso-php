<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio con formularios</h1>

    <form action="proceso.php" method="POST" enctype="multipart/form-data">

    <label for="">
        Nombre:
        <br>
        <input type="text" name="nombre">
        <br>
    </label>

    <label for="">
        Edad:
        <br>
        <input type="text" name="edad">
        <br>
    </label>

    <p>Genero</p>

    <select name="sexo" id="">
        <option value="masculino" >Maculino</option>
        <option value="femenino" >femenino</option>
    </select>
    
    <!--<label >
        <input type="radio" name="sexo" value="Masculino">
        Maculino
    </label>

    <label >
        <input type="radio" name="sexo" value="femenino">
        Femenino
    </label>-->
    <br>

    <p>roles</p>

    <label >
        <input type="checkbox" name="rol[]" value="editor">
        editor
    </label>

    <label >
        <input type="checkbox" name="rol[]" value="cliente">
        cliente
    </label>

    <label >
        <input type="checkbox" name="rol[]" value="admin">
        admin
    </label>

    <br>

    <p>foto de perfil</p>

    <label>
        foto
        <input type="file" name="image">
        <br>
    </label>
    <br>

        <button type="submit">Enviar</button>

    </form>
</body>
</html>