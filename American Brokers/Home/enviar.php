<?php
    $nombre = $_POST['nombre'];
    $IndPais = $_POST["IndPais"];
    $IndCiudad = $_POST["IndCiudad"];
    $telefono = $_POST["telefono"];
    $ciudad = $_POST["ciudad"];
    $correo = $_POST['correo'];

    $body = "Nombre: " . $nombre . "<br>Indicativo Pais: " . $IndPais . "<br>Indicativo Ciudad: " . $IndCiudad . "<br>Telefono: " . $telefono . "<br>Ciudad: " . $ciudad . "<br>Correo: " . $correo;

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../assets/phpMailer/Exception.php';
    require '../assets/phpMailer/PHPMailer.php';
    require '../assets/phpMailer/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'WebAmerianBrokers@gmail.com';                     // SMTP username
        $mail->Password   = 'AmerianBrokers2020';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('WebAmerianBrokers@gmail.com', $nombre);
        $mail->addAddress('WebAmerianBrokers@gmail.com', 'American Brokers');     // Add a recipient

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Mensaje envíado desde la pagina web American Brokers';
        $mail->CharSet = 'UTF-8';
        $mail->Body    = $body;

        $mail->send();
        
    } catch (Exception $e) {
        echo "Hubo un error: {$mail->ErrorInfo}";
    }
    header("Location:index.html");


?>