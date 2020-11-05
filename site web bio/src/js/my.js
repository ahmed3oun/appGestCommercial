
//panier
if (document.readyState =='loading'){
	document.addEventListener('DOMContetLoaded', ready)
}else{
	ready()
}

function ready(){

		var removeCartItemButtons = document.getElementsByClassName('btn-danger')
		for(var i=0; i < removeCartItemButtons.length; i++){
				var button= removeCartItemButtons[i]
				button.addEventListener('click',removeCartItem)
					
		}
		var quantityInputs = document.getElementsByClassName('cart-quantity-input')
		for(var i=0; i < quantityInputs.length; i++){
				var input= quantityInputs[i]
				input.addEventListener('change',quantityChanged)
					
		}
		var addToCartButtons = document.getElementsByClassName('bt')
		for(var i =0; i < 	addToCartButtons.length; i++){
			var button = addToCartButtons[i]
			button.addEventListener('click', addToCartClicked)
		}
}


function removeCartItem(event){
	var buttonClicked = envet.target
	buttonClicked.parentElement.parentElement.remove()
	updateCartTotal()

}
function quantityChanged(event){
	var input = event.target
	if (isNaN(input.value) || input.value <=0){
		input.value =1
	}
	updateCartTotal()
}
function addToCartClicked(event){
	var button = event.target
	var shopItem = button.parentElement.parentElement
	var title= shopItem.getElementsByClassName('definition')[0].innerText
	var price=shopItem.getElementsByClassName('prix')[0].innerText
	var imageSrc= shopItem.getElementsByClassName('tof')[0].src
	console.log(title,price,imageSrc)
	addToCart(title,price,imageSrc)
}

function addItemToCart(title,price,imageSrc){
	var cartRow =document.createElement('div')
	cartRow.classList.add('cart-row')
	var cartItems=document.getElementsByClassName('cart-items')[0]
	var cartItemNames =cartItems.getElementsByClassName('cart-item-title')
	for(vari=0; i<cartItemNames.length;i++){
		if(cartItemNames[i].innerText==title){
			alert('this item existe')
			return
		}
	}
	var cartRowContents=`
		<div class="cart-item cart-column">
                <img class="cart-item-image" src="${imageSrc}">
                <span class="cart-item-title">${title}</span>
            </div>
            <span class="cart-price cart-column">${price}</span>
            <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button">remove</button>
            </div>
	`
	cartRow.innerHtml =cartRowContents
	cartItems.appned(cartRow)
	cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click',removeCartItem)
	cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change',quantityChanged)
}

function updateCartTotal(){
	var cartItemContainer = document.getElementsByClassName('cart-item')[0]
	var cartRow = cartItemContainer.getElementsByClassName('cart-row')
	for (var i = 0; cartRow.length ; i++) {
		var cartRow =cartRow[i]
		var priceElement = cartRow.getElementsByClassName('cart-price')[0]
		var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')
		[0]
		var price = parseFloat(priceElement.innerText.replase('$', ''))
		console.log(price * quantity)

	}
	total =Math.round(total *100)/100
	document.getElementsByClassName('')[0].innerText='dt' + total
}