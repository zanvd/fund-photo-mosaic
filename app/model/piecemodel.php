<?php
	namespace Model;

	use \DB\SQL\Schema as Schema;

	class PieceModel extends \Model {
		protected
			$db			= 'DB',
			$table		= 'Piece',
			$primary	= 'piece_id',
			$fieldConf	= array(
				'piece_id' => array (
					'type'	=> Schema::DT_INT,
					'nullable' => false
				),
				'piece_name' => array(
					'type' => Schema::DT_VARCHAR128,
					'nullable' => false
				),
				'price' => array(
					'type' => Schema::DT_FLOAT,
					'nullable' => false
				),
				'discovered' => array(
					'type' => Schema::DT_BOOL,
					'nullable' => false
				),
				'anonymous' => array(
					'type' => Schema::DT_BOOL,
					'nullable' => false
				),
				'mosaic_id' => array(
					'belongs-to-one' => 'MosaicModel',
					'nullable' => false
				),
				'piece_donor' => array(
					'has-one' => array('PieceDonorModel', 'piece_id')
				)
			);
	}
