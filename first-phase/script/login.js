// Wait for document to load before registering other events.
document.addEventListener("DOMContentLoaded", function(e) {
	// Check who is logging in (user or admin) and redirect accordingly.
	var loginSubmitButton = document.getElementById('login-submit-button');
	loginSubmitButton.addEventListener('click', function(e) {
		var username = document.getElementById('username');
		var password = document.getElementById('password');
		var robot = document.getElementById('robot');
		if (username.value == 'admin') {
			e.preventDefault();

			// Retrieve current URL.
			var currentLoc = window.location.href;
			// Regular expression for finding 'something.html'.
			var reg = /[a-z]*-?[a-z]*\.html$/i;
			// Retrieve new URL from replacement.
			var newLoc = currentLoc.replace(reg, 'admin-panel.html');
			// Go to the new URL.
			window.location.href = newLoc;
		} else if (username.checkValidity() && password.checkValidity()
					&& robot.checkValidity()) {
			e.preventDefault();
						
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
});
