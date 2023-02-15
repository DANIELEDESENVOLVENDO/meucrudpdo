<?php
require_once("conexao.php");

@session_start();
$usuario = $_SESSION['nome_usuario'];
if ($usuario == ''){
	header('Location: login.php');
}
//echo $usuario;
 ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	
<!----excluir produto---->
<form action="remove-produto.php" method="POST"  >                        

<input   type="hidden" name="excluir" value="<?=$produto['id'] ?>"></br>

<button tabindex="0" class="btn btn-danger" data-trigger="focus" text-danger btn btn-link  ml-auto titulo" data-toggle="popover"  data-placement="right" >Excluir</button>


<a href="produto-formulario.php" method="POST" type="button" class="btn btn-info" >Cancelar</a>

</form>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link" href="painel.php">Fornecedores <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="produtos.php">Produtos</a>
</li>

<li class="nav-item">
<a class="nav-link" href="logout.php">Sair</a>
</li>
</ul>
<form class="form-inline my-2 my-lg-0">
<input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="txtbuscar">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="buscar">Buscar</button>
</form>
</div>
