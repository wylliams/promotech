<div class="left_side">
	<div class="actions">
		<h3><?php echo __('Ações'); ?></h3>
		<ul>
			<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $categoriaProduto['CategoriaProduto']['id']), null, __('Are you sure you want to delete # %s?', $categoriaProduto['CategoriaProduto']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('Editar Categoria Produto'), array('action' => 'edit', $categoriaProduto['CategoriaProduto']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('Listar Categoria Produto'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Nova Categoria Produto'), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('Listar Fornecedores'), array('controller' => 'fornecedor', 'action' => 'index')); ?> </li>
		</ul>
	</div>
</div>
<div class="right_side">
	<div class="categoriaProduto view">
	<h2><?php  echo __('Categoria Produto'); ?></h2>
		<dl>
			<dt><?php echo __('Nome'); ?></dt>
			<dd>
				<?php echo h($categoriaProduto['CategoriaProduto']['nome']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
</div>
