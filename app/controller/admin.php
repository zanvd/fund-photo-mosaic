<?php
	namespace Controller;

	class Admin extends \Controller {
		public function __construct() {
			$funmos = \Base::instance();
		}

		protected function _render($file, $mime="text/html",
				array $hive = null, $ttl = 0) {
			$funmos = \Base::instance();

			$funmos->set('content', $file);

			echo \Template::instance()->render($this->layout, $mime, $hive, $ttl);
		}
	}
