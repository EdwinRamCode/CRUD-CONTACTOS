<?php
$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
$img = "/EjemploBasicoPHP2/img/x.jpg";
$text = "Ocurrió un error";

if ($msg === "agregado") {
    $img = "img/agregado.png";
    $text = "Contacto agregado";
} elseif ($msg === "modificado") {
    $img = "img/modificado.png";
    $text = "Contacto modificado exitosamente";
} elseif ($msg === "borrado") {
    $img = "img/eliminado.png";
    $text = "Adios contacto";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <style>
        body {
            margin: 0;
            font-family: sans-serif;
        }
    </style>
    <script src="js/varios.js"></script>
</head>

<body>
    <script>
        window.addEventListener('DOMContentLoaded', function () {
            mostrarMensaje({
                mensaje: "<?php echo addslashes($text); ?>",
                redireccion: "tabcontactos.php",
                imagen: "<?php echo $img; ?>"
            });
        });
    </script>
</body>

</html>