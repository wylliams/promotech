<div class="promotor index">
	<h2><?php echo __('Promotor'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>			
			<th><?php echo $this->Paginator->sort('categoria'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone_celular'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('foto'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($promotor as $promotor): ?>
	<tr>
		<td><?php echo h($promotor['Promotor']['id']); ?>&nbsp;</td>
		<td><?php echo h($promotor['Pessoa']['nome']); ?>&nbsp;</td>		
		<td><?php echo h($promotor['Promotor']['categoria']); ?>&nbsp;</td>
		<td><?php echo h($promotor['Pessoa']['telefone_celular']); ?>&nbsp;</td>
		<td><?php echo h($promotor['Pessoa']['email']); ?>&nbsp;</td>
		<td><img src="http://localhost/promotech/uploads/<?php echo $promotor['Pessoa']['foto'];?>" alt="<?php $promotor['Pessoa']['nome'];?>" height="150" width="150"/>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $promotor['Promotor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $promotor['Promotor']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $promotor['Promotor']['id']), null, __('Are you sure you want to delete # %s?', $promotor['Promotor']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Novo Promotor'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Campanhas'), array('controller' => 'Campanha', 'action' => 'index')); ?> </li>
	</ul>
</div>
