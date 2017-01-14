<?php

	// Fetch framework.
	$funmos = require('f3/lib/base.php');

	// Fetch configuration files.
	require('config/config.php');
	require('config/db.php');

	// Setup DB connection.
	$db_type = $funmos->exists('db.type') ? strtoupper($funmos->get('db.type')) : "";

	if (strlen(trim($db_type)) > 0) {
		switch ($db_type) {
			case 'MYSQL':
				$db = new \DB\SQL('mysql:host=' . $funmos->get('db.host') .
									';port=' . $funmos->get('db.port') .
									';dbname=' . $funmos->get('db.name'),
									$funmos->get('db.user')
									$funmos->get('db.pass'));
				break;
		}
	}

	if (isset($db)) {
		$funmos->set('DB', $db);
	} else {
		echo "Database could not be set. Please check your settings.";
	}

	// Run framework.
	$funmos->run();
