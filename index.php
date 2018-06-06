<?php 
require './lib/autoload.php';

$smarty = new Template();
$categorias = new Categorias();
$categorias->GetCategorias();


//valores para template
$smarty->assign('NOME','Rafael');
$smarty->assign('GET_TEMA',Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME',Rotas::get_SiteHOME());
$smarty->assign('PAG_CARRINHO',Rotas::pag_Carrinho());
$smarty->assign('PAG_CONTATO',Rotas::pag_Contato());
$smarty->assign('PAG_MINHACONTA',Rotas::pag_MinhaConta());
$smarty->assign('PAG_PRODUTOS',Rotas::pag_Produtos());
$smarty->assign('TITULO_SITE',Config::SITE_NOME);
$smarty->assign('CATEGORIAS',$categorias->GetItens());


$smarty->display('index.tpl');
?>