<?php
if(isset($_FILES["file"])){
    $name = $_FILES["file"]["name"];
    $file = $_FILES["file"]["tmp_name"];
    $error = $_FILES["arhivo"]["error"];
    $destination = "../../public/assets/image/$name";
    var_dump($destination);
    $upload = move_uploaded_file($file,$destination);
    if($upload){
        $res = array(
            "err"=>false,
            "status"=>http_response_code(200),
            "statusText" => "Archivo $name Subido con éxito",
            "files"=>$_FILES["file"]
        );
    }else{
        $res = array(
            "err"=>true,
            "status"=>http_response_code(500),
            "statusText" => "Error al subir el archivo $name",
            "files"=>$_FILES["file"]
        );
    }
    echo json_encode($res);
};
    /* https://www.youtube.com/watch?v=w7bh68aZsKM&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA&index=125 
    chmod 777 -R phpjs/
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploader con AJAX</title>
    <link rel="stylesheet" href="../../public/assets/css/source/style.css">
</head>
<body>
    <main>
        <input type="file" name="files" id="files" multiple>
    </main>
    <script src="../../public/assets/js/ejercicio_apis/uploader.js"></script>
</body>
</html>