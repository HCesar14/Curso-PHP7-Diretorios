<?php

$name = "images";

if(!is_dir($name)){ // verifica se o diretorio existir

	mkdir($name);
	echo "Diretório $name criado com sucesso!";
}else{

	rmdir($name);
	echo "Removido o diretório: $name";
}

?>