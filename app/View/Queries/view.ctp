<div class="queries view">
<h2><?php echo __('Query'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($query['Query']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($query['User']['username'], array('controller' => 'users', 'action' => 'view', $query['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($query['Query']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Query'), array('action' => 'edit', $query['Query']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Query'), array('action' => 'delete', $query['Query']['id']), null, __('Are you sure you want to delete # %s?', $query['Query']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Queries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Query'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tasks'), array('controller' => 'tasks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task'), array('controller' => 'tasks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tasks'); ?></h3>
	<?php if (!empty($query['Task'])): ?>
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
	<?php foreach ($query['Task'] as $task): ?>
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
