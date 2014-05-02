<div class="users view">
<h2><?php echo __('User'); ?></h2>
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
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Queries'), array('controller' => 'queries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Query'), array('controller' => 'queries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tasks'), array('controller' => 'tasks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task'), array('controller' => 'tasks', 'action' => 'add')); ?> </li>	
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Queries'); ?></h3>
	<?php if (!empty($user['Query'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Query'] as $query): ?>
		<tr>
			<td><?php echo $query['id']; ?></td>
			<td><?php echo $query['user_id']; ?></td>
			<td><?php echo $query['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'queries', 'action' => 'view', $query['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'queries', 'action' => 'edit', $query['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'queries', 'action' => 'delete', $query['id']), null, __('Are you sure you want to delete # %s?', $query['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Query'), array('controller' => 'queries', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tasks'); ?></h3>
	<?php if (!empty($user['Task'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Query Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('TimeStart'); ?></th>
		<th><?php echo __('TimeExpected'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Task'] as $task): ?>
		<tr>
			<td><?php echo $task['id']; ?></td>
			<td><?php echo $task['user_id']; ?></td>
			<td><?php echo $task['category_id']; ?></td>
			<td><?php echo $task['query_id']; ?></td>
			<td><?php echo $task['name']; ?></td>
			<td><?php echo $task['description']; ?></td>
			<td><?php echo $task['timeStart']; ?></td>
			<td><?php echo $task['timeExpected']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tasks', 'action' => 'view', $task['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tasks', 'action' => 'edit', $task['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tasks', 'action' => 'delete', $task['id']), null, __('Are you sure you want to delete # %s?', $task['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Task'), array('controller' => 'tasks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related User Queues'); ?></h3>
	<?php if (!empty($user['UserQueue'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Position Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['UserQueue'] as $userQueue): ?>
		<tr>
			<td><?php echo $userQueue['id']; ?></td>
			<td><?php echo $userQueue['user_id']; ?></td>
			<td><?php echo $userQueue['item_id']; ?></td>
			<td><?php echo $userQueue['position_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_queues', 'action' => 'view', $userQueue['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_queues', 'action' => 'edit', $userQueue['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_queues', 'action' => 'delete', $userQueue['id']), null, __('Are you sure you want to delete # %s?', $userQueue['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Queue'), array('controller' => 'user_queues', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
