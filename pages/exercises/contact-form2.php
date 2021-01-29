<?php
if(isset($_POST)){
    error_reporting(0);//Solo es aplicado Local
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $comments = $_POST["comments"];

    $domain = $_SERVER["HTTP_HOST"];
    $to = "diossmer@gmail.com";
    $subject_mail = "Contacto desde el formulario del sitio $domain: $subject";
    $message = "
    <p>
    Datos desde el formulario del sitio <b>$domain</b>
    </p>
    <ul>
    <li>Nombre: <b>$name</b></li>
    <li>Email: <b>$email</b></li>
    <li>Asunto: $subject</li>
    <li>Comentarios: $comments</li>
    </ul>
    ";
    $headers="MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n"."From: Envío Automático No Responder <no-reply@$domain>";
    $send_mail = mail($to,$subject_mail,$message,$headers);
    if($send_mail){
        $res = [
            "err"=>false,
            "message"=>"Tus datos han sido enviados"
        ];
    }else{
        $res = [
            "err"=>true,
            "message"=>"Error al enviar tus datos. Intenta nuevamente"
        ];
    }
    header("Access-Control-Allow-Origin: *"); //CORS
    header("Access-Control-Allow-Origin: https://facebook.com"); //CORS
    header('Content-type: application/json');
    echo json_encode($res);
    exit;
}
//PENDIENTE EN LA POLITICA Y PERMISOS AL ACCEDER DIFERENTE SERVIDORES...
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de formulario con Fetch y PHP</title>
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/style_dom.css">
</head>
<body>
    <section id="seccion14" class="section" data-scroll-spy>
            <h2>Validaciones de Formulario</h2>
            <form class="contact-form">
                <legend>Envíanos tus comentarios</legend>
                <input type="text" name="name" id="" placeholder="Escribe tu nombre" pattern="[A-Za-zÄÁáËÉéÏÍíÖÓóÜÚú\s]+$" title="Nombre Sólo acepta letras y espacios en blanco" required>
                <input type="email" name="email" id="" placeholder="Escribe tu email" title="Email incorrecto" pattern="^[A-Za-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$"required>
                <input type="text" name="subject" id="" placeholder="Asunto a tratar" title="El Asunto es requerido" required>
                <textarea name="comments" cols="50" rows="5" id="" placeholder="Escribe tus comentarios" data-pattern="^.{1,255}$" title="Tu comentario no debe exceder los 255 caracteres" required></textarea>
                <input type="submit" value="Enviar">
                <div class="contact-form-loader none">
                    <img src="../../public/assets/svg/puff.svg" alt="Cargando">
                </div>
                <div class="contact-form-response none">
                    <p>Los datos han sido enviados</p>
                </div>
            </form>
        </section>
        <script src="../../public/assets/js/ejercicio_apis/contact-form2.js"></script>
</body>
</html>