<?php

class ToolbarHelper extends AppHelper {

	protected $_defaultOptions = array(
		'key' => 'default'
	);
	
	public function render(options => array()) {
		$View =& ClassRegistry::getObject('view');
		$View->element("breadcrumbs", array('plugin' => 'CakeBreadcrumbs'));
	}
	
}