<?php
/* Configuration Fixture generated on: 2011-11-21 01:11:51 : 1321840131 */
class ConfigurationFixture extends CakeTestFixture {
/**
 * Name
 *
 * @var string $name
 * @access public
 */
	public $name = 'Configuration';

/**
 * Import table name
 *
 * @var string $import
 * @access public
 */
	public $import = array('model' => 'Configuration', 'records' => true);



/**
 * Records
 *
 * @var array $records
 * @access public
 */
	public $records = array(
		array(
			'id' => '2',
			'name' => 'testing',
			'value' => 'twoThings,anotherOne'
		),
		array(
			'id' => '3',
			'name' => 'testNothing',
			'value' => ''
		),
		array(
			'id' => '4',
			'name' => 'blankAndEdited',
			'value' => 'three'
		),
	);

}
?>