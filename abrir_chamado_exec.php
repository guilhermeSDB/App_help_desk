<?php

echo '<pre>';
var_dump($_POST);
echo '</pre>';

fopen('arquivo.txt','a');
$texto = $_POST['titulo'] . $_POST['categoria'] . $_POST['descricao'];

?>