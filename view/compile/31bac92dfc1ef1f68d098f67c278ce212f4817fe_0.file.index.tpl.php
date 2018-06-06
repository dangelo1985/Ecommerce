<?php
/* Smarty version 3.1.32, created on 2018-05-16 23:05:12
  from 'C:\xampp\htdocs\gold\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5afc9d08849555_30950679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31bac92dfc1ef1f68d098f67c278ce212f4817fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gold\\view\\index.tpl',
      1 => 1526504710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afc9d08849555_30950679 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="description" content="Brinquedos e Colecionáveis"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/contato.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/estilo.css">
	<link rel="shortcut icon" type="image/x-png" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/images/favicon.png" >
</head>
<body>
<!--
	LG: >= 1200PX
	MD: >= 992PX < 1200PX
	SM: >= 768PX < 992PX
	XS: >= 
-->
	<nav class="navbar navbar-inverse navbar-static-top barra">
		<div class="container">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
				<span class="glyphicon glyphicon-home" style="color:#FFF;"></span>
			</button>
			
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menucat">
				<span class="glyphicon glyphicon-tasks" style="color:#FFF;"></span>
			</button>

			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menuLocalizar">
					<span class="glyphicon glyphicon-search" style="color:#FFF;"></span>
			</button>		

				<a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
" class="navbar-brand logotipo">
					<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/images2/logo.png" alt="DN Sistemas">
				</a>	
			</div>
			<div class="collapse navbar-collapse navbar-right" id="menu">
				<ul class="nav navbar-nav ">
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
"><span class="glyphicon glyphicon-tag"></span> Produtos</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
"><span class="glyphicon glyphicon-grain"></span> Quem Somos!</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
"><span class="glyphicon glyphicon-envelope"></span> Contato</a></li>
				</ul>


				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
         				 <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-user"></span> Minha Conta<span class="caret"></span></a>
          				<ul class="dropdown-menu perfil">
            			<li>Rafael</li>
            			<li><a href="#">Alterar Conta</a></li>
           			    <li role="separator" class="divider"></li>
            			<li><a href="#">Sair</a></li>
      		    	</li>
				</ul>
			</div><!--collapse-->
		</div><!-- container-->
	</nav><!-- nav-->
	
	<!--barra de busca-->
	
	
	<div class="container">
		<div class="navbar navbar-light cont-pesquisa collapse navbar-collapse" id="menuLocalizar" style="background-color: #008B8B;">
		<div class="row pesquisar">
			<form class="navbar-form pull-right">
				<div class="input-group">
					<input type="text" name="busca" class="form-control" placeholder="Pesquisar">
					<span class="input-group-btn">
						<button type="button" class="btn btn-localizar">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</span>
				</div> 
			</form>
		 </div>
		</div>
	 </div>


	<!--barra de busca-->
	<div class="container">
		<div id="carrossel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carrossel" data-slide-to="0" class="active"></li>
			<li data-target="#carrossel" data-slide-to="1"></li>
			<li data-target="#carrossel" data-slide-to="2"></li>
		</ol>
			<center>
			<div class="carousel-inner" role="listbox">
			
				<div class="item active">
					<img class="d-block w-100" src="https://unsplash.it/g/1200/300?random" >
				</div>

				<div class="item">
					<img class="d-block w-100" src="https://unsplash.it/g/1198/300?random" >
				</div>

				<div class="item">
					<img class="d-block w-100" src="https://unsplash.it/g/1199/300?random">
				</div>

			</div>
			</center>
		</div>
	</div>
	<div class="row">
	<div class="container corpo" >
			
		<div class="col-md-3 navbar-inverse">
			 <div class="container collapse navbar-collapse" id="menucat">	
				<span class="categorias">
					<h1>Categorias</h1>
		
					<div class="panel-group" id="accordion">
						<!--menuBrinquedos-->
						<div class="panel titulo-painel ">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a href="#menuBrinquedos" class="panel-group-item" data-toggle="collapse" data-parent="#accordion">Brinquedos<span class="caret"></span></a>
									</h4>
									
								</div><!-- panel-heading-->
								<div class="panel-collapse collapse" id="menuBrinquedos">
									<div class="panel-body">
										
										<p>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
											<a href="<?php echo $_smarty_tpl->tpl_vars['c']->value['cat_link'];?>
" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['c']->value['nome_cat'];?>
</a>
	           							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
	           							</p>
									</div><!-- panel-body-->
								</div><!-- MenuBrinquedos-->
						</div><!-- panel titulo-painel-->
						
						<!--menuColecionaveis-->
						<div class="panel titulo-painel ">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a href="#menuColecionaveis" class="panel-group-item" data-toggle="collapse" data-parent="#accordion">Colecionáveis<span class="caret"></span></a>
									</h4>
									
								</div><!-- panel-heading-->
								<div class="panel-collapse collapse" id="menuColecionaveis">
									<div class="panel-body">
										<p>
											<a href="#" class="list-group-item">Brinquedos</a>
	           								<a href="#" class="list-group-item">Colecionaveis</a>
	       		    						<a href="#" class="list-group-item">Pop Funko</a>
	              							<a href="#" class="list-group-item">Chaveiros</a> 
										</p>	
							 		</div><!-- panel-body-->
								</div><!-- MenuBrinquedos-->
						</div><!-- panel titulo-painel-->

						<!--menuColecionaveis-->
						<div class="panel titulo-painel ">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a href="#menuColecionaveis" class="panel-group-item" data-toggle="collapse" data-parent="#accordion">Colecionáveis<span class="caret"></span></a>
									</h4>
									
								</div><!-- panel-heading-->
								<div class="panel-collapse collapse" id="menuColecionaveis">
									<div class="panel-body">
										<p>
											<a href="#" class="list-group-item">Brinquedos</a>
	           								<a href="#" class="list-group-item">Colecionaveis</a>
	       		    						<a href="#" class="list-group-item">Pop Funko</a>
	              							<a href="#" class="list-group-item">Chaveiros</a> 
										</p>	
							 		</div><!-- panel-body-->
								</div><!-- MenuBrinquedos-->
						</div><!-- panel titulo-painel-->


					</div><!-- accordion-->		
				</span>
				
			</div><!-- menucat-->
		</div><!-- navbar-->

		<!-- conteudo da página-->
		<div class="col-md-9 conteudo" >
			
				<?php 
				
					Rotas::get_Pagina();
			 	
			 	?>
		
		
		
		</div>
		<!-- fim conteudo da página-->


		</div><!-- container-->
	</div><!-- linha-->

		<div class="row">
		<div class="container ofertas">
		<div class="navbar" style="background-color: #008B8B; color:#FFF;">
		<div class="col-md-3 " >
			<h3>Receba nossas ofertas</h3>
		</div>
		
			
			  <div class="col-md-8 col-xs-10 col-xs-offset-1">
				<div class="input-group ">
					<ul class="nav navbar-nav email ">
						<li><input type="text" name="busca" class="form-control" placeholder="Nome"></li>
						<li><input type="text" name="busca" class="form-control" placeholder="Email"></li>
						<button class="btn btn-default btn-enviar" type="submit">Enviar</button>
					</ul>
				</div>
			</div>
	    </div>
		</div>
	</div>

<nav class="navbar navbar-inverse navbar-static-bottom foot">
	<footer class="container">
		<p class="m-0 text-center text-white">Copyright &copy; Todos Direitos reservados <?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
 - Desenvolvido por Rafael D'Angelo</p>
	</footer>
</nav>

<?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/jquery/jquery.min.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/bootstrap.min.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/contato.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/jquery/jquery.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/bootstrap.min.js"><?php echo '</script'; ?>
>

</body>
</html>

<?php }
}
