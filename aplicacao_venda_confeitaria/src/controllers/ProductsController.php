<?php
include_once '../config/database.php';
include_once '../models/Product.php';

// Conexão com o banco de dados
$database = new Database();
$db = $database->getConnection();

// Instanciar o objeto de produto
$product = new Product($db);

// Consultar produtos
$stmt = $product->readAll();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Incluir a view para exibir os produtos
include '../views/products.php';