<?php
	namespace Controller\User;

	class Contact extends \Controller\User {
		public function get ($funmos, $params) {
			$this->_render('user/contact.html');
		}
	}
