<div class="coordenador form">
<?php echo $this->Form->create('Coordenador'); ?>
	<fieldset>
		<legend><?php echo __('Editar Coordenador'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('cpf');
		echo $this->Form->input('rg');
		echo $this->Form->input('foto');
		echo $this->Form->input('telefone_fixo');
		echo $this->Form->input('telefone_celular');
		echo $this->Form->input('email');
		echo $this->Form->input('anexo_curriculum');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Coordenador.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Coordenador.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Coodenadores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Campanhas'), array('controller' => 'Campanha', 'action' => 'index')); ?> </li>
	</ul>
</div>
