<div class="left_side">
	<div class="actions">
		<h3><?php echo __('Ações'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Novo Fornecedor'), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Listar Categoria Produto'), array('controller' => 'categoria_produto', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Listar Campanhas'), array('controller' => 'campanha', 'action' => 'index')); ?> </li>
			</ul>
	</div>
</div>
<div class="right_side">
	<div class="view">
		<div class="fornecedor index">
			<h2><?php echo __('Fornecedor'); ?></h2>
			<table cellpadding="0" cellspacing="0">
			<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('nome'); ?></th>
					<th><?php echo $this->Paginator->sort('telefone_fixo'); ?></th>
					<th><?php echo $this->Paginator->sort('telefone_celular'); ?></th>
					<th><?php echo $this->Paginator->sort('email'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php
			foreach ($fornecedor as $fornecedor): ?>
			<tr>
				<td><?php echo h($fornecedor['Fornecedor']['id']); ?>&nbsp;</td>
				<td><?php echo h($fornecedor['Fornecedor']['nome']); ?>&nbsp;</td>
				<td><?php echo h($fornecedor['Fornecedor']['telefone_fixo']); ?>&nbsp;</td>
				<td><?php echo h($fornecedor['Fornecedor']['telefone_celular']); ?>&nbsp;</td>
				<td><?php echo h($fornecedor['Fornecedor']['email']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $fornecedor['Fornecedor']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fornecedor['Fornecedor']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fornecedor['Fornecedor']['id']), null, __('Are you sure you want to delete # %s?', $fornecedor['Fornecedor']['id'])); ?>
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
