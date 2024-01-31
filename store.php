<?php
        if(!empty($_POST['nombre']) && !empty($_POST['correo']))
        {
            //echo "Nombre: " . $_POST['nombre'] . "<br>";
            //echo "Correo: " . $_POST['correo'] . "<br>";

            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];

            $sql = "INSERT INTO usuarios (nombre, correo) VALUES ('".$nombre."' , '".$correo."')";
            //VALUES ('John', 'Doe', 'john@example.com');
            
            // Utilizar exec() dado que no se regresan resultados
            $conn->exec($sql);
        }
        ?>