<?php
// Incluye la biblioteca QRcode de phpqrcode
include './phpqrcode/qrlib.php';

if (isset($_GET['qr_data'])) {
    // Obtén los datos para el código QR desde la URL
    $qrData = $_GET['qr_data'];

    // Nombre del archivo temporal para el código QR
    $filename = 'temp_qr.png';

    // Genera el código QR en formato PNG y lo guarda temporalmente
    QRcode::png($qrData, $filename, QR_ECLEVEL_L, 10);

    // Establecer las cabeceras para forzar la descarga
    header('Content-Type: image/png');
    header('Content-Disposition: attachment; filename="qr_code.png"');

    // Muestra el archivo PNG generado
    readfile($filename);

    // Elimina el archivo temporal
    unlink($filename);
} else {
    echo "No se proporcionó información para generar el código QR.";
}
?>
