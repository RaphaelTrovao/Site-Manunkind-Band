<?php


if(isset($_FILES['imgem']) && $_FILES['imgem']['error'] === 0){
    $nom_arq = $_FILES['imgem']['name'];
    $tmpc = $_FILES['imgem']['tmp_name'];
    $pasta = "assets/img/";
    $camf = $pasta . $nom_arq;
    move_uploaded_file($tmpc, $camf);
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data = $_POST["data"];
   
    
   
    $old = file_get_contents($path);
    $dataJson = json_decode($old, true);
    if(!is_array($dataJson)){
        $dataJson = [];
    }
    $ni = [
        "data" => $data,
        "imagem" => $camf
    ];
    $dataJson[] = $ni;
    $new = json_encode($dataJson, JSON_PRETTY_PRINT);
    
    file_put_contents($path, $new);
}


?>
