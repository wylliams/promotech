<div class="left_side">
	<div class="actions">
		<h3><?php echo __('Ações'); ?></h3>
		<ul>
	
			<li><?php echo $this->Html->link(__('Listar Compromissos'), array('action' => 'index')); ?></li>
		</ul>
	</div>
</div>
<div class="right_side">
	<div class="view">
		<div class="compromisso form">
		<?php echo $this->Form->create('Compromisso'); ?>
			<fieldset>
				<legend><?php echo __('Add Compromisso'); ?></legend>
			<?php
				echo $this->Form->input('descricao');
				echo $this->Form->input('data', array('dateFormat' => 'DMY'));
				echo $this->Form->input('hora', array('timeFormat' => '24'));
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Salvar')); ?>
		</div>
	</div>		
</div>


