
<?php

//En el destino colocar el correo alque quieres que lleguen los datos del contacto de tu formulario
 $destino = "andres25ortega@gmail.com";

    $nombre = $_POST["nombre"];

    $IndPais = $_POST["IndPais"];

    $IndCiudad = $_POST["IndCiudad"];

    $telefono = $_POST["telefono"];

    $correo = $_POST["correo"];

    $ciudad = $_POST["ciudad"];

    $mensaje = $_POST["mensaje"];

    $contenido = "Nombre: " . $nombre . "\nInd. País: " . $IndPais . "\nInd. Ciudad: " . $IndCiudad . "\nTelefono: " . $telefono . "\nCiudad: " . $ciudad . "\nCorreo: " . $correo . "\nAsunto: " . $mensaje;

    mail($destino, "Contacto", $contenido);

    echo'<script type="text/javascript">
    alert("Correo envíado");    
    </script>';

    // header("Location: A_Donde_Lo_Quieras_Redireccionar");
//Esto es opcional, aqui pueden colocar un mensaje de "enviado correctamente" o redireccionarlo a algun lugar
?>