<div class="left_side">
	<div class="actions">
		<h3><?php echo __('Ações'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Nova Categoria Produto'), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Listar Fornecedores'), array('controller' => 'fornecedor', 'action' => 'index')); ?> </li>
		</ul>
	</div>
</div>
<div class="right_side">
	<div class="view">
		<div class="categoriaProduto index">
			<h2><?php echo __('Categoria Produto'); ?></h2>
			<table cellpadding="0" cellspacing="0">
			<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('nome'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php
			foreach ($categoriaProduto as $categoriaProduto): ?>
			<tr>
				<td><?php echo h($categoriaProduto['CategoriaProduto']['id']); ?>&nbsp;</td>
				<td><?php echo h($categoriaProduto['CategoriaProduto']['nome']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $categoriaProduto['CategoriaProduto']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $categoriaProduto['CategoriaProduto']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $categoriaProduto['CategoriaProduto']['id']), null, __('Are you sure you want to delete # %s?', $categoriaProduto['CategoriaProduto']['id'])); ?>
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
