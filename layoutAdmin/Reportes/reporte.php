<?php
include '../Colmenas/conexion.php';

// Verificar si se ha proporcionado el parámetro colmena_id en la URL
if (isset($_GET['colmena_id'])) {
    $colmena_id = $_GET['colmena_id'];

    // Array con los nombres de las tablas a consultar
    $tablas = ['equipamiento', 'colonias', 'cuadros', 'reina', 'tratamiento', 'alimentacion','produccion'];

    // Obtener el año actual
    $current_year = date("Y");

    // Recorrer cada tabla y ejecutar la consulta
    foreach ($tablas as $tabla) {
        $sql = "SELECT * FROM $tabla WHERE colmena_id = $colmena_id";
        $result = $conn->query($sql);

        // Verificar si se encontraron resultados en la consulta
        if ($result && $result->num_rows > 0) {
            echo "<h3>Datos de la tabla $tabla:</h3>";
            echo "<div class='table-responsive'>";
            echo "<table class='table table-bordered'>";
            echo "<thead>";
            echo "<tr>";
            // Mostrar los nombres de las columnas como encabezados de la tabla
            while ($fieldinfo = $result->fetch_field()) {
                // Excluir la columna 'colmena_id' y 'id'
                if ($fieldinfo->name !== 'colmena_id' && $fieldinfo->name !== 'id') {
                    echo "<th>{$fieldinfo->name}</th>";
                }
            }
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            // Mostrar los datos de cada fila
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                // Mostrar cada valor excepto el relacionado con 'colmena_id' y 'id'
                foreach ($row as $key => $value) {
                    if ($key !== 'colmena_id' && $key !== 'id') {
                        echo "<td>$value</td>";
                    }
                }
                // Verificar si se está procesando la tabla de la reina y calcular la edad
                if ($tabla === 'reina' && isset($row['año_nacimiento'])) {
                    $año_nacimiento = intval($row['año_nacimiento']);
                    $edad = $current_year - $año_nacimiento;
                    // Mostrar un mensaje si la reina tiene más de 2 años
                    if ($edad > 2) {
                        echo "<td>La Reina tiene más de 2 años de edad considera cambiarla.</td>";
                    } else {
                        echo "<td>La Reina tiene menos de 2 años, por lo tanto, todavía es productiva.</td>";
                    }
                }
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
        } else {
            echo "<p>No se encontraron datos en la tabla $tabla.</p>";
        }
    }
} else {
    echo "<p>No se proporcionó el parámetro colmena_id en la URL.</p>";
}

$conn->close();
?>
