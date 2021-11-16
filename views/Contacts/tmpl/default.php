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
				<?php echo JText::_('Name') ;?>
			</th>
                            <th width="10%">
				<?php echo JText::_('Company name') ;?>
			</th>
                        <th width="10%">
				<?php echo JText::_('email') ;?>
			</th>
                        <th width="10%">
				<?php echo JText::_('phone') ;?>
			</th>
                        <th width="10%">
				<?php echo JText::_('zip_code') ;?>
			</th>
                        <th width="10%">
				<?php echo JText::_('address') ;?>
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
                    $link = JRoute::_('index.php?option=com_twins&task=contact.edit&id=' . $row->id);
                                ?>

					<tr>
						<td>
							<?php echo $this->pagination->getRowOffset($i); ?>
						</td>
						<td>
							<?php echo JHtml::_('grid.id', $i, $row->id); ?>
						</td>
						<td>
                                                    <a href="<?php echo $link; ?>" title="<?php echo JText::_('Edit contact'); ?>">
							<?php echo $row->name; ?>
						</td>
                                                 <td>
							<?php echo $row->company_id; ?>
						</td>
                                                <td>
							<?php echo $row->email; ?>
						</td>
                                                <td>
							<?php echo $row->phone; ?>
						</td>
                                                <td>
							<?php echo $row->zip_code; ?>
						</td>
                                                <td>
							<?php echo $row->address; ?>
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