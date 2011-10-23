<?php

class BreadcrumbComponent extends Component {

	protected $_defaultOptions = array(
		'key' => 'default'
	);

	protected $_breadCrumbs = array(
		'default' => array()
	);
	
	public function add($name => null, $url => null, $options => array()) {
		$options = array_merge($this->_defaultOptions, $options);
		$this->_breadCrumbs[$options['key']][$name] = $ur;
	}
	
	public function beforeRender($controller) {
		$controller->set($breadcrumbs, $this->_breadCrumbs);
	}
	
}