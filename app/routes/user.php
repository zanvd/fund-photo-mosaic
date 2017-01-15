<?php
	// Home.
	$funmos->route('GET /', 'Controller\User\Home->get');

	// Story.
	$funmos->route('GET /story', 'Controller\User\Story->get');

	//Contact.
	$funmos->route('GET /contact', 'Controller\User\Contact->get');

	//Login.
	$funmos->route('GET /login', 'Controller\User\Login->get');

	// Regsiter.
	$funmos->route('GET /register', 'Controller\User\Register->get');
	$funmos->route('POST /register', 'Controller\User\Register->post');
