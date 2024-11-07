// Tovarlar ha'm Korzinkalar
const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
const cartList = document.getElementById('cart-list');
const totalPriceElement = document.getElementById('total-price-cart');
const purchaseButton = document.getElementById('purchase-btn');

let cart = []; // Korzinka ushin bos array
let totalPrice = 0; // Ja'mi nirqti saqlaw

// Tovarlardi korzinkag'a qosiw
addToCartButtons.forEach(button => {
    button.addEventListener('click', function() {
        // Tovar haqqinda mag'luwmat aliw
        const product = this.closest('.product');
        const productName = product.querySelector('h2').textContent;
        const productPrice = parseInt(product.getAttribute('data-price'));

        // Tovarlardi korzinkag'a qosiw
        cart.push({ name: productName, price: productPrice });
        totalPrice += productPrice;

        // Korzinka spiskasin jan'alaw
        updateCart();
    });
});

// Korzinka spiskasin jan'alaw
function updateCart() {
    // Korzinkani tazalaw
    cartList.innerHTML = '';

    // Ha'r bir tovardi spiskag'a qosiw
    cart.forEach(item => {
        const li = document.createElement('li');
        li.textContent = `${item.name} - ${item.price} UZS`;
        cartList.appendChild(li);
    });

    // Ja'mi nirqti ko'rsetiw
    totalPriceElement.textContent = totalPrice;

    // Sa'tip aliw knopkasin aktivlastirip, eger korzinka bos bolmasa sha'rti
    if (cart.length > 0) {
        purchaseButton.disabled = false;
    } else {
        purchaseButton.disabled = true;
    }
}

// Sa'tip aliw tu'ymesi
purchaseButton.addEventListener('click', function() {
    alert(`Sizdin' uliwma satip alg'an miywelerin'iz: ${totalPrice} UZS`);
    // Korzinkani bosatiw
    cart = [];
    totalPrice = 0;
    updateCart(); // Korzinka ha'm baxani (цена) jan'alaw
});
