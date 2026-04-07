<?php
if(isset($_FILES['imgem']) && $_FILES['imgem']['error'] === 0){
    $nom_arq = $_FILES['imgem']['name'];
    $tmpc = $_FILES['imgem']['tmp_name'];
    $pasta = "assets/img/";
    $camf = $pasta . $nom_arq;
    move_uploaded_file($tmpc, $camf);
}
 $path = "data.json";
 

$txtjs = file_get_contents($path);
$ar = json_decode($txtjs, true);

$ts = $ar;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data = $_POST["data"];
    $local = $_POST["local"];
    $nome = $_POST["nome"];
    $link = $_POST["link"];
   
    $old = file_get_contents($path);
    $dataJson = json_decode($old, true);
    if(!is_array($dataJson)){
        $dataJson = [];
    }
    $ni = [ 
        "nome"  => $nome,
        "local" => $local,
        "data" => $data,
        "link" => $link,
        "imagem" => $camf
    ];
    $dataJson[] = $ni;
    $new = json_encode($dataJson, JSON_PRETTY_PRINT);
    
    file_put_contents($path, $new);
}




?>
