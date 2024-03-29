<div class="left_side">
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Novo Usuario'), array('action' => 'add')); ?></li>
		</ul>
	</div>
</div>
<div class="right_side">
	<div class="view">
		<div class="usuario index">
			<h2><?php echo __('Usuario'); ?></h2>
			<table cellpadding="0" cellspacing="0">
			<tr>
					<th><?php echo $this->Paginator->sort('username'); ?></th>
					<th><?php echo $this->Paginator->sort('email'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php
			foreach ($usuario as $usuario): ?>
			<tr>
				<td><?php echo h($usuario['Usuario']['username']); ?>&nbsp;</td>
				<td><?php echo h($usuario['Usuario']['email']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $usuario['Usuario']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usuario['Usuario']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usuario['Usuario']['id']), null, __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
			</table>
			<p>
			<?php
			echo $this->Paginator->counter(array(
			'format' => __('Pagina {:page} de {:pages}, exibindo {:current} linhas de {:count} no total')
			));
			?>	</p>
		
			<div class="paging">
			<?php
				echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
			?>
			</div>
		</div>
	</div>
</div>

