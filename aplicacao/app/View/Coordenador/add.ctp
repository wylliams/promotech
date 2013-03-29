<div class="left_side">
	<div class="actions">
		<h3><?php echo __('Ações'); ?></h3>
		<ul>
	
			<li><?php echo $this->Html->link(__('Listar Coordenadores'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Listar Campanhas'), array('controller' => 'Campanha', 'action' => 'index')); ?> </li>
		</ul>
	</div>
</div>
<div class="right_side">
	<div class="view">
		<div class="coordenador form">
		<?php echo $this->Form->create('Coordenador', array('type' => 'file')); ?>
			<fieldset>
				<legend><?php echo __('Add Coordenador'); ?></legend>
			<?php
				echo $this->Form->input('Pessoa.nome');
				echo $this->Form->input('Pessoa.cpf');
				echo $this->Form->input('Pessoa.rg');
				echo $this->Form->input('Pessoa.foto', array('type' => 'file'));
				echo $this->Form->input('Pessoa.telefone_fixo');
				echo $this->Form->input('Pessoa.telefone_celular');
				echo $this->Form->input('Pessoa.email');
				echo $this->Form->input('anexo_curriculum');
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Salvar')); ?>
		</div>
	</div>
</div>
