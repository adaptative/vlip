<div class="physicalProfiles form">
<?php echo $this->Form->create('PhysicalProfile'); ?>
	<fieldset>
		<legend><?php echo __('Add Physical Profile'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('hair_color');
		echo $this->Form->input('length');
		echo $this->Form->input('eyes_color');
		echo $this->Form->input('body_hight');
		echo $this->Form->input('your_type');
		echo $this->Form->input('face');
		echo $this->Form->input('breast');
		echo $this->Form->input('belly');
		echo $this->Form->input('legs');
		echo $this->Form->input('feet');
		echo $this->Form->input('hair');
		echo $this->Form->input('back');
		echo $this->Form->input('bottom');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Physical Profiles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
