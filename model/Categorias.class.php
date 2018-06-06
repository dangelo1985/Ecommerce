<?php 
	Class Categorias extends Conexao{
		
		private $cat_id, $cat_nome, $cat_slug;

		function __construct(){
			parent::__construct();
		}

		function GetCategorias(){
			$query ="SELECT * FROM {$this->prefix}categorias";

			$this->ExecuteSQL($query);

			$this->GetLista();

		}
	
		private function GetLista(){
			$i = 1;
			while($lista = $this->ListarDados()):
				$this->itens[$i] = array(
					'id_cat' => $lista['id_cat'],
					'nome_cat' => $lista['nome_cat'],
					'slug_cat' => $lista['slug_cat'],
					'cat_link' => Rotas::pag_Produtos().'/'.$lista['id_cat'].'/'.$lista['slug_cat']
				    );
			$i++;
			endWhile;
		}


	}

?>