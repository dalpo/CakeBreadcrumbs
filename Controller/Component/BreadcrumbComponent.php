<?php

class BreadcrumbComponent extends Component {

  protected $_defaultOptions = array(
    'scope' => 'default'
  );

  protected $_breadCrumbs = array(
    'default' => array()
  );

  public function initialize(Controller $controller) {
    $this->_Controller = $controller;
  }

  public function add($name = null, $url = null, $options = array()) {
    $options = array_merge($this->_defaultOptions, $options);

    if(!$this->_breadCrumbs[$options['scope']]) {
      $this->_breadCrumbs[$options['scope']] = array();
    }

    $this->_breadCrumbs[$options['scope']][$name] = $url;
    $this->_Controller->set('breadcrumbs', $this->_breadCrumbs);
  }

}
