<?php
// Lógica para processar o pedido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Coleta os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $observacoes = $_POST['observacoes'];
    $itens_carrinho = json_decode($_POST['carrinho'], true);

    // TODO: Adicionar lógica de validação dos dados

    // TODO: Conectar ao banco de dados e salvar o pedido
    // Exemplo de como você salvaria na tabela 'orders' e 'order_items'
    
    // Supondo que você já tenha a conexão com o DB
    // $database = new Database();
    // $db = $database->getConnection();
    // $query = "INSERT INTO orders (customer_name, customer_email, ...) VALUES (?, ?, ...)";
    // ...

    // TODO: Enviar um email de confirmação para o cliente e para o administrador
    // mail($email, "Confirmação de Pedido", "Obrigado por seu pedido!");

    // Redirecionar para uma página de sucesso
    header('Location: success.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Compra - Doce Sabor</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <main>
        <section class="checkout-form">
            <div class="container">
                <h3>Finalizar Compra</h3>
                <form action="checkout.php" method="POST">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" id="nome" name="nome" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="endereco">Endereço de Entrega:</label>
                    <textarea id="endereco" name="endereco" required></textarea>

                    <label for="observacoes">Observações sobre o pedido:</label>
                    <textarea id="observacoes" name="observacoes"></textarea>

                    <input type="hidden" name="carrinho" id="carrinho-data">
                    
                    <button type="submit" class="button">Confirmar Pedido</button>
                </form>
            </div>
        </section>
    </main>

    <script>
        // Envia os dados do carrinho para o formulário
        const carrinhoDataInput = document.getElementById('carrinho-data');
        const carrinho = localStorage.getItem('cart');
        carrinhoDataInput.value = carrinho;
    </script>
</body>
</html>