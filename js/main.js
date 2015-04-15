$(function() {


	// Cart SHOW/HIDE logic
	var cart = document.getElementById('cart-icon');
	var cartSection = document.body.querySelector('.cart');
	var exitCart = document.getElementById('cart-exit');
	

	cart.addEventListener('click', function() {
		
		$(cartSection).show();
		document.body.style.overflow = "hidden";
	});	

	exitCart.addEventListener('click', function(){
		$(cartSection).hide();
		document.body.style.overflow = '';
	});

});