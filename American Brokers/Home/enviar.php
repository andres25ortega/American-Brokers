
<?php
    $nombre = $_POST['nombre'];
    $IndPais = $_POST["IndPais"];
    $IndCiudad = $_POST["IndCiudad"];
    $telefono = $_POST["telefono"];
    $ciudad = $_POST["ciudad"];
    $mail = $_POST['correo'];

    $header = 'From: ' . $mail . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
    $mensaje .= "Su e-mail es: " . $mail . " \r\n";
    $mensaje .= "Su ciudad es: " . $ciudad . " \r\n";
    $mensaje .= "Su Indicativo del país es: " . $IndPais . " \r\n";
    $mensaje .= "Su Indicativo de ciudad es: " . $IndCiudad . " \r\n";
    $mensaje .= "Su telefono es: " . $telefono . " \r\n";
    $mensaje .= "Enviado el " . date('d/m/Y', time());

    $para = 'andres25ortega@gmail.com';
    $asunto = 'Mensaje de mi sitio web';

    mail($para, $asunto, utf8_decode($mensaje), $header);

    echo'<script type="text/javascript">
    alert("Correo envíado");    
    </script>';

    header("Location:index.html");
?>