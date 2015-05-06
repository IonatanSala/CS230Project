$(function() {


	// Cart SHOW/HIDE logic
	var cart = document.getElementById('cart-icon');
	var cartSection = document.body.querySelector('.cart');
	var exitCart = document.getElementById('cart-exit');

	var login = document.getElementById('log-container');
	var lgn_btn = document.body.querySelector('.lgn-btn');
	

	cart.addEventListener('click', function() {

		$(cartSection).show();
		document.body.style.overflow = "hidden";
	});

	exitCart.addEventListener('click', function(){
		$(cartSection).hide();
		document.body.style.overflow = '';
	});

	

	lgn_btn.addEventListener('click', function(event) {
		event.preventDefault();
		$(login).toggle();
		document.body.style.overflow = "hidden";
	});

	$('body').on('click',function() {
		// alert('hi');
		$(login).toggle();
		document.body.style.overflow = "";
	});
	

});
