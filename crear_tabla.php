<?php
try {
    //code...
    $sql = "CREATE TABLE Tareas  (
        ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Nombre_tarea VARCHAR(30) NOT NULL,
        Descripcion VARCHAR(100) NOT NULL,
        Email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
      
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Tabla creada Jonathan";


} catch (PDOException $e) {
    //throw $th;
    echo "fallo al crear la tabla";
}

?>            