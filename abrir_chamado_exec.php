<?php

echo '<pre>';
var_dump($_POST);
echo '</pre>';


//Estamos trabalhando na montagem do texto
$titulo = str_replace('#','-',$_POST['titulo']);
$categoria = str_replace('#','-',$_POST['categoria']);
$descricao = str_replace('#','-',$_POST['descricao']);

//implode('#','-',$_POST);

$texto = $titulo . '#' . $categoria .'#'. $descricao. PHP_EOL;
//echo $texto;

//abrindo o arquivo
$arquivo = fopen('arquivo.txt','a');

//escrevendo o texto
fwrite($arquivo, $texto);

//fechando o arquivo
fclose($arquivo);

header('Location: abrir_chamado.php?salvo');

?>