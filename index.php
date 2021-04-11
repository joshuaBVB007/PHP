<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PRACTICA</title>
    <link rel="stylesheet" href="diseño.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="card card-body">
        <!--cuando ejecutes el submit abriremos el documento save_task.php que almacena una conexion a la base de datos
            y que hará la insercion a nuestra base de datos.
        al ejecutar el metodo post tambien le pasamos los parametros -->
        <form action="save_task.php" method="POST">
            <div class="form-group">
                <input type="text" name="Nombre" class="form-control"
                placeholder="Nombre Futbolista" autofocus>
            </div> 
            <div class="form-group">
                <input type="text" name="Posicion" class="form-control"
                placeholder="Posicion MC,DF,DI,LI,LR,etc" autofocus>
            </div>  
            <div class="form-group">
                <textarea name="Club" rows="1" class="form-control"
                placeholder="Club de futbol al que pertenece"></textarea>
            </div>   
            <input type="submit" class="btn btn-success btn-block"
            name="save_task" value="Save Task">
        </form>       
    </div>

    
</body>
</html>