<!DOCTYPE html>
<?php require 'conexion.php'; ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentación</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nav">
        <a href="formulario.php">Ir a Formulario</a>
      </div>
    <h1>Pedro Reyes</h1>

    <ul>
        <?php
            $sql = "SELECT * FROM usuarios";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            
            // Configura los resultados como un arreglo asociativo
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            
            // $stmt->fetchAll() Obtiene el arreglo asociativo
            foreach ($stmt->fetchAll() as $row) {
                echo "<li>" . $row['nombre'] . " - " . $row['correo'] . "</li>";
            }
        ?>
    </ul>

    <section>
        <h2>Acerca de mi</h2>
        <p>Soy un hombre de 21 años, estudio Ingeniería Informática porque 
            me gusta la programación, me gusta salir en bici de montaña, ver series de tv 
            y actualmente estoy estudiando ingles ya que creo que es importante 
            para mi carrera, y ya que en un futuro me gustaría viajar y también es importante.</p>
    </section>
    <section>
        <h2>Mis conocimientos</h2>
        <ul>
            <li>Programacion estructurada en C.</li>
            <li>Programacion orientada a objetos en C++ y python.</li>
            <li>Manejo del programa Cisco Packet Tracer.</li>
            <li>Instalación de cámaras de videovigilancia.</li>
            <li>Edición básica de video.</li>
        </ul>
    </section>
    <section>
        <h2>Mis fortalezas</h2>
        <ol>
            <li>Curiosidad</li>
            <li>Honestidad</li>
            <li>Responsable</li>
        </ol>
    </section>
    <section>
        <h2>Proyectos</h2>
        <table>
            <tr>
                <th>Nombre del proyecto</th>
                <th>Lenguaje(s)</th>
                <th>Descripcion</th>
            </tr>
            <tr>
                <td>Filtro de TikTok</td>
                <td>Python</td>
                <td>Poner una máscara sobre la cara en tiempo real
                    con captura de la cámara.</td>
            </tr>
            <tr>
                <td>Separador de Palabras</td>
                <td>Python con PyQT</td>
                <td>crear una caja de texto y al oprimir un boton separa la palabras en otra caja.</td>
            </tr>
            <tr>
                <td>Prim</td>
                <td>Python</td>
                <td>Encontrar el árbol de recubrimiento mínimo en un mapa sin que choque con las casas.</td>
            </tr>
        </table>
    </section>
    <section>
        <h2>Persona que admiro</h2>
        <img src="javi.jpeg" alt="Javier Santaolalla en el CERN" style="width: 30%;">
        <p><b>Javier Santaolalla Camino</b> es un físico, ingeniero, 
            doctor en física de partículas y divulgador científico español. 
            Ha trabajado en el Centro Nacional de Estudios Espaciales en Francia, 
            el CIEMAT y la Organización Europea para la Investigación Nuclear, 
            donde formó parte del equipo que descubrió el bosón de Higgs a 
            través del Experimento CMS del gran colisionador de hadrones.</p>
        <p>Ver mas <a target="_blank" href="https://es.wikipedia.org/wiki/Javier_Santaolalla">aquí</a></p>
        </section>
    <div class="footer">
        <h2>Contactame en ...</h2>
        <a href="mailto:jose.reyes9089@alumnos.udg.mx">Enviar correo</a>
        <a href="https://www.instagram.com/pedruns/">Instagram</a>
    </div>
</body>
</html>