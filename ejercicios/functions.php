<?php
//ENVIAR E_MAIL
function sendMail($from,$asunto,$message=""){
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    require 'PHPMailer/src/Exception.php';
    
    $template="email_templates/".$template;

    $mail = new PHPMailer\PHPMailer\PHPMailer();

    /** Configurar SMTP **/
    $mail->isSMTP();                                      // Indicamos que use SMTP
    $mail->Host = 'smtp.gmail.com';  // Indicamos los servidores SMTP
    $mail->SMTPAuth = true;                               // Habilitamos la autenticación SMTP
    $mail->Username = 'proyectoyana@gmail.com';                 // SMTP username
    $mail->Password = 'proyectoYANA01';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Habilitar encriptación TLS o SSL
    $mail->Port = 587;                                    // TCP port

    /** Configurar cabeceras del mensaje **/
    $mail->From = 'proyectoyana@gmail.com';                       // Correo del remitente
    $mail->FromName = 'Proyecto YANA';           // Nombre del remitente
    $mail->Subject = $asunto;                // Asunto
    //$body=file_get_contents($template);
   // $body=str_replace("%nombre%", $nombre, $body);
   
    //$body=str_replace("%email%", $destinatario, $body);
    //$body=str_replace("%data%", $data, $body);
    $mail->msgHTML($body);
    /** Incluir destinatarios. El nombre es opcional **/
    $mail->addAddress($from, $message);
    //$mail->addAddress('destinatario2@correo.com', 'Nombre2');
    //$mail->addAddress('destinatario3@correo.com', 'Nombre3');

    /** Con RE, CC, BCC **/
    //$mail->addReplyTo('info@correo.com', 'Informacion');
    //$mail->addCC('cc@correo.com');
    //$mail->addBCC('bcc@correo.com');

    /** Incluir archivos adjuntos. El nombre es opcional **/
    //$mail->addAttachment('/archivos/miproyecto.zip');        
    //$mail->addAttachment('/imagenes/imagen.jpg', 'nombre.jpg');

    /** Enviarlo en formato HTML **/
    $mail->isHTML(true);                                  

    /** Configurar cuerpo del mensaje **/
    //$mail->Body    = 'Este es el mensaje en HTML <b>en negrita!</b>';
    //$mail->AltBody = 'Este es el mansaje en texto plano para clientes que no admitan HTML';

    /** Para que use el lenguaje español **/
    $mail->setLanguage('es');

    /** Enviar mensaje... **/
    if(!$mail->send()) {
        //echo '<center style="color:#f00">El mensaje no pudo ser enviado.';
        //echo 'Mailer Error: ' . $mail->ErrorInfo.'</center>';
        return false;
    } else {
        //echo '<center style="color:#0f0">Mensaje enviado correctamente</center>';
        return true;
    }

}
?>