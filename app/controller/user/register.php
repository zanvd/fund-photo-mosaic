<?php
	namespace Controller\User;

	use \Controller\Utility\Security as Security;

	class Register extends \Controller\User {
		public function get ($funmos, $params) {
			$this->_render('user/register.html');
		}

		public function post ($funmos, $params) {
			//TODO: Validate given values.
			$post = array_map('trim', $funmos->get('POST'));

			// Insert new donor.
			$donor = new \Model\DonorModel();
			$ret = $donor->insert_donor($post);

			if ($ret['error']) {
				$funmos->set('error', $ret['message']);
			} else {
				// Generate hash.
				$sec = new Security();
				$pass = $sec->hash($post['password']);
				if (!strlen($pass['salt']) > 0 || !strlen($pass['hash']) > 0) {
					$funmos->set('error', 'Napaka pri obdelavi zahteve.');
				} else {
					$post['password'] = $pass['hash'];
					$post['donor_id'] = $donor->donor_id;

					// Insert new user.
					$user = new \Model\UserModel();
					$ret = $user->insert_user($post);

					if ($ret['error']) {
						$funmos->set('error', $ret['message']);
					} else {
						// Insert salt for coresponding user.
						$salty = new \Model\SaltyModel();
						$ret = $salty->insert_salty(array(
							'value'   => $pass['salt'],
							'user_id' => $user->user_id
						));

						if($ret['error']) {
							$funmos->set('error', $ret['message']);
						}
					}
				}
			}

			$this->_render('user/register.html');
		}
	}
