<?php
	namespace Controller\User;

	class Mosaic extends \Controller\User {
		public function get ($funmos, $params) {
			$this->_render('user/mosaic.html');
		}
	}
