<?php
session_start();

// Inicializar sesión
if(!isset($_SESSION['vista'])){
    $_SESSION['vista'] = [];
}

//AGREGAR (cuando vienes de vista.php)
if(isset($_POST['tareas'])){
    $tareas = explode("\n", $_POST['tareas']);//saltos de linea
    $tareas = array_map('trim', $tareas);// elimina espacios en blanco
    $tareas = array_filter($tareas);// las ordena

    $_SESSION['vista'] = array_merge($_SESSION['vista'], $tareas);
}

// ELIMINAR
if(isset($_POST['Eliminar'])){
    $indice = $_POST['indice'];

    if(isset($_SESSION['vista'][$indice])){
        unset($_SESSION['vista'][$indice]);
        $_SESSION['vista'] = array_values($_SESSION['vista']);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tus tareas</title>
</head>
<body>

<h3>Tareas guardadas:</h3>

<?php foreach($_SESSION['vista'] as $i => $tarea){ ?>

    <?php echo $tarea; ?>

    <form method="POST" style="display:inline;">
        <input type="hidden" name="indice" value="<?php echo $i; ?>">
        <button type="submit" name="Eliminar">eliminar</button>
    </form>

    <br>

<?php } ?>

<br>
<a href="vista.php">Agregar más tareas</a></br>
<a href="logout.php">Eliminar todo</a>


</body>
</html>