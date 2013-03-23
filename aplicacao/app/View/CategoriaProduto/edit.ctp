<div class="categoriaProduto form">
<?php echo $this->Form->create('CategoriaProduto'); ?>
	<fieldset>
		<legend><?php echo __('Editar Categoria Produto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CategoriaProduto.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CategoriaProduto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Categoria Produto'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Fornecedores'), array('controller' => 'fornecedor', 'action' => 'index')); ?> </li>
	</ul>
</div>
