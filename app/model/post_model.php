<?php
	namespace Model;

	use \DB\SQL\Schema as Schema;

	class PostModel extends \Model {
		protected
			$db			= 'DB',
			$table		= 'Post',
			$primary	= 'post_id'
			$fieldConf	= array(
				'post_id' => array (
					'type'	=> Schema::DT_INT
				),
				'date_created' => array (
					'type' => Schema::DT_DATETIME
				),
				'date_modified' => array (
					'type' => Schema::DT_DATETIME
				),
				'post_title' => array(
					'type' => Schema::DT_VARCHAR256
				),
				'content' => array(
					'type' => Schema::DT_TEXT
				),
				'user_id' => array(
					'belongs-to-one' => 'UserModel'
				)
			);
	}
