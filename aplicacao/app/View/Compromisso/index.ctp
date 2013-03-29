<div class="left_side">
	<div class="actions">
		<h3><?php echo __('Ações'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Novo Compromisso'), array('action' => 'add')); ?></li>
		</ul>
	</div>
</div>
<div class="right_side">
	<div class="view">
		<h2><?php echo __('Compromisso'); ?></h2>
		<table cellpadding="0" cellspacing="0">
		<tr>
				<th><?php echo $this->Paginator->sort('descricao'); ?></th>
				<th><?php echo $this->Paginator->sort('data'); ?></th>
				<th><?php echo $this->Paginator->sort('hora'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php
		foreach ($compromisso as $compromisso): ?>
		<tr>
			<td><?php echo h($compromisso['Compromisso']['descricao']); ?>&nbsp;</td>
			<td><?php echo h($compromisso['Compromisso']['data']); ?>&nbsp;</td>
			<td><?php echo h($compromisso['Compromisso']['hora']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $compromisso['Compromisso']['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $compromisso['Compromisso']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $compromisso['Compromisso']['id']), null, __('Are you sure you want to delete # %s?', $compromisso['Compromisso']['id'])); ?>
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

