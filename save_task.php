<?php 
    
    include("db_connection.php");

    if(isset($_POST['save_task'])){
        $name= $_POST['Nombre'];
        $posicion= $_POST['Posicion'];
        $club = $_POST['Club'];


            $sql= "INSERT INTO Futbolistas (Nombre,Posicion,Club) VALUES ('$name','$posicion','$club')";
            $conn->exec($sql);
            echo "New record created successfully";
        
    }
    
    
    //header nos permite redireccionar la pagina osea ir a otra una vez hemos hecho un insert
    header("Location: index.php");


?>

