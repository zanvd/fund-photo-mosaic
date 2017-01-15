// Wait for document to load before registering other events.
document.addEventListener("DOMContentLoaded", function(e) {
	// Display navigation menu and close button.
	var menuOpen = document.getElementById('menu-open');
	menuOpen.addEventListener("click", function(e) {
		e.preventDefault();

		document.getElementById('menu-close').className = "display-block";
		this.className = "display-none";
		document.getElementById('navigation').className = "nav-show";
	});

	// Hide navigation menu and show open button.
	var menuClose = document.getElementById('menu-close');
	menuClose.addEventListener("click", function(e) {
		e.preventDefault();

		document.getElementById('menu-open').className = "display-block";
		this.className = "display-none";
		document.getElementById('navigation').className = "nav-hide";
	});
});
