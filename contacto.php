<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>El Expresionismo</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <div class="fondo1"> 
            <div class="contenedor">
                <?php

                $nombre = $_POST['nombre'];
                $email = $_POST['email'];
                $asunto = $_POST['asunto'];
                $mensaje = $_POST['mensaje'];
                $tipo = $_POST['tipo'];

                $destino = "migratuss@gmail.com";
                $asunto_email = $tipo . " expresionismo - ". $asunto;

                $header = "From: " . $nombre . " <" . $email . ">";

                $enviado = mail($destino, $asunto_email, $mensaje, $header);

                if($enviado == true){
                    echo "<h2>¡Mensaje enviado exitosamente!</h2>";
                    echo "<p>Tu " . $tipo . " ha sido enviado correctamente.</p>";
                }else{
                    echo "<h2>Error en el envío</h2>";
                    echo "<p>Hubo un error al enviar tu " . $tipo . ".</p>";
                }

                include('conexion.php');
                $consulta = mysqli_query($conexion, "INSERT INTO `contactos` (`id`,`nombre`,`email`,`asunto`,`mensaje`,`tipo`) VALUES ( '', '$nombre','$email','$asunto','$mensaje','$tipo')") or die(mysqli_error($conexion));

                ?>

                <a href="index.php">Volver al inicio</a>
            </div>
        </div>
    </body>
</html>
