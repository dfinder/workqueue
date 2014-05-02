<div class="tasks form">
<?php echo $this->Form->create('Task'); ?>
	<fieldset>
		<legend><?php echo __('Add Task'); ?></legend>
	<?php foreach($queries as $query){ ?>
		<?php
			echo '<h1>'+$query['Query']['name']+'</h1>';
			echo $this->Form->input('user_id');
			echo $this->Form->input('query_id');
			echo $this->Form->input('name');
			echo $this->Form->input('description');
			echo $this->Form->input('timeStart');
			echo $this->Form->input('timeExpected');
		?>
	<?php }?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tasks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Queries'), array('controller' => 'queries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Query'), array('controller' => 'queries', 'action' => 'add')); ?> </li>
	</ul>
</div>
