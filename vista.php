<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="Utf-8">
        <tittle>Registrar tareas</tittle>
    </head>
    <body>
        <form action="operaciones.php" method="Post">
            <label>Agrega tu tarea: </label></br>
            <textarea name="tareas" rows="5" cols="30" placeholder="Tarea por renglon"></textarea><br>
        
        
            <button type="Submit" values="Enviar">enviar</button>
        </form>
    </body>
</html> 