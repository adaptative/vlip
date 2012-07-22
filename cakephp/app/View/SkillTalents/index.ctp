<div class="skillTalents index">
	<h2><?php echo __('Skill Talents'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('posing'); ?></th>
			<th><?php echo $this->Paginator->sort('dancing'); ?></th>
			<th><?php echo $this->Paginator->sort('walking'); ?></th>
			<th><?php echo $this->Paginator->sort('acting'); ?></th>
			<th><?php echo $this->Paginator->sort('exceptional_skills'); ?></th>
			<th><?php echo $this->Paginator->sort('people_say'); ?></th>
			<th><?php echo $this->Paginator->sort('special_talent'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($skillTalents as $skillTalent): ?>
	<tr>
		<td><?php echo h($skillTalent['SkillTalent']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($skillTalent['User']['id'], array('controller' => 'users', 'action' => 'view', $skillTalent['User']['id'])); ?>
		</td>
		<td><?php echo h($skillTalent['SkillTalent']['posing']); ?>&nbsp;</td>
		<td><?php echo h($skillTalent['SkillTalent']['dancing']); ?>&nbsp;</td>
		<td><?php echo h($skillTalent['SkillTalent']['walking']); ?>&nbsp;</td>
		<td><?php echo h($skillTalent['SkillTalent']['acting']); ?>&nbsp;</td>
		<td><?php echo h($skillTalent['SkillTalent']['exceptional_skills']); ?>&nbsp;</td>
		<td><?php echo h($skillTalent['SkillTalent']['people_say']); ?>&nbsp;</td>
		<td><?php echo h($skillTalent['SkillTalent']['special_talent']); ?>&nbsp;</td>
		<td><?php echo h($skillTalent['SkillTalent']['created']); ?>&nbsp;</td>
		<td><?php echo h($skillTalent['SkillTalent']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $skillTalent['SkillTalent']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $skillTalent['SkillTalent']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $skillTalent['SkillTalent']['id']), null, __('Are you sure you want to delete # %s?', $skillTalent['SkillTalent']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Skill Talent'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
