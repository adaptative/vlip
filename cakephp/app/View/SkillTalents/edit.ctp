<div class="skillTalents form">
<?php echo $this->Form->create('SkillTalent'); ?>
	<fieldset>
		<legend><?php echo __('Edit Skill Talent'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('posing');
		echo $this->Form->input('dancing');
		echo $this->Form->input('walking');
		echo $this->Form->input('acting');
		echo $this->Form->input('exceptional_skills');
		echo $this->Form->input('people_say');
		echo $this->Form->input('special_talent');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SkillTalent.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SkillTalent.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Skill Talents'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
