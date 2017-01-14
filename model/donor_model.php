<?php
	namespace Model;

	use \DB\SQL\Schema as Schema;

	class DonorModel extends \Model {
		protected
			$db			= 'DB',
			$table		= 'Donor',
			$primary	= 'donor_id'
			$fieldConf	= array(
				'donor_id' => array (
					'type'	=> Schema::DT_INT
				),
				'f_name' => array(
					'type' => Schema::DT_VARCHAR128
				),
				'l_name' => array(
					'type' => Schema::DT_VARCHAR128
				),
				'user_id' => array(
					'belongs-to-one' => 'UserModel'
				),
				'piece_id' => array(
					'belongs-to-one' => 'PieceModel'
				)
			);
	}
