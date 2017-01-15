<?php
	namespace Controller\User;

	class Login extends User {
		public function get ($funmos, $params) {
			$funmos->set('loginpage', true);

			$this->_render('user/login.html');
		}
	}
