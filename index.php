<?php
ini_set('post_max_size', '64M');
ini_set('upload_max_filesize', '64M');
?>
<form action="subirprograma.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend>Subir Programas a Radio GLUD</legend>
	<p>
	<label for="carpeta">Seleccione el programa que desea subir:</label>
	<select name="carpeta">
	  <option value="are_you_trolling_me">Are You Trolling Me</option>
	  <option value="freestyleando">Freestyleando</option>
	  <option value="glud_aniime">Glud Aniime</option>
	  <option value="la_hora_libre">La hora libre</option>
	  <option value="los_piratas">Los piratas</option>
	  <option value="otros_programas">Otros Programas</option>
	</select>
	</p>
	<p>
	<label for="file">Audio Ogg Vorbis:</label>
	<input name="archivo" type="file" />
	<input name="enviar" type="submit" value="Upload File" />
	</p>
</fieldset>	
</form>