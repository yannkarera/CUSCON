let cart = JSON.parse(localStorage.getItem("cart")) || [];
let favorites = JSON.parse(localStorage.getItem("favorites")) || [];

displayCart(); // Appel immédiat au chargement
updateCartCount(); // Appel immédiat au chargement
displayFavorites();
showToast();

// Initial display

function addToFavorites(productName) {
  if (!favorites.includes(productName)) {
    favorites.push(productName);
    localStorage.setItem("favorites", JSON.stringify(favorites));
    showToast(`"${productName}" ajouté aux favoris !`);
    // Retarde le re-rendu pour laisser le toast apparaître
    setTimeout(() => {
      displayFavorites();
    }, 50);
  } else {
    showToast(`"${productName}" est déjà dans vos favoris.`);
  }
}

function displayFavorites() {
  const list = document.getElementById("favoritesList");
  list.innerHTML = "";
  favorites.forEach((name, index) => {
    list.innerHTML += `
      <li>
       <a href="/catalog/detail/${name}">
          ${name}
        </a>
      <button onclick="event.stopPropagation(); removeFavorite(${index})">❌</button>
      </li>
    `;
  });
}

function removeFavorite(index) {
  favorites.splice(index, 1);
  localStorage.setItem("favorites", JSON.stringify(favorites));
  displayFavorites();
}


function addToCart(name, price) {
  const itemIndex = cart.findIndex((item) => item.name === name);
  if (itemIndex !== -1) {
    cart[itemIndex].quantity += 1;
  } else {
    cart.push({ name, price, quantity: 1 });
  }

  showToast(`"${name}" ajouté au panier !`);

  // Retarder le DOM update juste un peu
  setTimeout(() => {
    updateCart();
    updateCartCount();
  }, 50);
}


function updateCart() {
  localStorage.setItem("cart", JSON.stringify(cart));
  updateCartCount(); // Appel immédiat au chargement
  displayCart();
}

function changeQuantity(index, delta) {
  cart[index].quantity += delta;
  if (cart[index].quantity <= 0) {
    cart.splice(index, 1);
  }
  updateCart();

}

function removeItem(index) {
  cart.splice(index, 1);
  updateCart();
}

function displayCart() {
  const cartItems = document.getElementById("cartItems");
  cartItems.innerHTML = "";

  let total = 0;

  cart.forEach((item, index) => {
    total += item.price * item.quantity;
    cartItems.innerHTML += `
          <div class="cart-item">
           <a href="/catalog/detail/${item.name}">
          ${item.name} - ${item.price}€ x ${item.quantity}
            </a>
            <button onclick="changeQuantity(${index}, 1)">+</button>
            <button onclick="changeQuantity(${index}, -1)">-</button>
            <button onclick="removeItem(${index})">Supprimer</button>
            </div>
            `;
  });

  document.getElementById("totalPrice").textContent = total + "€";
}

function updateCartCount() {
  const count = cart.reduce((sum, item) => sum + item.quantity, 0);

  const badge = document.getElementById("cart-count");
  const badges = document.querySelectorAll('.cart-count');
  badges.forEach((badge) => {
    badge.innerHTML = count;
  })
//   console.log(badges)
//   console.log(count, badge);
//   if (badge) {
//     console.log('bqdge exists', badge.textContent)
//     badge.innerHTML = count;
//     console.log('bqdge qfter set', badge.textContent)
//   }
}

function showToast(message) {
  const toast = document.getElementById('toast');
  toast.textContent = message;
  toast.classList.add('show');
  setTimeout(() => {
    toast.classList.remove('show');
  }, 3000);
}
