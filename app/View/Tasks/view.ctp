<div class="tasks view">
<h2><?php echo __('Task'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($task['Task']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($task['User']['username'], array('controller' => 'users', 'action' => 'view', $task['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category Id'); ?></dt>
		<dd>
			<?php echo h($task['Task']['category_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Query'); ?></dt>
		<dd>
			<?php echo $this->Html->link($task['Query']['name'], array('controller' => 'queries', 'action' => 'view', $task['Query']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($task['Task']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($task['Task']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TimeStart'); ?></dt>
		<dd>
			<?php echo h($task['Task']['timeStart']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TimeExpected'); ?></dt>
		<dd>
			<?php echo h($task['Task']['timeExpected']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Task'), array('action' => 'edit', $task['Task']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Task'), array('action' => 'delete', $task['Task']['id']), null, __('Are you sure you want to delete # %s?', $task['Task']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tasks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Queries'), array('controller' => 'queries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Query'), array('controller' => 'queries', 'action' => 'add')); ?> </li>
	</ul>
</div>
