{foreach from=$PRO item=p}

<div class="container col-md-12 caixaProdutos" >
<h3 class="text-center">{$p.nome_pro} - {$p.modelo_pro} - Ref:{$p.ref_pro}</h3>	
<hr>

<div class="row" style="backgound-color:#fff;">
	<!-- div da esquerda imagem do produto*}-->
	<div class="col-md-6"  >
		<img class="thumbnail" src="{$p.img_pro_g}" alt="" style="border-radius:10px; box-shadow:5px 5px 10px">		

		<!--Listagem de Imagens extras-->
			<div class="row">
				
				<h4 class="text-center">Mais Imagens</h4>
				<ul style="list-style: none">
					<li class="col-md-3">
						<img src="{$p.img_pro_p}" alt="" class="thumbnail" style="border:none;">
					</li>
				</ul>
			</div><!--row-->
			<!--/Listagem de Imagens extras-->

	</div><!--col-md-6-->


	<!-- div da direita info do produto*}-->
	<div class="col-md-5 col-xs-10 thumbnail" style="margin-left:30px; border:none;">
		<img src="{$TEMA}/tema/images/PagSeguro.png" alt="" >
		<div class="col-md-5">
		<h3 class="text-center preco">R$ {$p.valor_pro}</h3>
		</div><!--col-md-6 preco-->

		<div class="col-md-5">
			<form name="carrinho" method="post" action="">
				<input type="hidden" name="pro_id" value="{$p.id_pro}">
				<input type="hidden" name="acao" value="add">
				<button class="btn btn-success btn-lg">Comprar</button>
			</form>
		</div><!--col-md-6 carrinho-->
	</div><!--col-md-6 thumbnail-->

</div><!--row-->


<div class="row " >
	<hr>
	<h4 class="text-center"><b>{$p.nome_pro} - {$p.modelo_pro} - {$p.ref_pro}</b></h4>
	
	<div class="container col-md-12" >
		{$p.desc_pro}
	</div>
	
</div>
<br>
<br>

</div>
{/foreach}