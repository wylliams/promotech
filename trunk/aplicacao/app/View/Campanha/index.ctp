<div class="campanha index">
	<?php //var_dump($campanha);?>
	<h2><?php echo __('Campanha'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('local'); ?></th>
			<th><?php echo $this->Paginator->sort('data_inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('data_fim'); ?></th>
			<th><?php echo $this->Paginator->sort('valor_orcado'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($campanha as $campanha): ?>
	<tr>
		<td><?php echo h($campanha['Campanha']['id']); ?>&nbsp;</td>
		<td><?php echo h($campanha['Campanha']['nome']); ?>&nbsp;</td>
		<td><?php echo h($campanha['Campanha']['local']); ?>&nbsp;</td>
		<td><?php echo h($campanha['Campanha']['data_inicio']); ?>&nbsp;</td>
		<td><?php echo h($campanha['Campanha']['data_fim']); ?>&nbsp;</td>
		<td><?php echo h($campanha['Campanha']['valor_orcado']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link(__($campanha['Cliente']['nome']), array('controller' => 'Cliente', 'action' => 'view', $campanha['Cliente']['id'])); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $campanha['Campanha']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $campanha['Campanha']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $campanha['Campanha']['id']), null, __('Are you sure you want to delete # %s?', $campanha['Campanha']['id'])); ?>
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
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('próxima') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acões'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nova Campanha'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Promotores'), array('controller' => 'Promotor', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Clientes'), array('controller' => 'Cliente', 'action' => 'index')); ?> </li>
	</ul>
</div>
