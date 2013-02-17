<div class="cliente form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cliente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo');
		echo $this->Form->input('nome');
		echo $this->Form->input('telefone_fixo');
		echo $this->Form->input('telefone_celular');
		echo $this->Form->input('cpf');
		echo $this->Form->input('cnpj');
		echo $this->Form->input('email');
		echo $this->Form->input('banco');
		echo $this->Form->input('agencia');
		echo $this->Form->input('conta');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cliente.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Cliente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cliente'), array('action' => 'index')); ?></li>
	</ul>
</div>
