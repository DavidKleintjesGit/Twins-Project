<?php defined('_JEXEC') or die('Restricted access');



?>


				
<form action="index.php?option=com_twins&view=twins" method="post" id="adminForm" name="adminForm">
	<table class="table table-striped table-hover">
		<thead>
		<tr>
			<th width="1%"><?php echo JText::_('ID'); ?></th>
			<th width="2%">
				<?php echo JHtml::_('grid.checkall'); ?>
			</th>
			<th width="15%">
				<?php echo JText::_('NAME') ;?>
			</th>
                            <th width="10%">
				<?php echo JText::_('EMAIL') ;?>
			</th>
                        <th width="10%">
				<?php echo JText::_('NUMBER') ;?>
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
                    $link = JRoute::_('index.php?option=com_twins&task=blank.edit&id=' . $row->id);
                                ?>

					<tr>
						<td>
							<?php echo $this->pagination->getRowOffset($i); ?>
						</td>
						<td>
							<?php echo JHtml::_('grid.id', $i, $row->id); ?>
						</td>
						<td>
                                                    <a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_TWINS_EDIT_BLANK'); ?>">
							<?php echo $row->company; ?>
						</td>
                                                 <td>
							<?php echo $row->email; ?>
						</td>
                                                <td>
							<?php echo $row->phone; ?>
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