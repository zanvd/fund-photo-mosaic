<?php

	// General framework configuration.
	$funmos->mset(array(
		'DEBUG' 		=> 3,
		'PACKAGE'		=> 'Fund Mosaic',
		"AUTOLOAD"		=> "app/",
		'UI'			=> 'view/',
		'LOGS'			=> 'log/',
		'TEMP'			=> 'tmp/',
		'CACHE'			=> 'folder=tmp/cache',
		'shared_front'	=> 'view/shared/'
	));
