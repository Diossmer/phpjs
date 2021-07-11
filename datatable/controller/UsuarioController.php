<?php
include '../model/usuario.php';

$usuarios = new Usuario();

if($_POST['funcion']==='listar'){
    $usuarios->mostrar();
    $json = array();

    foreach ($usuarios->usuarios as $data) {
        $json['data'][]=$data;
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}