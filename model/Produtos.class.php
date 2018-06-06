<?php 
Class Produtos extends Conexao{
	function __construct(){
		parent::__construct();
	}

	function GetProdutos(){
		$query = "SELECT * FROM {$this->prefix}produtos p INNER
		          JOIN {$this->prefix}categorias c ON p.categoria_pro = c.id_cat" ;
	
		$query .=" ORDER BY id_pro DESC";  

		$this->ExecuteSQL($query); 

		$this->GetLista();       	
	}

	function GetProdutosID($id){
		$query = "SELECT * FROM {$this->prefix}produtos p INNER
		          JOIN {$this->prefix}categorias c ON p.categoria_pro = c.id_cat" ;
	
		$query .=" AND id_pro = :id"; 

		$params = array(':id'=>(int)$id);

		$this->ExecuteSQL($query, $params); 

		$this->GetLista();       	
	}

	function GetProdutosCatID($id){
		$query = "SELECT * FROM {$this->prefix}produtos p INNER
		          JOIN {$this->prefix}categorias c ON p.categoria_pro = c.id_cat" ;
	
		$query .=" AND categoria_pro = :id"; 

		$params = array(':id'=>(int)$id);

		$this->ExecuteSQL($query, $params); 

		$this->GetLista();       	
	}

	private function GetLista(){
		$i = 1;
		while($lista = $this->ListarDados()):
		$this->itens[$i] = array(
			'id_pro' => $lista['id_pro'],   
			'categoria_pro' => $lista['categoria_pro'],
			'nome_cat' => $lista['nome_cat'], 
			'nome_pro'=> $lista['nome_pro'], 
			'desc_pro'=> $lista['desc_pro'], 
			'peso_pro'=> $lista['peso_pro'], 
			'valor_pro'=> $lista['valor_pro'], 
			'altura_pro'=> $lista['altura_pro'], 
		    'largura_pro'=> $lista['largura_pro'], 
		    'comprimento_pro'=> $lista['comprimento_pro'], 
		    'img_pro'=> Rotas::ImageLink($lista['img_pro']
		    	,300, 300),
		    'img_pro_g'=> Rotas::ImageLink($lista['img_pro']
		    	,300, 300),
		    'img_pro_p'=> Rotas::ImageLink($lista['img_pro']
		    	,100, 100),			  
		    'slug_pro'=> $lista['slug_pro'], 
		    'estoque_pro'=> $lista['estoque_pro'], 
		    'modelo_pro'=> $lista['modelo_pro'], 
		    'ref_pro'=> $lista['ref_pro'], 
		    'fabricante_pro'=> $lista['fabricante_pro'], 
		    'ativo_pro'=> $lista['ativo_pro'], 
		    'frete_free_pro'=> $lista['frete_free_pro'], 
			);
		$i++;
		endWhile;
	}
}

?>