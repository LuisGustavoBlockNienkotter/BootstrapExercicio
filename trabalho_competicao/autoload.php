<?php 

	spl_autoload_register(function ($nomeClasse) {	
	  if (file_exists("classes".DIRECTORY_SEPARATOR.$nomeClasse.".class.php"))
	    require_once("classes".DIRECTORY_SEPARATOR.$nomeClasse.".class.php");
	  if (file_exists("pages".DIRECTORY_SEPARATOR.$nomeClasse.".class.php")) {
	  	require_once("pages".DIRECTORY_SEPARATOR.$nomeClasse.".class.php");
	  }
	});

 ?>