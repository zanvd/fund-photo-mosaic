<?php
	// Home.
	$funmos->route('GET /', 'Controller\User\Home->get');

	// Story.
	$funmos->route('GET /story', 'Controller\User\Story->get');

	// Mosaic.
	$funmos->redirect('GET /mosaic', '/');
	$funmos->route('GET /mosaic/@id', 'Controller\User\Mosaic->get');

	// Contact.
	$funmos->route('GET /contact', 'Controller\User\Contact->get');

	// Login.
	$funmos->route('GET /login', 'Controller\User\Login->get');
	$funmos->route('POST /login', 'Controller\User\Login->post');

	// Logout.
	$funmos->route('GET /logout', 'Controller\User\Logout->get');

	// Regsiter.
	$funmos->route('GET /register', 'Controller\User\Register->get');
	$funmos->route('POST /register', 'Controller\User\Register->post');
