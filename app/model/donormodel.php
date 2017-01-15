<?php
	namespace Model;

	use \DB\SQL\Schema as Schema;

	class DonorModel extends \Model {
		protected
			$db			= 'DB',
			$table		= 'Donor',
			$primary	= 'donor_id',
			$fieldConf	= array(
				'donor_id' => array (
					'type'	=> Schema::DT_INT,
					'nullable' => false
				),
				'f_name' => array(
					'type' => Schema::DT_VARCHAR128,
					'nullable' => false
				),
				'l_name' => array(
					'type' => Schema::DT_VARCHAR128,
					'nullable' => false
				),
				'user_id' => array(
					'has-one' => array('UserModel', 'donor_id')
				),
				'piece_donor' => array(
					'has-one' => array('PieceDonorModel', 'donor_id')
				)
			);

		/**
		 * Insert new donor.
		 * @params mixed $data
		 * @return array(bool error, message)
		 */
		public function insert_donor ($data) {
			try {
				$this->f_name = $data['f_name'];
				$this->l_name = $data['l_name'];

				$this->save();
				return array(
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
