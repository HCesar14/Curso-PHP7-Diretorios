<?php

$images = scandir("images"); //pasta images

//var_dump($images);

$data = array();

foreach ($images as $img) {
	
	if(!in_array($img, array(".",".."))){ //verifica no array $img e desconsidera o "." e o ".."

	$fileName = "images".DIRECTORY_SEPARATOR.$img;

	$info = pathinfo($fileName); //retorna um array

	$info["size"] = filesize($fileName); //add no array o tamanho do arquivo na chave size
	$info["modified"] = date("d/m/Y H:i:s", filemtime($fileName)); // add no array a ultima modificação do arquivo
	$info["url"] = "http://localhost/dir"."/".str_replace("\\", "/", $fileName); 

	array_push($data, $info); //passa pro array data o array info

	}
}

echo json_encode($data);

?>