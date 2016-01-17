<?php
App::uses('DmlType', 'Model');

/**
 * DmlType Test Case
 *
 */
class DmlTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dml_type',
		'app.dmolo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DmlType = ClassRegistry::init('DmlType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DmlType);

		parent::tearDown();
	}

}
