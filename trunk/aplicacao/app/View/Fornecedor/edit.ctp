<div class="fornecedor form">
<?php echo $this->Form->create('Fornecedor'); ?>
	<fieldset>
		<legend><?php echo __('Editar Fornecedor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('telefone_fixo');
		echo $this->Form->input('telefone_celular');
		echo $this->Form->input('email');
		echo $this->Form->input('categoria_produto_id', array('multiple' => true, 'selected' => $categoriaProdutoFornecedor,'label' => 'Categorias de Produto'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Fornecedor.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Fornecedor.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Fornecedores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Categoria Produto'), array('controller' => 'categoria_produto', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Campanha'), array('controller' => 'campanha', 'action' => 'index')); ?> </li>
		</ul>
</div>
