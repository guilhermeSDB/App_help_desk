# App help desk
Aplicativo para ajudar profissionais Help Desk abrir e consultar chamados de problemas.

## Descrição:  
Aplicativo para Help Desk utilizando PHP com Session, Controle de usuarios e Array.

## Tecnologias:  
HTML 5  
Bootstrap 5   
PHP 8 (Session e Array)   

## Como utilizar:  
-Primeiro é nescessario Logar no sitema com o LOGIN: user@teste.com.br e SENHA:1234 ou qualquer email e senha dentro do Array localizado no valida_login.php.  
-Basta clickar no Icone criar e preencher todos os campos solicitados.  
-Em seguida clique no segundo Icone para mostrar todos os chamados abertos.  

## Como funciona?
<h3>-Login:</h3>   
A lista de usuario permitidos esta em um Array, é verificado toda vez que tentar logar se o usuario e senha existem no Array(Valida_login.php),      
Caso correto sera redirecionado para home.php.       
Caso errado exibira um erro no Login utilizando o SweetAlert (O Erro é reconhecido passando por GET: Header(Location: index.php?erro) utilizando JQUERY verifica se o GET recebe 'erro' caso afirmativo é ativado o SweetAlert)  

<h3>-Home:</h3>   
--Abrir Chamado:    
Clicando no primeiro Icone, é levado para Abrir_chamado.php, todos os campos sao validados no Front utilizando Required.
Abrir_chamado_exec.php recebe o POST e SESSION ID do usuario, e é salvo dentro de um arquivo.txt no computador do utilizador, na mesma pasta dos arquivos utilizando [fOpen](https://www.php.net/manual/pt_BR/function.fopen.php).<br>   
--Consultar chamados:
Clicando no segundo Icone é levado para consulta de chamados aberto, que é que um Foreach que verifica os arquivos salvos.

## Demonstração
<p align="center">
  <img src="https://i.imgur.com/kp9LHFw.png" width"250" alt="Login Help Desk" title="Help Desk">
  <img src="https://i.imgur.com/YlE4f7C.png" width"250" alt="Index Help Desk" title="Help Desk">
  <img src="https://i.imgur.com/YuSwL3f.png" width"250" alt="Abrir Chamado Help Desk" title="Help Desk">
	<img src="https://i.imgur.com/z76SC7E.png" width"250" alt="Visualizar Chamado Help Desk" title="Help Desk">
</p>
