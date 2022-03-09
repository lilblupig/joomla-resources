<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_resourcemanager
 * 
 * View for admin table display
 * 
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<form action="index.php?option=com_resourceman&view=resourcemans" method="post" id="adminForm" name="adminForm">
	<table class="table table-striped table-hover">
		<thead>
		<tr>
			<th width="1%"><?php echo JText::_('COM_RESOURCEMAN_NUM'); ?></th>
			<th width="2%">
				<?php echo JHtml::_('grid.checkall'); ?>
			</th>
			<th width="15%">
				<?php echo JText::_('COM_RESOURCEMAN_RESOURCEMANS_TITLE') ;?>
			</th>
			<th width="10%">
				<?php echo JText::_('COM_RESOURCEMAN_RESOURCEMANS_BOROUGH') ;?>
			</th>
			<th width="10%">
				<?php echo JText::_('COM_RESOURCEMAN_RESOURCEMANS_FOR') ;?>
			</th>
			<th width="15%">
				<?php echo JText::_('COM_RESOURCEMAN_RESOURCEMANS_IMGPATH') ;?>
			</th>
			<th width="20%">
				<?php echo JText::_('COM_RESOURCEMAN_RESOURCEMANS_IMGALT') ;?>
			</th>
			<th width="20%">
				<?php echo JText::_('COM_RESOURCEMAN_RESOURCEMANS_RESOURCEURL') ;?>
			</th>
			<th width="5%">
				<?php echo JText::_('COM_RESOURCEMAN_PUBLISHED'); ?>
			</th>
			<th width="2%">
				<?php echo JText::_('COM_RESOURCEMAN_ID'); ?>
			</th>
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="5">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
				<?php foreach ($this->items as $i => $row) :
					$link = JRoute::_('index.php?option=com_resourceman&task=resourceman.edit&id=' . $row->id);
				?>
					<tr>
						<td>
							<?php echo $this->pagination->getRowOffset($i); ?>
						</td>
						<td>
							<?php echo JHtml::_('grid.id', $i, $row->id); ?>
						</td>
						<td>
							<a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_RESOURCEMAN_EDIT_RESOURCEMAN'); ?>">
								<?php echo $row->title; ?>
							</a>
						</td>
						<td>
							<?php echo $row->borough; ?>
						</td>
						<td>
							<?php echo $row->for; ?>
						</td>
						<td>
							<?php echo $row->img_path; ?>
						</td>
						<td>
							<?php echo $row->img_alt; ?>
						</td>
						<td>
							<?php echo $row->resource_url; ?>
						</td>
						<td align="center">
							<?php echo JHtml::_('jgrid.published', $row->published, $i, 'resourcemans.', true, 'cb'); ?>
						</td>
						<td align="center">
							<?php echo $row->id; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
	<input type="hidden" name="task" value=""/>
	<input type="hidden" name="boxchecked" value="0"/>
	<?php echo JHtml::_('form.token'); ?>
</form>