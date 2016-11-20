// Wait for document to load before registering other events.
document.addEventListener("DOMContentLoaded", function(e) {
	// Set redirects for login and logout buttons.
	var loginButton = document.getElementById('login-button');
	var logoutButton = document.getElementById('logout-button');
	if (loginButton) {
		loginButton.addEventListener('click', function(e) {
			e.preventDefault();
			// Retrieve current URL.
			var currentLoc = window.location.href;
			// Regular expression for finding 'something.html'.
			var reg = /[a-z]*-?[a-z]*\.html$/i;
			// Retrieve new URL from replacement.
			var newLoc = currentLoc.replace(reg, 'login.html');
			// Go to the new URL.
			window.location.href = newLoc;
		});
	} else if (logoutButton) {
		logoutButton.addEventListener('click', function(e) {
			e.preventDefault();
			// Retrieve current URL.
			var currentLoc = window.location.href;
			// Regular expression for finding 'something.html'.
			var reg = /[a-z]*-?[a-z]*\.html$/i;
			// Retrieve new URL from replacement.
			var newLoc = currentLoc.replace(reg, 'index.html');
			// Go to the new URL.
			window.location.href = newLoc;
		});
	}

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
	});

	// Check who is logging in (user or admin) and redirect accordingly.
	var loginSubmitButton = document.getElementById('login-submit-button');
	if (loginSubmitButton) {
		loginSubmitButton.addEventListener('click', function(e) {
			e.preventDefault();

			var username = document.getElementById('username').value;
			if (username == 'admin') {
				// Retrieve current URL.
				var currentLoc = window.location.href;
				// Regular expression for finding 'something.html'.
				var reg = /[a-z]*-?[a-z]*\.html$/i;
				// Retrieve new URL from replacement.
				var newLoc = currentLoc.replace(reg, 'admin-panel.html');
				// Go to the new URL.
				window.location.href = newLoc;
			} else {
				// Retrieve current URL.
				var currentLoc = window.location.href;
				// Regular expression for finding 'something.html'.
				var reg = /[a-z]*-?[a-z]*\.html$/i;
				// Retrieve new URL from replacement.
				var newLoc = currentLoc.replace(reg, 'user-panel.html');
				// Go to the new URL.
				window.location.href = newLoc;
			}
		});
	}
});
