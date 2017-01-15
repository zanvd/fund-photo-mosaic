<?php
	namespace Model;

	use \DB\SQL\Schema as Schema;

	class SaltyModel extends \Model {
		protected
			$db			= 'DB',
			$table		= 'Salty',
			$primary	= 's_id',
			$fieldConf	= array(
				's_id' => array (
					'type'	=> Schema::DT_INT,
					'nullable' => false
				),
				'value' => array(
					'type' => Schema::DT_VARCHAR256,
					'nullable' => false
				),
				'user_id' => array(
					'belongs-to-one' => 'UserModel',
					'nullable' => false
				)
			);

		/**
		 * Insert new salt.
		 * @params mixed $data
		 * @return array(bool error, message)
		 */
		public function insert_salty ($data) {
			try {
				$this->value   = $data['value'];
				$this->user_id = $data['user_id'];

				$this->save();
				return array (
					'error'   => false,
					'message' => ''
				);
			} catch (Exception $e) {
				return array(
					'error'   => true,
					'message' => $e->getMessage()
				);
			}
		}
	}
