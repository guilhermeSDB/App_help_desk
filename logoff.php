<?php

/*
session_start();

//remover indices do array de sessao
//unset()

//unset($_SESSION['x']); //remove o indice apenas se existir

//destruir a variavel de sessao
//session_destroy()

session_destroy();// sera destruida 
//forçar um redirecionamento

*/

session_destroy();
header('Location: index.php');


?>
