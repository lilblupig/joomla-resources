<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_resourcemanager
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * ResourceMan View
 */

class ResourceManViewResourceMan extends JViewLegacy
{
	/**
	 * View form
	 *
	 * @var         form
	 */
	protected $form = null;

	/**
	 * Display the ResourceMan view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */

	public function display($tpl = null)
	{
		// Get the Data
		$this->form = $this->get('Form');
		$this->item = $this->get('Item');

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));

			return false;
		}


		// Set the toolbar
		$this->addToolBar();

		// Display the template
		parent::display($tpl);
	}

	/**
	 * Add the page title and toolbar.
	 *
	 * @return  void
	 *
	 * @since   1.6
	 */
	protected function addToolBar()
	{
		$input = JFactory::getApplication()->input;

		// Hide Joomla Administrator Main menu
		$input->set('hidemainmenu', true);

		$isNew = ($this->item->id == 0);

		if ($isNew)
		{
			$title = JText::_('COM_RESOURCEMAN_MANAGER_RESOURCEMAN_NEW');
		}
		else
		{
			$title = JText::_('COM_RESOURCEMAN_MANAGER_RESOURCEMAN_EDIT');
		}

		JToolbarHelper::title($title, 'resourceman');
		JToolbarHelper::save('resourceman.save');
		JToolbarHelper::cancel(
			'resourceman.cancel',
			$isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE'
		);
	}
}