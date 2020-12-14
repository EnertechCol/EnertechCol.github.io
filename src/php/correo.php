<?php
    $destinatario = 'nickcar13@gmail.com';
    // correo al que se enviara
    $asunto = "probando";
    $nombre = $_POST['nombre'];
    $inicioPlatzi = $_POST['inicio-platzi'];
    $horario = $_POST['horario'];

    $header = "Envio de prueba pagina enertech";
    $mensajeCompleto = $nombre . "\n mi inicio" . $inicioPlatzi . $horario;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('Enviado')</script>";
?>