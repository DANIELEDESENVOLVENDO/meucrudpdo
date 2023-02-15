<!----/*A função session_start() usado em meu código para ter acesso à variável
de sessão $_SESSION, e ela só é chamada uma única vez, para informar ao servidor que quer acesso à sessão deste usuário*,
E A SESSÃO DESTROY, DESTROI TODOS OS DADOS ASSOCIADOS A SESSÃO ATUAL, SENDO RECUPERADAS QUANDO É CHAMADO NOVAMENTE A SESSÃO START/
<?php 
@session_start();
@session_destroy();
header('Location: login.php');
exit();
 ?>