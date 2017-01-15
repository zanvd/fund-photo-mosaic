<?php
	namespace Controller;

	class User extends \Controller {
		public function __construct() {
			$funmos = \Base::instance();
		}

		protected function _render($file, $mime='text/html',
				array $hive = null, $ttl = 0) {
			$funmos = \Base::instance();

			//Load up mosaics for navigation menu.
			$mosaics = new \Model\MosaicModel();
			$mosaics = $mosaics->get_all_ids();

			error_log(print_r($mosaics, true));

			$funmos->set('mosaics', $mosaics);

			$funmos->set('content', $file);

			echo \Template::instance()->render($this->layout, $mime, $hive, $ttl);
		}
	}
