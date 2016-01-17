<?php
App::uses('Dmolo', 'Model');

/**
 * Dmolo Test Case
 *
 */
class DmoloTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dmolo',
		'app.dml_type',
		'app.layout_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dmolo = ClassRegistry::init('Dmolo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dmolo);

		parent::tearDown();
	}

}
