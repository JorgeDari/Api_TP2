<?php
	 include("config/config.ini.php");
	// $smarty->display("templates/default/index.html");
	 $smarty->assign("titulo",Inicio);
	 $smarty->display("templates/header.tpl");
	 $smarty->display("templates/menu.tpl");
	//-----------------------------------
	// Cacheamos la variable acc
	if($_GET["var"] && $_GET["var"]="registrar_usuario")
	{
		include("registrar_usuario.php");
	}

	//----------------------------------
	 $smarty->display("footer.tpl");
