<div class="compromisso form">
<?php echo $this->Form->create('Compromisso'); ?>
	<fieldset>
		<legend><?php echo __('Edit Compromisso'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('data', array('dateFormat' => 'DMY'));
		echo $this->Form->input('hora', array('timeFormat' => '24'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Compromisso.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Compromisso.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Compromissos'), array('action' => 'index')); ?></li>
	</ul>
</div>
