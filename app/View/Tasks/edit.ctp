<div class="tasks form">
<?php echo $this->Form->create('Task'); ?>
	<fieldset>
		<legend><?php echo __('Edit Task'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('query_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('timeStart');
		echo $this->Form->input('timeExpected');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Task.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Task.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tasks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Queries'), array('controller' => 'queries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Query'), array('controller' => 'queries', 'action' => 'add')); ?> </li>
	</ul>
</div>
