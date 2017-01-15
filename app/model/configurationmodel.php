<?php
	namespace Model;

	use \DB\SQL\Schema as Schema;

	class ConfigurationModel extends \Model {
		protected
			$db			= 'DB',
			$table		= 'Configuration',
			$primary	= 'conf_id',
			$fieldConf	= array(
				'conf_id' => array (
					'type'	=> Schema::DT_INT,
					'nullable' => false
				),
				'conf_key' => array(
					'type' => Schema::DT_VARCHAR256,
					'nullable' => false
				),
				'conf_val' => array(
					'type' => Schema::DT_VARCHAR256,
					'nullable' => false
				)
			);
	}
