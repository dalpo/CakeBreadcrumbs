<?php

class BreadcrumbHelper extends AppHelper {

	protected $_defaultOptions = array(
		'plugin' => 'CakeBreadcrumbs'
	);

	protected $_defaultData = array(
		'scope' => 'default'
	);
	
	public function render($data = array(), $options = array()) {
		$options = array_merge($this->_defaultOptions, $options);
		$data = array_merge($this->_defaultData, $data);

		return $this->_View->element("breadcrumbs", $data, $options);
	}
	
}