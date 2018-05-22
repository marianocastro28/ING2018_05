<?php
	
	//DEFINO LAS RUTAS A LOS ARCHIVOS DE FORMA GENERICA
	define("INIT", dirname(__FILE__));
    define("SRC", dirname(__FILE__)."/src");
    define("WEBCONTENT", dirname(__FILE__)."/webcontent");
	//DEFINO LA CONF DE Smarty
	
	//INVOCO A LOS ARCHIVOS NECESARIOS
	//config
	include WEBCONTENT.'/config/sessionAdmin.php';
	include WEBCONTENT.'/config/smtemplate_config.php';
	include WEBCONTENT.'/config/db_config.php';
	include SRC.'/exceptions/SessionException.php';
	
	include 'SimpleUrl.php';
	include 'Route.php';
	//DAOS
	include SRC.'/model/UsuarioDTO.php';
	
	//service
	include SRC.'/transaction/UsuarioService.php';
	//controllers
	include SRC.'/controllers/GenericController.php';
	include SRC.'/controllers/HomeController.php';
	include SRC.'/controllers/AutenticationController.php';
	include SRC.'/controllers/RegistroController.php';
	//libreria smarty
	include WEBCONTENT.'/lib/smarty-3.1.32/libs/Smarty.class.php';
	//se abre la sesion
	session_start();
	//configuracion de routing
	//set base rute
	$route = new Route();
	//configuro todos los paths que niveles despues de la ruta base
	$route->add('/home', new HomeController());
	$route->add('/authentication', new AuthenticationController());
	$route->add('/registracion', new RegistroController());
	$route->submit();
	
	
	
?>