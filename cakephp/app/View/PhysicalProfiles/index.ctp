<div class="physicalProfiles index">
	<h2><?php echo __('Physical Profiles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hair_color'); ?></th>
			<th><?php echo $this->Paginator->sort('length'); ?></th>
			<th><?php echo $this->Paginator->sort('eyes_color'); ?></th>
			<th><?php echo $this->Paginator->sort('body_hight'); ?></th>
			<th><?php echo $this->Paginator->sort('your_type'); ?></th>
			<th><?php echo $this->Paginator->sort('face'); ?></th>
			<th><?php echo $this->Paginator->sort('breast'); ?></th>
			<th><?php echo $this->Paginator->sort('belly'); ?></th>
			<th><?php echo $this->Paginator->sort('legs'); ?></th>
			<th><?php echo $this->Paginator->sort('feet'); ?></th>
			<th><?php echo $this->Paginator->sort('hair'); ?></th>
			<th><?php echo $this->Paginator->sort('back'); ?></th>
			<th><?php echo $this->Paginator->sort('bottom'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($physicalProfiles as $physicalProfile): ?>
	<tr>
		<td><?php echo h($physicalProfile['PhysicalProfile']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($physicalProfile['User']['id'], array('controller' => 'users', 'action' => 'view', $physicalProfile['User']['id'])); ?>
		</td>
		<td><?php echo h($physicalProfile['PhysicalProfile']['hair_color']); ?>&nbsp;</td>
		<td><?php echo h($physicalProfile['PhysicalProfile']['length']); ?>&nbsp;</td>
		<td><?php echo h($physicalProfile['PhysicalProfile']['eyes_color']); ?>&nbsp;</td>
		<td><?php echo h($physicalProfile['PhysicalProfile']['body_hight']); ?>&nbsp;</td>
		<td><?php echo h($physicalProfile['PhysicalProfile']['your_type']); ?>&nbsp;</td>
		<td><?php echo h($physicalProfile['PhysicalProfile']['face']); ?>&nbsp;</td>
		<td><?php echo h($physicalProfile['PhysicalProfile']['breast']); ?>&nbsp;</td>
		<td><?php echo h($physicalProfile['PhysicalProfile']['belly']); ?>&nbsp;</td>
		<td><?php echo h($physicalProfile['PhysicalProfile']['legs']); ?>&nbsp;</td>
		<td><?php echo h($physicalProfile['PhysicalProfile']['feet']); ?>&nbsp;</td>
		<td><?php echo h($physicalProfile['PhysicalProfile']['hair']); ?>&nbsp;</td>
		<td><?php echo h($physicalProfile['PhysicalProfile']['back']); ?>&nbsp;</td>
		<td><?php echo h($physicalProfile['PhysicalProfile']['bottom']); ?>&nbsp;</td>
		<td><?php echo h($physicalProfile['PhysicalProfile']['created']); ?>&nbsp;</td>
		<td><?php echo h($physicalProfile['PhysicalProfile']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $physicalProfile['PhysicalProfile']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $physicalProfile['PhysicalProfile']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $physicalProfile['PhysicalProfile']['id']), null, __('Are you sure you want to delete # %s?', $physicalProfile['PhysicalProfile']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Physical Profile'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
