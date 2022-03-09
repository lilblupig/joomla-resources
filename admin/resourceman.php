<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_resourceman
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Get an instance of the controller prefixed by ResourceMan
$controller = JControllerLegacy::getInstance('ResourceMan');

// Perform the Request task
$controller->execute(JFactory::getApplication()->input->get('task'));

// Redirect if set by the controller
$controller->redirect();