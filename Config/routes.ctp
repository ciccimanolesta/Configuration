<?php


/**
 * Settings using webtechnick Configuration
 */
Router::connect('/admin/settings/:action/*', array('prefix' => 'admin', 'plugin' => 'Configuration', 'controller' => 'configurations'));
Router::connect('/admin/settings/*', array('prefix' => 'admin', 'plugin' => 'Configuration', 'controller' => 'configurations', 'action' => 'index'));