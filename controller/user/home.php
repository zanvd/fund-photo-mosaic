<?php
	namespace Controller\User;

	class Home extends User {
		public function main ($funmos, $params) {
			$this->_render('user/index.html');
		}
	}
