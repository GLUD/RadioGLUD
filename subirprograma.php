<?php
//phpinfo();
ini_set('post_max_size', '64M');
ini_set('upload_max_filesize', '64M');
echo "Los límites están en: " . ini_get('post_max_size');
echo ini_get('upload_max_filesize');

$status = "";
print_r($_POST);
print_r($_FILES);
print_r($_FILES["archivo"]["error"]);
// obtenemos los datos del archivo 
$tamano = $_FILES["archivo"]['size'];
$tipo = $_FILES["archivo"]['type'];
$archivo = $_FILES["archivo"]['name'];
if ($archivo != "") {
	// guardamos el archivo a la carpeta files
	$destino = "../../files/programas/".$_POST["carpeta"]."/".$archivo;
	if (copy($_FILES['archivo']['tmp_name'],$destino)) {
		$status = "Archivo subido: <b>".$archivo."</b>";
	} else {
		$status = "Error al subir el archivo";
	}
} else {
	$status = "Error al subir archivo";
}
echo $status;
?>