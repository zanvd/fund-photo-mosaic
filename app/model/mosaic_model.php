<?php
	namespace Model;

	use \DB\SQL\Schema as Schema;

	class MosaicModel extends \Model {
		protected
			$db			= 'DB',
			$table		= 'Mosaic',
			$primary	= 'mosaic_id'
			$fieldConf	= array(
				'mosaic_id' => array (
					'type'	=> Schema::DT_INT
				),
				'mosaic_title' => array(
					'type' => Schema::DT_VARCHAR128
				),
				'description' => array(
					'type' => Schema::DT_TEXT
				),
				'path' => array(
					'type' => Schema::DT_VARCHAR128
				),
				'pieces_num' => array(
					'type' => Schema::DT_INT
				),
				'discovered_num' => array(
					'type' => Schema::DT_INT
				),
				'funds_collected' => array(
					'type' => Schema::DT_FLOAT
				),
				'funds_goal' => array(
					'type' => Schema::DT_FLOAT
				),
				'pieces' => array(
					'has-many' => array('PiecesModel', 'mosaic_id')
				)
			);
	}
