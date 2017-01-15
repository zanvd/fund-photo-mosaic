<?php
	namespace Model;

	use \DB\SQL\Schema as Schema;

	class PostalOfficeModel extends \Model {
		protected
			$db			= 'DB',
			$table		= 'PostalOffice',
			$primary	= 'postal_id'
			$fieldConf	= array(
				'postal_id' => array (
					'type'	=> Schema::DT_INT
				),
				'postal_code' => array(
					'type' => Schema::DT_INT
				),
				'postal_name' => array(
					'type' => Schema::DT_VARCHAR128
				),
				'country_id' => array(
					'belongs-to-one' => 'CountryModel'
				),
				'users' => array(
					'has-many' => array('UserModel', 'user_id')
				)
			);
	}
