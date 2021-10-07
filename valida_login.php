<?php

session_start();

//usuarios do sistema
$usuarios_app = array(
    array('email' => '145753@hotmail.com','senha' => '145753'),
    array('email' => 'user@teste.com.br','senha' => 'abcd'),
);

//var_dump($usuarios_app);

foreach($usuarios_app as $user){
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true; 
    }  
}

if($usuario_autenticado){
    $_SESSION['autenticado'] = 'SIM';
    header("location: home.php");   
}else{
    $_SESSION['autenticado'] = 'NÃO';
    header("location: index.php?login=erro2");
}

/*print_r($_GET);

echo '<br />'
echo $_GET['email']
echo '<br />'
echo $_GET['senha']
*/
//print_r($_POST);

//echo '<br />';
//echo $_POST['email'];
//echo '<br />';
//echo $_POST['senha'];

?>