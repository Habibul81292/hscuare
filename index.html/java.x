// Example JavaScript for adding products to the cart
const products = document.querySelectorAll('.product');
const cart = document.querySelector('#cart ul');

products.forEach(product => {
  const addToCartButton = product.querySelector('button');
  addToCartButton.addEventListener('click', () => {
    const productName = product.querySelector('h2').textContent;
    const cartItem = document.createElement('li');
    cartItem.textContent = productName;
    cart.appendChild(cartItem);
  });
});
