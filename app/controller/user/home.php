<?php
	namespace Controller\User;

	class Home extends \Controller\User {
		public function get ($funmos, $params) {
			$this->_render('user/index.html');
		}
	}
