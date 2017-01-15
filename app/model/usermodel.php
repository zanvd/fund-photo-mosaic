<?php
	namespace Model;

	use \DB\SQL\Schema as Schema;

	class UserModel extends \Model {
		protected
			$db			= 'DB',
			$table		= 'User',
			$primary	= 'user_id',
			$fieldConf	= array(
				'user_id' => array (
					'type'	=> Schema::DT_INT,
					'nullable' => false
				),
				'username' => array(
					'type' => Schema::DT_VARCHAR128,
					'nullable' => false
				),
				'email' => array(
					'type' => Schema::DT_VARCHAR128,
					'nullable' => false
				),
				'password' => array(
					'type' => Schema::DT_VARCHAR128,
					'nullable' => false
				),
				'administrator' => array(
					'type' => Schema::DT_BOOL,
					'nullable' => false,
					'default' => 0
				),
				'donor_id' => array(
					'belongs-to-one' => 'DonorModel'
				),
				'salty' => array(
					'has-one' => array('SaltyModel', 's_id')
				)
			);

		/**
		 * Insert new user.
		 * @params mixed $data
		 * @return array(bool error, message)
		 */
		public function insert_user ($data) {
			try {
				$this->username			= $data['username'];
				$this->email			= $data['email'];
				$this->password			= $data['password'];
				if ($data['administrator'])
					$this->administrator	= $data['administrator'];
				$this->donor_id			= $data['donor_id'];

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
