<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_resourcemanager
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * ResourceMan Table class
 */

class ResourceManTableResourceMan extends JTable
{
	/**
	 * Constructor
	 *
	 * @param   JDatabaseDriver  &$db  A database connector object
	 */
	function __construct(&$db)
	{
		parent::__construct('#__resourceman', 'id', $db);
	}
}