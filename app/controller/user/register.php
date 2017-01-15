<?php
	namespace Controller\User;

	class Register extends User {
		public function get ($funmos, $params) {
			$this->_render('user/register.html');
		}

		public function post ($funmos, $params) {
			$user = new \Model\UserModel();

			error_log(var_dump($user));
			$this->_render('user/index.html');
		}
	}
