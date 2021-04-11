<!DOCTYPE html>
<html>
<head>
<title>Mi mini pagina en php</title>
</head>
<body>
    <h1>Practicando PHP</h1>
    <?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=Jonathan", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";

        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

        /*creamos la base de datos
        $sql = "CREATE DATABASE myDBPDO";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Database created successfully<br>";
        */


    /*try {
        //code...
        $sql = "CREATE TABLE Futbolistas (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            Equipo VARCHAR(50)
            )";

        if ($conn->query($sql) == TRUE) {
            echo "Table created successfully";
        } 

    } catch (PDOException $e1) {
        echo "Error al crear la tabla";
    }*/


    //crear un registro con PDO
    /*
    $sql = "INSERT INTO Futbolistas (firstname, lastname, Equipo)
    VALUES ('Cristiano', 'Ronaldo', 'FC Barcelona')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    */

    //Cerramos la conexion
    $conn=null;

    ?>
</body>
</html>