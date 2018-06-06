
<?php
$to      = Config::EMAIL_USER;
$subject = 'Contato Loja de Brinquedos';
$message = 'Nome: '.$_GET['txtinputnome']. "\r\n" .$_GET['txtinputarea'];
$dest = $_GET['txtinputemail'];

$headers = "From: " .$dest;
?>
mail($to, $subject, $message, $headers);
<script>alert('Obrigado pela mensagem você será respondido em Breve!')</script>
<meta http-equiv="refresh" content="0; url=contato">

