<div class="queries index">
	<h2><?php echo __('Queries'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php echo $this->Html->link(__('Add'), array('action'=>'add')); //add a query?>
	<?php echo $this->Form->create('Task');?>
	<?php foreach ($queries as $query): ?>
	<tr>
		<td><?php echo h($query['Query']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($query['User']['username'], array('controller' => 'users', 'action' => 'view', $query['User']['id'])); ?>
		</td>
		<td><?php echo h($query['Query']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $query['Query']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $query['Query']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $query['Query']['id']), null, __('Are you sure you want to delete # %s?', $query['Query']['id'])); ?>
		</td>
	</tr>
	<tr>
		<td>Name</td>
		<td><?php echo $i= $query['Query']['id']?>
		<?php echo $this->Form->input('Task.'.$i.'name');?></td>
	<tr><td>Description</td><td><?php echo $this->Form->input('Task.'.$i.'name');?></td><tr>
	<?php endforeach; ?>
	<?php echo $this->Form->submit();?>
</div>
