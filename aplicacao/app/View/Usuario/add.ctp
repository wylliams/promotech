<div class="left_side">
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul>
	
			<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index')); ?></li>
		</ul>
	</div>
</div>
<div class="right_side">
	<div class="view">
		<div class="usuario form">
		<?php echo $this->Form->create('Usuario'); ?>
			<fieldset>
				<legend><?php echo __('Add Usuario'); ?></legend>
			<?php
				echo $this->Form->input('username');
				echo $this->Form->input('password');
				echo $this->Form->input('email');
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Salvar')); ?>
		</div>
	</div>
</div>
