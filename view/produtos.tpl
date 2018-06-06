<hr>

{if $PRO_TOTAL < 1}
<h4 class="alert alert-danger">Nenhum Produto Encontrado</h4>
{/if}

<section id="paginacao" class="row">
	<center>
		paginas	
	</center>
</section>
<!--
	LG: >= 1200PX
	MD: >= 992PX < 1200PX
	SM: >= 768PX < 992PX
	XS: >= 
-->
<section id="produtos" class="row" >
	<ul class="thumbnails" style="list-style: none" >

		<div class="row-fluid" id="pularlinha">
		{foreach from=$PRO item=p}
			<li class="col-md-4 col-sm-11 col-xs-12" style="margin-left:-10px; " >
				<div class="thumbnail" style="border-radius:10px; box-shadow:5px 5px 10px">
					<a href="{$PRO_INFO}/{$p.id_pro}/{$p.slug_pro}">
						<img src="{$p.img_pro}" class="img-thumbnail">
						<div class="caption">
							<hr>
							<h4 class="text-center">{$p.nome_pro}</h4>
							<h3 class="text-center text-danger">R$ {$p.valor_pro}</h3>	

						</div>
					</a>
				</div>
			</li>
			{/foreach}
		</div>
		
	</ul>
</section>

<section id="paginacao" class="row">
<center>
	Paginas
</center>
</section>