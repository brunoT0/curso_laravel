<?php
$contactos = array();

// Agregar un nuevo contacto
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["agregar"])) {
    $nuevoContacto = array(
        "nombre" => $_POST["nombre"],
        "telefono" => $_POST["telefono"],
        "email" => $_POST["email"]
    );
    $contactos[] = $nuevoContacto;
}

// Editar un contacto existente
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["editar"])) {
    $indice = $_POST["indice"];
    $contactos[$indice]["nombre"] = $_POST["nuevo_nombre"];
    $contactos[$indice]["telefono"] = $_POST["nuevo_telefono"];
    $contactos[$indice]["email"] = $_POST["nuevo_email"];
}

// Eliminar un contacto
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["eliminar"])) {
    $indice = $_POST["indice"];
    unset($contactos[$indice]);
    $contactos = array_values($contactos); // Reindexar el array
}

// Buscar un contacto por nombre
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["buscar"])) {
    $buscarNombre = $_POST["buscar_nombre"];
    $resultados = array();
    foreach ($contactos as $contacto) {
        if (strpos($contacto["nombre"], $buscarNombre) !== false) {
            $resultados[] = $contacto;
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Contactos</title>
</head>
<body>
    <h1>Lista de Contactos</h1>

    <!-- Formulario para agregar contactos -->
    <form method="post" action="">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="telefono" placeholder="Teléfono" required>
        <input type="email" name="email" placeholder="Correo Electrónico" required>
        <button type="submit" name="agregar">Agregar Contacto</button>
    </form>

    <!-- Formulario para buscar contactos por nombre -->
    <form method="post" action="">
        <input type="text" name="buscar_nombre" placeholder="Buscar por nombre">
        <button type="submit" name="buscar">Buscar</button>
    </form>

    <!-- Mostrar resultados de la búsqueda -->
    <?php
    if (isset($resultados) && count($resultados) > 0) {
        echo "<h2>Resultados de la búsqueda:</h2>";
        foreach ($resultados as $indice => $contacto) {
            echo "Nombre: " . $contacto["nombre"] . "<br>";
            echo "Teléfono: " . $contacto["telefono"] . "<br>";
            echo "Correo Electrónico: " . $contacto["email"] . "<br>";
            echo "<form method='post' action=''><input type='hidden' name='indice' value='$indice'><button type='submit' name='editar'>Editar</button><button type='submit' name='eliminar'>Eliminar</button></form><br>";
        }
    }
    ?>

    <!-- Mostrar la lista de contactos completa -->
    <h2>Lista de Contactos:</h2>
    <?php
    if (count($contactos) > 0) {
        foreach ($contactos as $indice => $contacto) {
            echo "Nombre: " . $contacto["nombre"] . "<br>";
            echo "Teléfono: " . $contacto["telefono"] . "<br>";
            echo "Correo Electrónico: " . $contacto["email"] . "<br>";
            echo "<form method='post' action=''><input type='hidden' name='indice' value='$indice'><button type='submit' name='editar'>Editar</button><button type='submit' name='eliminar'>Eliminar</button></form><br>";
        }
    } else {
        echo "No hay contactos en la lista.";
    }
    ?>
</body>
</html>