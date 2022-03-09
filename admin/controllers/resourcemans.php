<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_resourcemanager
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * ResourceMans Controller
 */

class ResourceManControllerResourceMans extends JControllerAdmin
{
	/**
	 * Proxy for getModel.
	 *
	 * @param   string  $name    The model name. Optional.
	 * @param   string  $prefix  The class prefix. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  object  The model.
	 */

	public function getModel($name = 'ResourceMan', $prefix = 'ResourceManModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}
}