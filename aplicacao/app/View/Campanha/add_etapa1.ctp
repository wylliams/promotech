<div class="campanha form">
<?php echo $this->Form->create('Campanha'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Campanha/Etapa 1'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('local');
		echo $this->Form->input('hora_inicio', array('label' => 'Hora inicial', 'timeFormat' => '24'));
		echo $this->Form->input('hora_fim', array('label' => 'Hora final', 'timeFormat' => '24'));
		echo $this->Form->input('data_inicio', array('dateFormat' => 'DMY', 'label' => 'Data inicial'));
		echo $this->Form->input('data_fim', array('dateFormat' => 'DMY', 'label' => 'Data final'));
		echo $this->Form->input('valor_orcado', array('label' => 'Valor Orçado'));
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('promotor_id', array('multiple' => true, 'label' => 'Promotores'));
		echo $this->Form->input('coordenador_id', array('multiple' => true, 'label' => 'Coordenadores'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Campanhas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Promotores'), array('controller' => 'Promotor', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Clientes'), array('controller' => 'Cliente', 'action' => 'index')); ?> </li>
	</ul>
</div>
