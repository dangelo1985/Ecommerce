<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="description" content="Brinquedos e Colecionáveis"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>{$TITULO_SITE}</title>
	
	<link rel="stylesheet" type="text/css" href="{$GET_TEMA}/tema/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{$GET_TEMA}/tema/css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="{$GET_TEMA}/tema/css/contato.css">
	<link rel="stylesheet" type="text/css" href="{$GET_TEMA}/tema/css/estilo.css">
	<link rel="shortcut icon" type="image/x-png" href="{$GET_TEMA}/tema/images/favicon.png" >
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

				<a href="{$GET_HOME}" class="navbar-brand logotipo">
					<img src="{$GET_TEMA}/tema/images2/logo.png" alt="DN Sistemas">
				</a>	
			</div>
			<div class="collapse navbar-collapse navbar-right" id="menu">
				<ul class="nav navbar-nav ">
					<li><a href="{$PAG_PRODUTOS}"><span class="glyphicon glyphicon-tag"></span> Produtos</a></li>
					<li><a href="{$PAG_CARRINHO}"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>
					<li><a href="{$GET_HOME}"><span class="glyphicon glyphicon-grain"></span> Quem Somos!</a></li>
					<li><a href="{$PAG_CONTATO}"><span class="glyphicon glyphicon-envelope"></span> Contato</a></li>
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
										{foreach from=$CATEGORIAS item=c}
											<a href="{$c.cat_link}" class="list-group-item">{$c.nome_cat}</a>
	           							{/foreach}	
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
			
				{php}
				
					Rotas::get_Pagina();
			 	
			 	{/php}
		
		
		
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
		<p class="m-0 text-center text-white">Copyright &copy; Todos Direitos reservados {$TITULO_SITE} - Desenvolvido por Rafael D'Angelo</p>
	</footer>
</nav>

<script src='{$GET_TEMA}/tema/jquery/jquery.min.js'></script>
<script src='{$GET_TEMA}/tema/js/bootstrap.min.js'></script>
<script src='{$GET_TEMA}/tema/js/contato.js'></script>
<script src='{$GET_TEMA}/tema/jquery/jquery.js'></script>
<script type="text/javascript" src="{$GET_TEMA}/tema/js/bootstrap.js"></script>
<script type="text/javascript" src="{$GET_TEMA}/tema/js/bootstrap.min.js"></script>

</body>
</html>

