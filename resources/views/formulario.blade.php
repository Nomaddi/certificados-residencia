<div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="css/styles_form.css">
        <title>Document</title>
    </head>
    <body>
        <div class=" w-52  mx-auto   ">
            <h1 class=" ">titulo</h1>
            <form action="" method="POST">
                <label for="nombre1">Primer nombre</label>
                <input type="text" name="nombre1">

                <label for="nombre2">Segundo nombre</label>
                <input type="text" name="nombre2">
                
                <label for="apellido1">Primer apellido</label>
                <input type="text" name="apelido1">
                
                <label for="apellido2">Segundo apellido</label>
                <input type="text" name="apelido2">

                <label for="correo" class="">Correo electronico</label>
                <input type="email" name="correo">

                <label for="telefono">Numero de telefono</label>
                <input type="number" name="telefono">

                <label for="tipoDocumento">Numero de telefono</label>
                <select name="tipoDocumento">
                    <option value=1>Registro civil / Número único de identificación personal</option>
                    <option value="2">Tarjeta de identidad</option>
                    <option value="3">Cédula de ciudadanía</option>
                    <option value="4">Cédula de extranjería</option>
                    <option value="5">Nit</option>
                    <option value="6">Permiso Por Protección Temporal</option>
                    <option value="7">Permiso Especial de Permanencia</option>
                    <option value="8">Salvoconducto para refugiados</option>

                </select>
            </form>
        </div>
    </body>
    </html>
</div>

