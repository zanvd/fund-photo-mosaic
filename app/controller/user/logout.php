<?php
	namespace Controller\User;

	class Logout extends \Controller\User {

		public function get ($funmos, $params) {
			if ($funmos->exists('SESSION.user_id'))
				$funmos->clear('SESSION.user_id');
			$funmos->reroute('/');
		}
	}
