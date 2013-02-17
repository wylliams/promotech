<div class="promotor form">
<?php echo $this->Form->create('Promotor'); ?>
	<fieldset>
		<legend><?php echo __('Add Promotor'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('cpf');
		echo $this->Form->input('rg');
		echo $this->Form->input('foto');
		echo $this->Form->input('categoria');
		echo $this->Form->input('altura');
		echo $this->Form->input('manequim');
		echo $this->Form->input('peso');
		echo $this->Form->input('numero_calcado');
		echo $this->Form->input('telefone_fixo');
		echo $this->Form->input('telefone_celular');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Promotores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Campanhas'), array('controller' => 'Campanha', 'action' => 'index')); ?> </li>
	</ul>
</div>
