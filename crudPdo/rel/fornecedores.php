<?php 

require_once("../conexao.php"); 


 ?>


 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!----integração da classe container para o painel de relatório em pdf para fornecedores----> 
<body>
 	<div class="container">
	<div class="col-md-12">
		<p align="center"><big>RELATÓRIO DE FORNECEDORES</big></p>
	</div>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">Nome</th>
	      <th scope="col">Telefone</th>
	      <th scope="col">Email</th>
	      <th scope="col">Produto</th>
	     
	    </tr>
	  </thead>
	  <tbody>
	  
<!----Query de consulta para selecionar fornecedor e seus dados relacionados---->
	  	<?php

	  		
	  		$res = $conexao->query("SELECT * from fornecedores order by nome asc");
	  		
			$dados = $res->fetchAll(PDO::FETCH_ASSOC);
			$quantidade_fornecedores = count($dados);
			for ($i=0; $i < count($dados); $i++) { 
				foreach ($dados[$i] as $key => $value) {
				$id = $dados[$i]['id'];
				$nome = $dados[$i]['nome'];
				$telefone = $dados[$i]['telefone'];
				$email = $dados[$i]['email'];
				$produto = $dados[$i]['produto'];

// Query de consulta para selecionar produtos e seus dados relacionados  //
//componente PDO::FETCH_ASSOC – retorna um array indexado pelo nome da coluna.//
				$res_p = $conexao->query("SELECT * from produtos where id = '$produto'");
				$dados_p = $res_p->fetch(PDO::FETCH_ASSOC);
					foreach ($dados_p as $key => $value) {
					$nome_produto = $dados_p['nome'];
					}
				}
				?>
	    <tr>
	      	<td><?php echo $nome ?></td>
	     	<td><?php echo $telefone ?></td>
	    	<td><?php echo $email ?></td>
	    	<td><?php echo $nome_produto ?></td>
	      
	      

	    </tr>

	<?php } ?>
	   
	  </tbody>
	</table>

</div>
 
 </body>
