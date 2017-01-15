<?php
	namespace Model;

	use \DB\SQL\Schema as Schema;

	class PostModel extends \Model {
		protected
			$db			= 'DB',
			$table		= 'Post',
			$primary	= 'post_id',
			$fieldConf	= array(
				'post_id' => array (
					'type'	=> Schema::DT_INT,
					'nullable' => false
				),
				'date_created' => array (
					'type' => Schema::DT_DATETIME,
					'nullable' => false
				),
				'date_modified' => array (
					'type' => Schema::DT_DATETIME,
					'nullable' => false
				),
				'post_title' => array(
					'type' => Schema::DT_VARCHAR256,
					'nullable' => false
				),
				'content' => array(
					'type' => Schema::DT_TEXT,
					'nullable' => false
				),
				'user_id' => array(
					'belongs-to-one' => 'UserModel',
					'nullable' => false
				)
			);
	}
