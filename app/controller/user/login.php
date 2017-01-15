<?php
	namespace Controller\User;

	use \Controller\Utility\Security as Security;

	class Login extends \Controller\User {

		const login_error = 'Napačno uporabniško ime ali geslo.';

		public function get ($funmos, $params) {
			$funmos->set('loginpage', true);

			$this->_render('user/login.html');
		}

		public function post ($funmos, $params) {
			// TODO: Validate given values.
			$post = array_map('trim', $funmos->get('POST'));

			// Retrieve user with given username.
			$user = new \Model\UserModel();
			$user = $user->load(array("username = ?", $post['username']));
			if (!$user->user_id) {
				$funmos->set('loginpage', true);
				$funmos->set('error', $this->login_error);
				$this->_render('user/login.html');
			} else {
				// Check for correct password.
				$sec = new Security();
				if ($sec->verify($user->password, $post['password'])) {
					$funmos->set('SESSION.user_id', $user->user_id);
					$funmos->reroute('/');
				} else {
					$funmos->set('loginpage', true);
					$funmos->set('error', $this->login_error);
					$this->_render('user/login.html');
				}
			}
		}
	}
