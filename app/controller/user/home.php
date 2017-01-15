<?php
	namespace Controller\User;

	use Controller\User;

	class Home extends User {
		public function get ($funmos, $params) {
			$this->_render('user/index.html');
		}
	}
