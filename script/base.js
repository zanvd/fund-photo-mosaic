// Wait for document to load before registering other events.
document.addEventListener("DOMContentLoaded", function(e) {
	// Go to login page on button click.
	var loginButton = document.getElementById('login-button');
	loginButton.addEventListener('click', function(e) {
		e.preventDefault();
		// Retrieve current URL.
		var currentLoc = window.location.href;
		// Regular expression for finding 'something.html'.
		var reg = /[a-z]*\.html$/i;
		// Retrieve new URL from replacement.
		var newLoc = currentLoc.replace(reg, 'login.html');
		// Go to the new URL.
		window.location.href = newLoc;
	});

	// Display navigation menu and close button.
	var menuOpen = document.getElementById('menu-open');
	menuOpen.addEventListener("click", function(e) {
		e.preventDefault();

		document.getElementById('menu-close').className = "display-block";
		this.className = "display-none";
		document.getElementById('mobile-nav').className = "mobile-nav-show";
	});

	// Hide navigation menu and show open button.
	var menuClose = document.getElementById('menu-close');
	menuClose.addEventListener("click", function(e) {
		e.preventDefault();

		document.getElementById('menu-open').className = "display-block";
		this.className = "display-none";
		document.getElementById('mobile-nav').className = "mobile-nav-hide";
	})
});
