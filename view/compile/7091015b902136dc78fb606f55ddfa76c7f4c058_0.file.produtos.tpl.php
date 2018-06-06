<?php
/* Smarty version 3.1.32, created on 2018-05-17 23:02:41
  from 'C:\xampp\htdocs\gold\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5afdedf1bcf2c0_46622269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7091015b902136dc78fb606f55ddfa76c7f4c058' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gold\\view\\produtos.tpl',
      1 => 1526584034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afdedf1bcf2c0_46622269 (Smarty_Internal_Template $_smarty_tpl) {
?><hr>

<?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
<h4 class="alert alert-danger">Nenhum Produto Encontrado</h4>
<?php }?>

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
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
			<li class="col-md-4 col-sm-11 col-xs-12" style="margin-left:-10px; " >
				<div class="thumbnail" style="border-radius:10px; box-shadow:5px 5px 10px">
					<a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_pro'];?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value['slug_pro'];?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['p']->value['img_pro'];?>
" class="img-thumbnail">
						<div class="caption">
							<hr>
							<h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['p']->value['nome_pro'];?>
</h4>
							<h3 class="text-center text-danger">R$ <?php echo $_smarty_tpl->tpl_vars['p']->value['valor_pro'];?>
</h3>	

						</div>
					</a>
				</div>
			</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
		
	</ul>
</section>

<section id="paginacao" class="row">
<center>
	Paginas
</center>
</section><?php }
}
