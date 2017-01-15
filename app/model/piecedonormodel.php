<?php
	namespace Model;

	use \DB\SQL\Schema as Schema;

	class PieceDonorModel extends \Model {
		protected
			$db			= 'DB',
			$table		= 'PieceDonor',
			$primary	= 'pd_id',
			$fieldConf	= array(
				'pd_id' => array (
					'type'	=> Schema::DT_INT,
					'nullable' => false
				),
				'piece_id' => array(
					'belongs-to-one' => 'PieceModel',
					'nullable' => false
				),
				'donor_id' => array(
					'belongs-to-one' => 'DonorModel',
					'nullable' => false
				)
			);
	}
