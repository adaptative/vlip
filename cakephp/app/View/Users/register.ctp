<div id="mainContent" class="midContent">
<div class="floatLeft" id="rightSection">
  <?php echo $this->Form->create('User'); ?>
<h2><?php echo __('Your Details'); ?> </h2>
<div class="form-content">
        <div class="form-item">
          <?php echo $this->Form->input('username');?>
        </div>
        <div class="form-item">
          	<?php echo $this->Form->input('password');?>
        </div>
        <div class="form-item">
        <?php echo $this->Form->input('password_confirm', array('type' => 'password')); ?></div>
        
        <div class="form-item">
          <?php echo $this->Form->input('email');?>
        </div>
        <div class="form-item">
             <?php echo $this->Form->input('email_confirm', array('type' => 'text'));?>
          </div>
        </div>
        <div class="clr"></div>
        <div class="form-item">
        <?php  echo $this->Form->input('fname');?>
        </div>
         <div class="form-item">
        <?php  	echo $this->Form->input('lname');?>
        </div>
     
      </div><div class="clr"></div>


<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="clr"></div>
</div>
