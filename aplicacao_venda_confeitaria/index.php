<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doce Sabor - Confeitaria em Salvador</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Doce Sabor</h1>
            <nav>
                <ul>
                    <li><a href="#inicio">Início</a></li>
                    <li><a href="#produtos">Produtos</a></li>
                    <li><a href="#contato">Contato</a></li>
                    <li class="cart-icon"><a href="#" id="view-cart">🛒 Carrinho (<span id="cart-count">0</span>)</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="inicio" class="hero">
            <div class="container">
                <h2>Os melhores doces artesanais de Salvador!</h2>
                <p>Bolos deliciosos, tortas irresistíveis, docinhos finos e muito mais para adoçar o seu dia.</p>
                <a href="#produtos" class="button">Conheça nossos produtos</a>
            </div>
        </section>

        <section id="produtos" class="products">
            <div class="container">
                <h3>Nossos Produtos</h3>
                <div class="product-grid">
                    <?php
                        include_once 'src/controllers/ProductsController.php';
                    ?>
                </div>
            </div>
        </section>
        
        <div id="cart-modal" class="modal">
            <div class="modal-content">
                <span class="close-button">&times;</span>
                <h2>Seu Carrinho</h2>
                <div id="cart-items">
                    </div>
                <div class="cart-total">
                    <strong>Total: R$ <span id="cart-total-price">0,00</span></strong>
                </div>
                <a href="checkout.php" class="button checkout-button">Finalizar Compra</a>
            </div>
        </div>

    </main>

    <footer>
        <div class="container">
            <p>&copy; 2023 Doce Sabor - Todos os direitos reservados.</p>
        </div>
    </footer>
    <script src="public/js/main.js"></script>
</body>
</html>