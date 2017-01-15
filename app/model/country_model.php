<?php
	namespace Model;

	use \DB\SQL\Schema as Schema;

	class CountryModel extends \Model {
		protected
			$db			= 'DB',
			$table		= 'Country',
			$primary	= 'country_id'
			$fieldConf	= array(
				'country_id' => array (
					'type'	=> Schema::DT_INT
				),
				'country_name' => array(
					'type' => Schema::DT_VARCHAR128
				),
				'postal_codes' => array(
					'has-many' => array('PostalOfficeModel', 'country_id')
				)
			);
	}
