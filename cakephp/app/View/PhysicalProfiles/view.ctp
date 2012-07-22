<div class="physicalProfiles view">
<h2><?php  echo __('Physical Profile'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($physicalProfile['PhysicalProfile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($physicalProfile['User']['id'], array('controller' => 'users', 'action' => 'view', $physicalProfile['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hair Color'); ?></dt>
		<dd>
			<?php echo h($physicalProfile['PhysicalProfile']['hair_color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Length'); ?></dt>
		<dd>
			<?php echo h($physicalProfile['PhysicalProfile']['length']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eyes Color'); ?></dt>
		<dd>
			<?php echo h($physicalProfile['PhysicalProfile']['eyes_color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body Hight'); ?></dt>
		<dd>
			<?php echo h($physicalProfile['PhysicalProfile']['body_hight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Your Type'); ?></dt>
		<dd>
			<?php echo h($physicalProfile['PhysicalProfile']['your_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Face'); ?></dt>
		<dd>
			<?php echo h($physicalProfile['PhysicalProfile']['face']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Breast'); ?></dt>
		<dd>
			<?php echo h($physicalProfile['PhysicalProfile']['breast']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Belly'); ?></dt>
		<dd>
			<?php echo h($physicalProfile['PhysicalProfile']['belly']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Legs'); ?></dt>
		<dd>
			<?php echo h($physicalProfile['PhysicalProfile']['legs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Feet'); ?></dt>
		<dd>
			<?php echo h($physicalProfile['PhysicalProfile']['feet']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hair'); ?></dt>
		<dd>
			<?php echo h($physicalProfile['PhysicalProfile']['hair']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Back'); ?></dt>
		<dd>
			<?php echo h($physicalProfile['PhysicalProfile']['back']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bottom'); ?></dt>
		<dd>
			<?php echo h($physicalProfile['PhysicalProfile']['bottom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($physicalProfile['PhysicalProfile']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($physicalProfile['PhysicalProfile']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Physical Profile'), array('action' => 'edit', $physicalProfile['PhysicalProfile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Physical Profile'), array('action' => 'delete', $physicalProfile['PhysicalProfile']['id']), null, __('Are you sure you want to delete # %s?', $physicalProfile['PhysicalProfile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Physical Profiles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Physical Profile'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
