<!----O bloco try catch, permite que se trate erros como exceções, sem comprometer o restante dos códigos da mesma ou demais páginas--->
<?php 

try {

	//minha conexão local
	$conexao = new PDO("mysql:dbname=crudpdo; host=localhost", "root", "");
	

	//minha conexão hospedada na umbler
	//$conexao = new PDO("mysql:dbname=crudpdo;host=mysql248.umbler.com", "danielefelix", "Cg[eK8g6Kn{");

} catch (Exception $e) {
	echo "Erro ao conectar com o Banco de Dados! ".$e;
}

 ?>