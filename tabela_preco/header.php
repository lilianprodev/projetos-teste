<?php
// O caminho do arquivo de configuração foi ajustado para sair da pasta 'header.php' e entrar na pasta 'config'
require_once "config/url.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio - Luzinete Confeitaria</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
</head>
<body>


<div class="container">

<a class="logo" href="<?= $BASE_URL ?>index.php">
    <img src="<?= $BASE_URL ?>assets/logo.png" alt="Logo_confeitaria">
</a>

    <header class="header">
        <h1>Luzinete Confeitaria</h1>
        <p>Preços e Opções Especiais</p>
    </header>