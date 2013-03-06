<div class="promotor form">
<?php echo $this->Form->create('Promotor'); ?>
	<fieldset>
		<legend><?php echo __('Edit Promotor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Pessoa.id');
		echo $this->Form->input('Pessoa.nome');
		echo $this->Form->input('Pessoa.cpf');
		echo $this->Form->input('Pessoa.rg');
		echo $this->Form->input('Pessoa.foto');
		echo $this->Form->input('categoria');
		echo $this->Form->input('altura');
		echo $this->Form->input('manequim');
		echo $this->Form->input('peso');
		echo $this->Form->input('numero_calcado');
		echo $this->Form->input('Pessoa.telefone_fixo');
		echo $this->Form->input('Pessoa.telefone_celular');
		echo $this->Form->input('Pessoa.email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Promotor.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Promotor.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Promotores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Campanhas'), array('controller' => 'Campanha', 'action' => 'index')); ?> </li>
	</ul>
</div>
