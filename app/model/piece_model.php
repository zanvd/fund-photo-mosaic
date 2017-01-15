<?php
	namespace Model;

	use \DB\SQL\Schema as Schema;

	class PieceModel extends \Model {
		protected
			$db			= 'DB',
			$table		= 'Piece',
			$primary	= 'piece_id'
			$fieldConf	= array(
				'piece_id' => array (
					'type'	=> Schema::DT_INT
				),
				'piece_name' => array(
					'type' => Schema::DT_VARCHAR128
				),
				'price' => array(
					'type' => Schema::DT_FLOAT
				),
				'discovered' => array(
					'type' => Schema::DT_BOOL
				),
				'anonymous' => array(
					'type' => Schema::DT_BOOL
				),
				'mosaic_id' => array(
					'belongs-to-one' => 'MosaicModel'
				),
				'donor' => array(
					'has-one' => array('DonorModel', 'piece_id')
				)
			);
	}
