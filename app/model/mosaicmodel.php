<?php
	namespace Model;

	use \DB\SQL\Schema as Schema;

	class MosaicModel extends \Model {
		protected
			$db			= 'DB',
			$table		= 'Mosaic',
			$primary	= 'mosaic_id',
			$fieldConf	= array(
				'mosaic_id' => array (
					'type'	=> Schema::DT_INT,
					'nullable' => false
				),
				'mosaic_title' => array(
					'type' => Schema::DT_VARCHAR128,
					'nullable' => false
				),
				'description' => array(
					'type' => Schema::DT_TEXT,
					'nullable' => false
				),
				'path' => array(
					'type' => Schema::DT_VARCHAR128,
					'nullable' => false
				),
				'pieces_num' => array(
					'type' => Schema::DT_INT,
					'nullable' => false
				),
				'discovered_num' => array(
					'type' => Schema::DT_INT,
					'nullable' => false
				),
				'funds_collected' => array(
					'type' => Schema::DT_FLOAT,
					'nullable' => false
				),
				'funds_goal' => array(
					'type' => Schema::DT_FLOAT,
					'nullable' => false
				),
				'pieces' => array(
					'has-many' => array('\Model\PieceModel', 'mosaic_id')
				)
			);

		/**
		 * Retrieve all mosaic ID's with ascending order.
		 * @return array
		 */
		public function get_all_ids () {
			$this->fields(array('mosaic_id'));
			return $this->afind(null, array('order' => 'mosaic_id ASC'));
		}
	}
