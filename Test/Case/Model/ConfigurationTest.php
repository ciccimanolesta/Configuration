<?php
/* Configuration Test cases generated on: 2011-11-21 01:11:19 : 1321840159*/
App::import('Model', 'Configuration.Configuration');

class ConfigurationTestCase extends CakeTestCase {
	public $fixtures = array('plugin.configuration.configuration');

	public function startTest() {
		$this->Configuration = ClassRegistry::init('Configuration');
	}

	public function endTest() {
		unset($this->Configuration);
		ClassRegistry::flush();
	}

	public function testLoad() {
		$this->Configuration->load();
		$result = Configure::read("CFG");
		$expected = array(
			'testing' => 'twoThings,anotherOne',
			'testNothing' => '',
			'blankAndEdited' => 'three'
		);
		
		$this->assertEquals($expected, $result);
	}

	public function testLoadNamed() {
		$this->Configuration->load('Site');
		$result = Configure::read("Site");
		$expected = array(
			'testing' => 'twoThings,anotherOne',
			'testNothing' => '',
			'blankAndEdited' => 'three'
		);
		
		$this->assertEquals($expected, $result);
	}

}
?>