<div class="left_side">
	<div class="actions">
		<h3><?php echo __('Ações'); ?></h3>
		<ul>
	
			<li><?php echo $this->Html->link(__('Listar Fornecedores'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Listar Categoria Produto'), array('controller' => 'categoria_produto', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Listar Campanhas'), array('controller' => 'campanha', 'action' => 'index')); ?> </li>
			</ul>
	</div>
</div>
<div class="right_side">
	<div class="view">
		<div class="fornecedor form">
		<?php echo $this->Form->create('Fornecedor'); ?>
			<fieldset>
				<legend><?php echo __('Add Fornecedor'); ?></legend>
			<?php
				echo $this->Form->input('nome');
				echo $this->Form->input('telefone_fixo');
				echo $this->Form->input('telefone_celular');
				echo $this->Form->input('email');		
				echo $this->Form->input('categoria_produto_id', array('multiple' => true, 'label' => 'Categorias de Produto'));
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
</div>
