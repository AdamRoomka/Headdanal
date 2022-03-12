window.onload = function(e) {
// shopping cart
if (document.readyState == 'loading') {
	document.addEventListener('DOMContentLoaded', ready);
} else {
	ready();
}

function ready() {
	var removeCartItemButtons = document.getElementsByClassName('btn-danger');
	for (var i = 0; i < removeCartItemButtons.length; i++) {
		var button = removeCartItemButtons[i];
		button.addEventListener('click', removeCartItem);
		button.addEventListener('click', removeCartfromLocalStorage);
	}

	var quantityInputs = document.getElementsByClassName('cart-quantity-input');
	for (var i = 0; i < quantityInputs.length; i++) {
		var input = quantityInputs[i];
		input.addEventListener('change', quantityChanged);
	}

	var addToCartButtons = document.getElementsByClassName('shop-item-button');
	for (var i = 0; i < addToCartButtons.length; i++) {
		var button = addToCartButtons[i];
		button.addEventListener('click', addToCartClicked);
	}

	document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked);
}

function purchaseClicked() {
	alert('Thank you for your purchase');
	var cartItems = document.getElementsByClassName('cart-items')[0];
	while (cartItems.hasChildNodes()) {
		cartItems.removeChild(cartItems.firstChild);
	}
	updateCartTotal();
}

function removeCartItem(event) {
	var buttonClicked = event.target;
	buttonClicked.parentElement.parentElement.remove();

	let productNumbers = localStorage.getItem('cartNumbers');
	localStorage.setItem('cartNumbers', productNumbers - 1);
	
	updateCartTotal();
}

function removeCartfromLocalStorage(event) {
	
	let cart = localStorage.getItem('cart');
	cart.localStorage.setItem('cart', title);

	updateCartTotal();
}

function quantityChanged(event) {
	var input = event.target;
	if (isNaN(input.value) || input.value <= 0) {
		input.value = 1;
	}
	updateCartTotal();
}

function addToCartClicked(event) {
	var button = event.target;
	var shopItem = button.parentElement.parentElement;
	var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText;
	var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText;
	var imageSrc = shopItem.getElementsByClassName('shop-item-image')[0].src;
	addItemToCart(title, price, imageSrc);
	addItemToLocalStorage(title, price, imageSrc);
	updateCartTotal();
}



function addItemToLocalStorage(title, price, imageSrc){
	let item =
		{
			title: title,
			price: price,
			imageSrc:imageSrc,
			amount: 1
		}
	let cart = localStorage.getItem("cart");
	if (cart === null){
		localStorage.setItem("cart", JSON.stringify([item]));
	} else {
		cart=JSON.parse(cart)
		
		for(var i=0;i<cart.length;i++) {
			if(cart[i].title===item.title) {
				cart[i].amount++
				break
			}
		}
		
		if(i===cart.length) {
			cart.push(item)
		}
		localStorage.setItem('cart',JSON.stringify(cart))
	}
	
}


function addItemToCart(title, price, imageSrc) {
	var cartRow = document.createElement('div');
	cartRow.classList.add('cart-row');
	var cartItems = document.getElementsByClassName('cart-items')[0];
	var cartRowContents = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger d-flex align-items-center" type="button">REMOVE</button>
        </div>`;
	cartRow.innerHTML = cartRowContents;
	cartItems.append(cartRow);
	cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem);
	cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged);
}

let cart = document.querySelector('#cart');

function updateCartTotal() {
	var cartItemContainer = document.getElementsByClassName('cart-items')[0];
	var cartRows = cartItemContainer.getElementsByClassName('cart-row');
	var total = 0;
	for (var i = 0; i < cartRows.length; i++) {
		var cartRow = cartRows[i];
		var priceElement = cartRow.getElementsByClassName('cart-price')[0];
		var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0];
		var price = parseFloat(priceElement.innerText.replace('$', ''));
		var quantity = quantityElement.value;
		total = total + price * quantity;
	}
	total = Math.round(total * 100) / 100;
	document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total;

	document.getElementsByClassName('cart-basket')[0].textContent = i /= 1;
}



let addToCartButtons = document.querySelectorAll('.shop-item-button');


for (let i = 0; i < addToCartButtons.length; i++) {
	addToCartButtons[i].addEventListener('click', () => {
		cartNumbers();
	});
}

function cartNumbers() {
	let productNumbers = localStorage.getItem('cartNumbers');
	productNumbers = parseInt(productNumbers);

	if (productNumbers) {
		localStorage.setItem('cartNumbers', productNumbers + 1);
		document.querySelector('.cart-basket').textContent = productNumbers + 1;
	} else {
		localStorage.setItem('cartNumbers', 1);
		document.querySelector('.cart-basket').textContent = 1;
	}
}

function onLoadcartNumbers() {
	let productNumbers = localStorage.getItem('cartNumbers');

	if(productNumbers){
		document.querySelector('.cart-basket').textContent = productNumbers;

		//console.log(document.querySelector('.cart-basket').textContent = productNumbers);
	}
}

function onLoadcartItems() {
	let cart=localStorage.getItem('cart')
	if(cart===null || cart.length===0)
		return

	cart=JSON.parse(cart)
	let cartHTML=document.getElementsByClassName('cart-items')[0]

	for(let i=0;i<cart.length;i++) {
		cartHTML.innerHTML+=(`<div class="cart-row">
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${cart[i].imageSrc}" width="100" height="100">
            <span class="cart-item-title">${cart[i].title}</span>
        </div>
        <span class="cart-price cart-column">${cart[i].price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" min=1 type="number" value="${cart[i].amount}">
            <button class="btn btn-danger d-flex align-items-center" type="button">REMOVE</button>
        </div></div>`)
	}
	cartHTML.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem);
	cartHTML.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged);
}
	
onLoadcartNumbers();
onLoadcartItems();
};