document.addEventListener('DOMContentLoaded', () => {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartCount = document.getElementById('cart-count');
    const cartItemsContainer = document.getElementById('cart-items');
    const cartTotalPrice = document.getElementById('cart-total-price');
    const cartModal = document.getElementById('cart-modal');
    const viewCartButton = document.getElementById('view-cart');
    const closeButton = document.querySelector('.close-button');

    function updateCartUI() {
        cartCount.textContent = cart.length;
        cartItemsContainer.innerHTML = '';
        let total = 0;

        cart.forEach(item => {
            const itemElement = document.createElement('div');
            itemElement.classList.add('cart-item');
            itemElement.innerHTML = `
                <span>${item.name} x ${item.quantity}</span>
                <span>R$ ${(item.price * item.quantity).toFixed(2).replace('.', ',')}</span>
            `;
            cartItemsContainer.appendChild(itemElement);
            total += item.price * item.quantity;
        });

        cartTotalPrice.textContent = total.toFixed(2).replace('.', ',');
    }

    // Adiciona o produto ao carrinho
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', (e) => {
            const productId = e.target.getAttribute('data-id');
            const productElement = e.target.closest('.product-item');
            
            const name = productElement.querySelector('h4').textContent;
            const price = parseFloat(productElement.querySelector('.price').textContent.replace('R$ ', '').replace(',', '.'));

            const existingItem = cart.find(item => item.id === productId);

            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({ id: productId, name, price, quantity: 1 });
            }

            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartUI();
        });
    });

    // Exibe o modal do carrinho
    viewCartButton.addEventListener('click', () => {
        cartModal.style.display = 'block';
    });

    // Fecha o modal
    closeButton.addEventListener('click', () => {
        cartModal.style.display = 'none';
    });
    
    updateCartUI();
});