<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('email');
		echo $this->Form->input('status');
		echo $this->Form->input('featured');
		echo $this->Form->input('address');
		echo $this->Form->input('phone');
		echo $this->Form->input('mobile');
		echo $this->Form->input('facebookid');
		echo $this->Form->input('twitter');
		echo $this->Form->input('linkedin');
		echo $this->Form->input('googleplus');
		echo $this->Form->input('myspace');
		echo $this->Form->input('youtube');
		echo $this->Form->input('fname');
		echo $this->Form->input('lname');
		echo $this->Form->input('birthday');
		echo $this->Form->input('city');
		echo $this->Form->input('country');
		echo $this->Form->input('nationality');
		echo $this->Form->input('gender');
		echo $this->Form->input('Role');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Physical Profiles'), array('controller' => 'physical_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Physical Profile'), array('controller' => 'physical_profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Skill Talents'), array('controller' => 'skill_talents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill Talent'), array('controller' => 'skill_talents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
