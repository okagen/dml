<?php
App::uses('LayoutType', 'Model');

/**
 * LayoutType Test Case
 *
 */
class LayoutTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.layout_type',
		'app.dmolo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LayoutType = ClassRegistry::init('LayoutType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LayoutType);

		parent::tearDown();
	}

}
