// Mahsulotlar ro'yxati va korzinka
const cart = [];

// Mahsulotlarni korzinkaga qo'shish
const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
addToCartButtons.forEach(button => {
    button.addEventListener('click', (event) => {
        const product = event.target.closest('.product');
        const productName = product.querySelector('h2').textContent;
        const productPrice = parseInt(product.getAttribute('data-price'));

        // Mahsulotni korzinkaga qo'shish
        cart.push({ name: productName, price: productPrice });

        // Korzinkani yangilash
        updateCart();
    });
});

// Korzinkadagi mahsulotlarni yangilash
function updateCart() {
    const cartList = document.getElementById('cart-list');
    const totalPriceElement = document.getElementById('total-price-cart');
    const cartCountElement = document.getElementById('cart-count-summary');
    
    // Korzinkadagi mahsulotlar ro'yxatini tozalash
    cartList.innerHTML = '';
    
    // Mahsulotlarni ro'yxatga qo'shish
    cart.forEach(item => {
        const listItem = document.createElement('li');
        listItem.textContent = `${item.name} - ${item.price} UZS`;
        cartList.appendChild(listItem);
    });

    // Umumiy summani hisoblash
    const totalPrice = cart.reduce((total, item) => total + item.price, 0);
    totalPriceElement.textContent = totalPrice;

    // Mahsulotlar sonini yangilash
    const cartCount = cart.length;
    cartCountElement.textContent = cartCount;

    // Korzinkada mahsulotlar borligini tekshirish
    if (cartCount === 0) {
        document.getElementById('purchase-btn').disabled = true;
    } else {
        document.getElementById('purchase-btn').disabled = false;
    }
}

// Sotib olish tugmasi
const purchaseButton = document.getElementById('purchase-btn');
purchaseButton.addEventListener('click', () => {
    if (cart.length > 0) {
        alert('Sizning buyurtmangiz muvaffaqiyatli amalga oshirildi!');
        cart.length = 0; // Korzinkani bo'shatish
        updateCart(); // Korzinkani yangilash
    } else {
        alert('Korzinkangiz bo\'sh!');
    }
});
