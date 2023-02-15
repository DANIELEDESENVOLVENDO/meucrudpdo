<!---- CRIANDO A VERIFICAÇÃO DE CONEXÁO E INICIA A SESSÃO ---->
<?php 
//require_once("conexao.php"); 
@session_start();
?>

 <?php
//função se as variáveis email e senha são vazias, na janela local 'login.php'//
 if(empty($_POST['email']) || empty($_POST['senha'])){
 	 	echo "<script language='javascript'>window.location='login.php'; </script>";
 	exit();

 }

$email =  $_POST['email'];
$senha =  $_POST['senha'];

//Método prepare, para esperar a inserção de parâmetros  e bindValue receber referências e valores como argumento//
		$res = $conexao->prepare("SELECT * from usuarios where email = :email and senha = :senha");
		$res->bindValue(":email", $email);
		$res->bindValue(":senha", $senha);

//Com a variável result, executar os dados inseridos nas linhas. Se preenchidos corretamente, encaminhar a página painel.php.
//Se não, a chamada do javascript imprime na tela uma janela de alerta 'Dados incorretos'		
		$res->execute();
		$dados = $res->fetchAll(PDO::FETCH_ASSOC);
		$linhas = count($dados);

		if($linhas > 0){

			$_SESSION['nome_usuario'] = $dados[0]['nome'];
			$_SESSION['id_usuario'] = $dados[0]['usuario'];
			

			echo "<script language='javascript'>window.location='painel.php'; </script>";

			}else{

				echo "<script language='javascript'>window.alert('Dados Incorretos!'); </script>";

				echo "<script language='javascript'>window.location='login.php'; </script>";
			}



