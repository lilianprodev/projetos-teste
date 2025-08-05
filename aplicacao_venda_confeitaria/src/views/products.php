<?php foreach ($products as $product): ?>
    <div class="product-item">
        <img src="public/images/<?= htmlspecialchars($product['image_url']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
        <h4><?= htmlspecialchars($product['name']) ?></h4>
        <p><?= htmlspecialchars($product['description']) ?></p>
        <span class="price">R$ <?= number_format($product['price'], 2, ',', '.') ?></span>
        <button class="add-to-cart" data-id="<?= $product['id'] ?>">Adicionar ao Carrinho</button>
    </div>
<?php endforeach; ?>