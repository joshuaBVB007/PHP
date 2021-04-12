<?php 
    
    include("db_connection.php");
    //include("crear_tabla.php");

    if(isset($_POST['save_task'])){
        $nombre_tarea= $_POST['Nombre'];
        $descripcion_tarea= $_POST['Desc_tarea'];
        $email_usuario = $_POST['Email_usuario'];


            $sql= "INSERT INTO Tareas (Nombre_tarea,Descripcion,Email) VALUES ('$nombre_tarea','$descripcion_tarea','$email_usuario')";
            $conn->exec($sql);
            echo "New record created successfully";
        
    }
    
    
    //header nos permite redireccionar la pagina osea ir a otra una vez hemos hecho un insert
    header("Location: index.php");


?>

