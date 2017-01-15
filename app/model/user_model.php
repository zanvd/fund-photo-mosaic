<?php
	namespace Model;

	use \DB\SQL\Schema as Schema;

	class UserModel extends \Model {
		protected
			$db			= 'DB',
			$table		= 'User',
			$primary	= 'user_id'
			$fieldConf	= array(
				'user_id' => array (
					'type'	=> Schema::DT_INT
				),
				'username' => array(
					'type' => Schema::DT_VARCHAR128
				),
				'email' => array(
					'type' => Schema::DT_VARCHAR128
				),
				'password' => array(
					'type' => Schema::DT_CHAR128
				),
				'address' => array(
					'type' => Schema::DT_VARCHAR128
				),
				'administrator' => array(
					'type' => Schema::DT_BOOL
				),
				'postal_id' => array(
					'belongs-to-one' => 'PostalOfficeModel'
				),
				'donor' => array(
					'has-one' => array('DonorModel', 'user_id')
				)
			);
	}
