<?php
/* Smarty version 3.1.32, created on 2018-05-16 16:57:21
  from 'C:\xampp\htdocs\gold\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5afc46d11852b4_66669738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e556731d60d742502a24ebd3485e24b06caec488' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gold\\view\\produtos_info.tpl',
      1 => 1526482638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afc46d11852b4_66669738 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>

<div class="container col-md-12 caixaProdutos" >
<h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['p']->value['nome_pro'];?>
 - <?php echo $_smarty_tpl->tpl_vars['p']->value['modelo_pro'];?>
 - Ref:<?php echo $_smarty_tpl->tpl_vars['p']->value['ref_pro'];?>
</h3>	
<hr>

<div class="row" style="backgound-color:#fff;">
	<!-- div da esquerda imagem do produto*}-->
	<div class="col-md-6"  >
		<img class="thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['p']->value['img_pro_g'];?>
" alt="" style="border-radius:10px; box-shadow:5px 5px 10px">		

		<!--Listagem de Imagens extras-->
			<div class="row">
				
				<h4 class="text-center">Mais Imagens</h4>
				<ul style="list-style: none">
					<li class="col-md-3">
						<img src="<?php echo $_smarty_tpl->tpl_vars['p']->value['img_pro_p'];?>
" alt="" class="thumbnail" style="border:none;">
					</li>
				</ul>
			</div><!--row-->
			<!--/Listagem de Imagens extras-->

	</div><!--col-md-6-->


	<!-- div da direita info do produto*}-->
	<div class="col-md-5 col-xs-10 thumbnail" style="margin-left:30px; border:none;">
		<img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/tema/images/PagSeguro.png" alt="" >
		<div class="col-md-5">
		<h3 class="text-center preco">R$ <?php echo $_smarty_tpl->tpl_vars['p']->value['valor_pro'];?>
</h3>
		</div><!--col-md-6 preco-->

		<div class="col-md-5">
			<form name="carrinho" method="post" action="">
				<input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id_pro'];?>
">
				<input type="hidden" name="acao" value="add">
				<button class="btn btn-success btn-lg">Comprar</button>
			</form>
		</div><!--col-md-6 carrinho-->
	</div><!--col-md-6 thumbnail-->

</div><!--row-->


<div class="row " >
	<hr>
	<h4 class="text-center"><b><?php echo $_smarty_tpl->tpl_vars['p']->value['nome_pro'];?>
 - <?php echo $_smarty_tpl->tpl_vars['p']->value['modelo_pro'];?>
 - <?php echo $_smarty_tpl->tpl_vars['p']->value['ref_pro'];?>
</b></h4>
	
	<div class="container col-md-12" >
		<?php echo $_smarty_tpl->tpl_vars['p']->value['desc_pro'];?>

	</div>
	
</div>
<br>
<br>

</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
