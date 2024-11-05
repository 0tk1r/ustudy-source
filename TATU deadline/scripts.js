document.getElementById('productForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const productName = document.getElementById('productName').value;
    const productPrice = document.getElementById('productPrice').value;

    const productList = document.getElementById('productList');
    const productItem = document.createElement('div');
    productItem.classList.add('product-item');

    productItem.innerHTML = `
        <h3>${productName}</h3>
        <p>Narxi: ${productPrice} so'm</p>
    `;

    productList.appendChild(productItem);

    // Formani tozalash
    document.getElementById('productForm').reset();
});
