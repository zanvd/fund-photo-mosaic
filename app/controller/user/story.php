<?php
	namespace Controller\User;

	class Story extends \Controller\User {
		public function get ($funmos, $params) {
			$this->_render('user/story.html');
		}
	}
