<?php
require('fpdf.php');

// Ajusta esta ruta a la ubicación correcta de tu archivo de conexión
include '../layoutAdmin/Colmenas/conexion.php';

class PDF extends FPDF
{
    private $apiario_nombre;
    private $colmena_id;

    // Setter para establecer el nombre del apiario
    function setApiarioNombre($nombre) {
        $this->apiario_nombre = $nombre;
    }

    // Setter para establecer el ID de la colmena
    function setColmenaID($id) {
        $this->colmena_id = $id;
    }

    // Getter para obtener el nombre del apiario
    function getApiarioNombre() {
        return $this->apiario_nombre;
    }

    // Getter para obtener el ID de la colmena
    function getColmenaID() {
        return $this->colmena_id;
    }

    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('logo.png',10,8,33);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Título con el nombre del apiario y el ID de la colmena
        if ($this->getApiarioNombre()) {
            $this->Cell(0,10,"Reporte de Colmena ".$this->getColmenaID()." - ".$this->getApiarioNombre(),0,0,'C');
        } else {
            $this->Cell(0,10,'Reporte de Colmena',0,0,'C');
        }
        // Salto de línea
        $this->Ln(20);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// Crear instancia de PDF
$pdf = new PDF('L'); // 'L' para orientación horizontal

// Permitir que se cree una nueva página automáticamente si el contenido excede los límites
$pdf->SetAutoPageBreak(true, 15); // 15 es el margen inferior

// Obtener el parámetro colmena_id
if (isset($_GET['colmena_id'])) {
    $colmena_id = $_GET['colmena_id'];

    // Consultar el nombre del apiario y el ID de la colmena
    $sql_apiario = "SELECT apiarios.nombre AS apiario_nombre, colmenas.id AS colmena_id FROM apiarios JOIN colmenas ON apiarios.id = colmenas.apiario_id WHERE colmenas.id = $colmena_id";
    $result_apiario = $conn->query($sql_apiario);
    if ($result_apiario && $result_apiario->num_rows > 0) {
        $row_apiario = $result_apiario->fetch_assoc();
        $apiario_nombre = $row_apiario['apiario_nombre'];
        $colmena_id = $row_apiario['colmena_id'];
        // Establecer el nombre del apiario y el ID de la colmena en el PDF
        $pdf->setApiarioNombre($apiario_nombre);
        $pdf->setColmenaID($colmena_id);
    }

    // Array con los nombres de las tablas a consultar
    $tablas = ['equipamiento', 'colonias', 'cuadros', 'reina', 'tratamiento', 'alimentacion','produccion'];

    // Recorrer cada tabla y ejecutar la consulta
    foreach ($tablas as $tabla) {
        $sql = "SELECT * FROM $tabla WHERE colmena_id = $colmena_id";
        $result = $conn->query($sql);

        // Verificar si se encontraron resultados en la consulta
        if ($result && $result->num_rows > 0) {
            // Agregar una página al PDF para cada tabla
            $pdf->AddPage();
            $pdf->SetFont('Arial','B',12);

            // Título de la tabla
            $pdf->Cell(0,10,"Datos de la tabla $tabla",0,1,'C');
            
            // Encabezados de columna
            $pdf->SetFont('Arial','B',10);
            $column_count = $result->field_count - 2; // Excluir 'colmena_id' y 'id'
            $column_width = ($pdf->GetPageWidth() - 20) / $column_count; // Ancho máximo de la columna

            // Tamaño de fuente para títulos de columna
            $title_font_size = 10;
            $pdf->SetFont('Arial','B',$title_font_size);

            // Almacenar los títulos de las columnas
            $column_titles = [];
            for($i = 0; $i < $result->field_count; $i++) {
                $fieldName = $result->fetch_field_direct($i)->name;
                if ($fieldName !== 'colmena_id' && $fieldName !== 'id') {
                    $column_titles[] = $fieldName;
                }
            }

            // Agregar títulos de columnas a celdas de tamaño fijo
            foreach ($column_titles as $title) {
                $pdf->Cell($column_width,10,$title,1,0,'C');
            }
            $pdf->Ln();

            // Datos de la consulta
            $pdf->SetFont('Arial','',10);
            while ($row = $result->fetch_assoc()) {
                foreach ($row as $key => $value) {
                    if ($key !== 'colmena_id' && $key !== 'id') {
                        // Limitar el ancho del contenido para evitar desbordamiento
                        $content = strlen($value) > 50 ? substr($value, 0, 47) . '...' : $value;
                        $pdf->Cell($column_width,10,$content,1,0,'C');
                    }
                }
                $pdf->Ln();
            }
        } else {
            // No se encontraron datos en la tabla actual
            $pdf->AddPage();
            $pdf->SetFont('Arial','',12);
            $pdf->Cell(0,10,"No se encontraron datos en la tabla $tabla",0,1,'C');
        }
    }

    // Salida del PDF con nombre
    $pdf->Output("Reporte_Colmena_$colmena_id.pdf", "D");
} else {
    // No se proporcionó el parámetro colmena_id en la URL
    echo "<p>No se proporcionó el parámetro colmena_id en la URL.</p>";
}

$conn->close();
