<?php
	function writeinfile($file='',$data=''){
		if($file=='' OR $data==''){
			return 0;
		}
		else{
			$ouvert = 0;
			$existe = 0;
			if(file_exists($file)) $existe = 1;
			if($fichier =  fopen($file, 'a')) $ouvert = 1;
			fwrite($fichier,'
'.$data);
			fclose($fichier);
			return 1;
		}
	}
?>