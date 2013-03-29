<div class="left_side">
	<div class="actions">
		<h3><?php echo __('Ações'); ?></h3>
		<ul>
	
			<li><?php echo $this->Html->link(__('Listar Categoria Produto'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Listar Fornecedores'), array('controller' => 'fornecedor', 'action' => 'index')); ?> </li>
		</ul>
	</div>
</div>
<div class="right_side">
	<div class="view">
		<div class="categoriaProduto form">
		<?php echo $this->Form->create('CategoriaProduto'); ?>
			<fieldset>
				<legend><?php echo __('Add Categoria  de Produto'); ?></legend>
			<?php
				echo $this->Form->input('nome');
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Salvar')); ?>
		</div>
	</div>
</div>
