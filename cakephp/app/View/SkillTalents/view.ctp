<div class="skillTalents view">
<h2><?php  echo __('Skill Talent'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($skillTalent['SkillTalent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($skillTalent['User']['id'], array('controller' => 'users', 'action' => 'view', $skillTalent['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Posing'); ?></dt>
		<dd>
			<?php echo h($skillTalent['SkillTalent']['posing']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dancing'); ?></dt>
		<dd>
			<?php echo h($skillTalent['SkillTalent']['dancing']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Walking'); ?></dt>
		<dd>
			<?php echo h($skillTalent['SkillTalent']['walking']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acting'); ?></dt>
		<dd>
			<?php echo h($skillTalent['SkillTalent']['acting']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exceptional Skills'); ?></dt>
		<dd>
			<?php echo h($skillTalent['SkillTalent']['exceptional_skills']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('People Say'); ?></dt>
		<dd>
			<?php echo h($skillTalent['SkillTalent']['people_say']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Special Talent'); ?></dt>
		<dd>
			<?php echo h($skillTalent['SkillTalent']['special_talent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($skillTalent['SkillTalent']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($skillTalent['SkillTalent']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Skill Talent'), array('action' => 'edit', $skillTalent['SkillTalent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Skill Talent'), array('action' => 'delete', $skillTalent['SkillTalent']['id']), null, __('Are you sure you want to delete # %s?', $skillTalent['SkillTalent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Skill Talents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill Talent'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
