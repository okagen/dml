<?php
/**
 * DmoloFixture
 *
 */
class DmoloFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'dml_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'layout_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'person_num' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'note' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'file_dwg' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'file_quotation' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'file_image_0' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'file_image_1' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'file_image_2' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'file_image_3' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'file_thumbnail_0' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'file_thumbnail_1' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'file_thumbnail_2' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'file_thumbnail_3' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'dml_type_id' => 1,
			'layout_type_id' => 1,
			'person_num' => 1,
			'note' => 'Lorem ipsum dolor sit amet',
			'file_dwg' => 'Lorem ipsum dolor sit amet',
			'file_quotation' => 'Lorem ipsum dolor sit amet',
			'file_image_0' => 'Lorem ipsum dolor sit amet',
			'file_image_1' => 'Lorem ipsum dolor sit amet',
			'file_image_2' => 'Lorem ipsum dolor sit amet',
			'file_image_3' => 'Lorem ipsum dolor sit amet',
			'file_thumbnail_0' => 'Lorem ipsum dolor sit amet',
			'file_thumbnail_1' => 'Lorem ipsum dolor sit amet',
			'file_thumbnail_2' => 'Lorem ipsum dolor sit amet',
			'file_thumbnail_3' => 'Lorem ipsum dolor sit amet'
		),
	);

}
