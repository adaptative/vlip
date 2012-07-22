<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($user['User']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Featured'); ?></dt>
		<dd>
			<?php echo h($user['User']['featured']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($user['User']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($user['User']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile'); ?></dt>
		<dd>
			<?php echo h($user['User']['mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebookid'); ?></dt>
		<dd>
			<?php echo h($user['User']['facebookid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Twitter'); ?></dt>
		<dd>
			<?php echo h($user['User']['twitter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Linkedin'); ?></dt>
		<dd>
			<?php echo h($user['User']['linkedin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Googleplus'); ?></dt>
		<dd>
			<?php echo h($user['User']['googleplus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Myspace'); ?></dt>
		<dd>
			<?php echo h($user['User']['myspace']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Youtube'); ?></dt>
		<dd>
			<?php echo h($user['User']['youtube']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fname'); ?></dt>
		<dd>
			<?php echo h($user['User']['fname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lname'); ?></dt>
		<dd>
			<?php echo h($user['User']['lname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthday'); ?></dt>
		<dd>
			<?php echo h($user['User']['birthday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($user['User']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($user['User']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nationality'); ?></dt>
		<dd>
			<?php echo h($user['User']['nationality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($user['User']['gender']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Physical Profiles'), array('controller' => 'physical_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Physical Profile'), array('controller' => 'physical_profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Skill Talents'), array('controller' => 'skill_talents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill Talent'), array('controller' => 'skill_talents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Physical Profiles'); ?></h3>
	<?php if (!empty($user['PhysicalProfile'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Hair Color'); ?></th>
		<th><?php echo __('Length'); ?></th>
		<th><?php echo __('Eyes Color'); ?></th>
		<th><?php echo __('Body Hight'); ?></th>
		<th><?php echo __('Your Type'); ?></th>
		<th><?php echo __('Face'); ?></th>
		<th><?php echo __('Breast'); ?></th>
		<th><?php echo __('Belly'); ?></th>
		<th><?php echo __('Legs'); ?></th>
		<th><?php echo __('Feet'); ?></th>
		<th><?php echo __('Hair'); ?></th>
		<th><?php echo __('Back'); ?></th>
		<th><?php echo __('Bottom'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['PhysicalProfile'] as $physicalProfile): ?>
		<tr>
			<td><?php echo $physicalProfile['id']; ?></td>
			<td><?php echo $physicalProfile['user_id']; ?></td>
			<td><?php echo $physicalProfile['hair_color']; ?></td>
			<td><?php echo $physicalProfile['length']; ?></td>
			<td><?php echo $physicalProfile['eyes_color']; ?></td>
			<td><?php echo $physicalProfile['body_hight']; ?></td>
			<td><?php echo $physicalProfile['your_type']; ?></td>
			<td><?php echo $physicalProfile['face']; ?></td>
			<td><?php echo $physicalProfile['breast']; ?></td>
			<td><?php echo $physicalProfile['belly']; ?></td>
			<td><?php echo $physicalProfile['legs']; ?></td>
			<td><?php echo $physicalProfile['feet']; ?></td>
			<td><?php echo $physicalProfile['hair']; ?></td>
			<td><?php echo $physicalProfile['back']; ?></td>
			<td><?php echo $physicalProfile['bottom']; ?></td>
			<td><?php echo $physicalProfile['created']; ?></td>
			<td><?php echo $physicalProfile['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'physical_profiles', 'action' => 'view', $physicalProfile['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'physical_profiles', 'action' => 'edit', $physicalProfile['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'physical_profiles', 'action' => 'delete', $physicalProfile['id']), null, __('Are you sure you want to delete # %s?', $physicalProfile['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Physical Profile'), array('controller' => 'physical_profiles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Skill Talents'); ?></h3>
	<?php if (!empty($user['SkillTalent'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Posing'); ?></th>
		<th><?php echo __('Dancing'); ?></th>
		<th><?php echo __('Walking'); ?></th>
		<th><?php echo __('Acting'); ?></th>
		<th><?php echo __('Exceptional Skills'); ?></th>
		<th><?php echo __('People Say'); ?></th>
		<th><?php echo __('Special Talent'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['SkillTalent'] as $skillTalent): ?>
		<tr>
			<td><?php echo $skillTalent['id']; ?></td>
			<td><?php echo $skillTalent['user_id']; ?></td>
			<td><?php echo $skillTalent['posing']; ?></td>
			<td><?php echo $skillTalent['dancing']; ?></td>
			<td><?php echo $skillTalent['walking']; ?></td>
			<td><?php echo $skillTalent['acting']; ?></td>
			<td><?php echo $skillTalent['exceptional_skills']; ?></td>
			<td><?php echo $skillTalent['people_say']; ?></td>
			<td><?php echo $skillTalent['special_talent']; ?></td>
			<td><?php echo $skillTalent['created']; ?></td>
			<td><?php echo $skillTalent['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'skill_talents', 'action' => 'view', $skillTalent['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'skill_talents', 'action' => 'edit', $skillTalent['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'skill_talents', 'action' => 'delete', $skillTalent['id']), null, __('Are you sure you want to delete # %s?', $skillTalent['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Skill Talent'), array('controller' => 'skill_talents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Roles'); ?></h3>
	<?php if (!empty($user['Role'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Role Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Role'] as $role): ?>
		<tr>
			<td><?php echo $role['id']; ?></td>
			<td><?php echo $role['role_name']; ?></td>
			<td><?php echo $role['created']; ?></td>
			<td><?php echo $role['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'roles', 'action' => 'view', $role['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'roles', 'action' => 'edit', $role['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'roles', 'action' => 'delete', $role['id']), null, __('Are you sure you want to delete # %s?', $role['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
