<div class="coordenador index">
	<h2><?php echo __('Coordenador'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone_celular'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('curriculum'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($coordenador as $coordenador): ?>
	<tr>
		<td><?php echo h($coordenador['Coordenador']['id']); ?>&nbsp;</td>
		<td><?php echo h($coordenador['Coordenador']['nome']); ?>&nbsp;</td>
		<td><?php echo h($coordenador['Coordenador']['telefone_celular']); ?>&nbsp;</td>
		<td><?php echo h($coordenador['Coordenador']['email']); ?>&nbsp;</td>
		<td><?php echo h($coordenador['Coordenador']['anexo_curriculum']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $coordenador['Coordenador']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $coordenador['Coordenador']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $coordenador['Coordenador']['id']), null, __('Are you sure you want to delete # %s?', $coordenador['Coordenador']['id'])); ?>
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
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo Coordenador'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Campanhas'), array('controller' => 'Campanha', 'action' => 'index')); ?> </li>
	</ul>
</div>
