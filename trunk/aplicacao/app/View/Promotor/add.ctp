<div class="promotor form">
<?php echo $this->Form->create('Promotor', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Promotor'); ?></legend>
	<?php
		echo $this->Form->input('Pessoa.nome');
		echo $this->Form->input('Pessoa.cpf');
		echo $this->Form->input('Pessoa.rg');
		echo $this->Form->input('Pessoa.foto', array('type' => 'file'));
		echo $this->Form->input('categoria', array('type' => 'select', 'options' => array("A" => "A", "B" => "B", "C" => "C")));
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

		<li><?php echo $this->Html->link(__('Listar Promotores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Campanhas'), array('controller' => 'Campanha', 'action' => 'index')); ?> </li>
	</ul>
</div>
