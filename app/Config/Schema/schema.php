<?php 
class AppSchema extends CakeSchema {

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}


	public $dml_types = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	public $layout_types = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);


	public $dmolos = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'dml_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'layout_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'person_num' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'price' => array('type' => 'double', 'null' => true, 'default' => null, 'unsigned' => false),
		'total_size_w' => array('type' => 'double', 'true' => false, 'default' => null, 'unsigned' => false),
		'total_size_d' => array('type' => 'double', 'true' => false, 'default' => null, 'unsigned' => false),
		'note' => array('type' => 'string', 'null' => true, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'file_dwg' => array('type' => 'string', 'null' => true, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'file_quotation' => array('type' => 'string', 'null' => true, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'file_image_0' => array('type' => 'string', 'null' => true, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'file_image_1' => array('type' => 'string', 'null' => true, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'file_image_2' => array('type' => 'string', 'null' => true, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'file_image_3' => array('type' => 'string', 'null' => true, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'file_thumbnail_0' => array('type' => 'string', 'null' => true, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'file_thumbnail_1' => array('type' => 'string', 'null' => true, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'file_thumbnail_2' => array('type' => 'string', 'null' => true, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'file_thumbnail_3' => array('type' => 'string', 'null' => true, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	public $notifications = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'message' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	public $users = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

}
