<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzineteConfeitaria</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class="container">

        <h1>Luzinete Confeitaria</h1>

        <p style="text-align: center;">
            Transformando momentos  em doces memórias!
        </p>

        <h2>Nossos Bolos Deliciosos</h2>

        <div class="item-list">

            <div class="item-card">

                <h3>Bolo de Chocolate Trufrado</h3>

                <p>Massa fofinha de chocolate em recheio cremoso de trufa.</p>

                <p class="price"> R$ 75,00 (1kg)</p>
            </div>

            <div class="item-card">
                <h3>Bolo de leite Ninho com Morango</h3>

                <p>Saboroso bolo de Ninho com pedaços de morango.</p>

                <p class="price">R$ 80,00 (1kg)</p>
            </div>

            <div class="item-card">
                <h3>Bolo de Cenoura com Brigadeiro</h3>

                <p>Tradicional bolo de cenoura com cobertura generosa de brigadeiro.</p>

                <p class="price">R$ 65,00 (1kg)</p>
            </div>


            <div class="item-card">
                <h3>Bolo de Fubá Cremoso</h3>

                <p>Receita da vovó, perfeito para o café da tarde.</p>

                <p class="price">R$ 45,00 (Unidade)</p>
            </div>

        </div>

        <h2>Salgados Fresquinhos</h2>

        <div class="item-card">

             <div class="item-card">
                <h3>Coxinha de Frango</h3>
                <p>A tradicional coxinha, crocante por fora e suculenta por dentro.</p>

                <p class="price">R$ 3,50 (Unidade)</p>
            </div>

            <div class="item-card">
                <h3>Esfiha de Carne</h3>
                <p>Deliciosa esfiha aberta com recheio saboroso de carne.</p>

                <p class="price">R$ 4,00 (Unidade)</p>
            </div>

            <div class="item-card">
                <h3>Empada de Palmito</h3>

                <p>Massa amanteigada e recheio cremoso de palmito.</p>

                <p class="price">R$ 4,50 (Unidade)</p>
            </div>

            <div class="item-card">
                <h3>Mini Quiches Variadas</h3>

                <p>Queijo, alho-poró e lorraine (kit com 6 unidades).</p>

                <p class="price">R$ 25,00 (Kit)</p>
            </div>

        </div>

        <h2>Faça Seu Pedido!</h2>
        
        <p style="text-align: center;">Preencha o formulário abaixo e entraremos em contato para confirmar seu pedido.</p>

        <form action="processar_pedido.php" method="post">

            <label for="nome">Seu Nome:</label>
            <input type="text" name="nome" id="nome" require>

            <label for="telefone">Seu WhatsApp (com DDD):</label>
            <input type="tel" name="telefone" id="telefone" placeholder="71983937845" require>

            <label for="pedido">Seu pedido (Informe os itens e quantidades):</label>
            <textarea name="pedido" id="pedido" rows="5" placeholder="Ex: 1 Bolo de Chocolate Trufado , 10 Coxinhas de Frango..." require></textarea>

            <label for="observacoes">Observações (opcional):</label>
            <textarea id="observacoes" name="observacoes" rows="3" placeholder="Ex: Sem lactose, retirar as 15h..."></textarea>

            <button type="submit">Enviar Pedido via WhatsApp</button>
        </form>

        <a href="https://wa.me/5571993109355?text=Ol%C3%A1%2C%20gostaria%20de%20fazer%20um%20pedido%20da%20confeitaria!" class="whatsapp-link" target="_blank">
            Prefere pedir diretamente pelo WhatsApp? Clique aqui!
        </a>

        <p style="text-align: center; margin-top: 30px; font-size: 0.9em; color: #777;">
            © 2025 Luzinete Confeitaria. Todos os direitos reservados.
        </p>

    </div>  
</body>
</html>