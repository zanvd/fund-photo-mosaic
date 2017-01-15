<?php
	abstract class Model extends \DB\Cortex {
		protected $table, $db, $fieldConf;
		protected $fluid_mode = false;

		function __construct($table_name = null) {
			$funmos = \Base::instance();
			$this->db = 'DB';
			parent::__construct();
		}
	}
