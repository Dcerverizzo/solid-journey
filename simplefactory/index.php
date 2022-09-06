<?php

require 'Email.php';

$email = new Email();
$message = $email->createPost();
$message->setAuthor("Autor Mensagel");
$message->setMessage("Mensagem Enviada com sucesso!"); 

echo $message->getAuthor() . $message->getMessage();
