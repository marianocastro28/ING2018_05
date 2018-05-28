<?php
/* Smarty version 3.1.32, created on 2018-05-28 06:26:40
  from 'C:\xampp\htdocs\aventon\webcontent\view\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0b8500c3f758_24224510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95ba536e2a6c82b78aab4d3751451b4a62d5ac80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aventon\\webcontent\\view\\layout.tpl',
      1 => 1527481596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0b8500c3f758_24224510 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aventon - Grupo35</title>

    <!-- Bootstrap core CSS -->
    <link href="/aventon/webcontent/css/bootstrap.min.css" rel="stylesheet">
	<link href="/aventon/webcontent/css/jquery-ui.css" rel="stylesheet">


    <!-- Custom styles for this template -->
	<link href="/aventon/webcontent/css/heroic-features.css" rel="stylesheet">
	<link href="/aventon/webcontent/css/open-iconic/font/css/open-iconic-bootstrap.min.css" rel="stylesheet">
	
	 <!-- Bootstrap core JavaScript -->
    <?php echo '<script'; ?>
 src="/aventon/webcontent/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/aventon/webcontent/js/jquery-ui.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/aventon/webcontent/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		function mostrarAviso(mensajes){
			$("#mensajeModal").children().remove();
			$.each(mensajes,function(key, value){
				$("#mensajeModal").append("<p>" + value + "</p>");	
			})
			
			$("#myModal").modal();
		}
		
	<?php echo '</script'; ?>
>
	
  </head>

  <body>
      <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
		<a class="navbar-brand" href="#">
		
		<!--<img src="./img/Logo.jpg">-->
		Aventon
		</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/aventon/">Inicio</a>
            </li>
			<?php if (!$_smarty_tpl->tpl_vars['isSessionActive']->value) {?>
            <li class="nav-item">
              <a class="nav-link" href="/aventon/authentication">Login <span class="oi oi-account-login"></span></a>
            </li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['isSessionActive']->value) {?>
			<li class="nav-item">
              <a class="nav-link" href="/aventon/viaje">Crear Viaje</a>
            </li>
			<li class="nav-item dropdown">	
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  <?php if (isset($_smarty_tpl->tpl_vars['USER']->value)) {?>
					<?php echo $_smarty_tpl->tpl_vars['USER']->value->getNombre();?>
 <?php echo $_smarty_tpl->tpl_vars['USER']->value->getApellido();?>

				  <?php }?>
				  
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="/aventon/verPerfil">Ver mi perfil</a>
				  <a class="dropdown-item" href="/aventon/viaje/listarViajes">Ver mis Viajes</a>
				  <a class="dropdown-item" href="/aventon/vehiculo">Ver mis Vehiculos</a>
				  <div class="dropdown-divider"></div>
				  <a class="dropdown-item" href="/aventon/authentication/logout">Salir</a>
				</div>
			  </li>
			<?php }?>
          </ul>
        </div>
      </div>
    </nav>
	
	<?php echo $_smarty_tpl->tpl_vars['__content']->value;?>


    <footer class="py-5 bg-dark">
     	<!-- Modal -->
		  <div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
			
			  <!-- Modal content-->
			  <div class="modal-content">
				<div class="modal-header">
				  <h4 class="modal-title">Notificacion</h4>
				</div>
				<div class="modal-body" id="mensajeModal">
				  
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			  </div>
			  
			</div>
		</div>	
    <!-- Footer -->
	    

    </footer>

   

  </body>

</html>
<?php }
}
