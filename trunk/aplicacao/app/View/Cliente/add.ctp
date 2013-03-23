<div class="cliente form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Cliente'); ?></legend>
	<?php
		echo $this->Form->input('tipo', array('options' => array('PJ' => 'Pessoa Jurídica', 'PF' => 'Pessoa Física')));
		echo $this->Form->input('nome');
		echo $this->Form->input('telefone_fixo');
		echo $this->Form->input('telefone_celular');
		echo $this->Form->input('cpf', array('div' => array('id' => 'cpf', 'style' => 'display:none')));
		echo $this->Form->input('cnpj', array('div' => array('id' => 'cnpj')));
		echo $this->Form->input('email');
		echo $this->Form->input('banco');
		echo $this->Form->input('agencia');
		echo $this->Form->input('conta');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Clientes'), array('action' => 'index')); ?></li>
	</ul>
</div>
<script>
	$(document).ready(function(){
	
		$("#ClienteTipo").change(function(){
			
			var tipo = $(this).val();
			
			if(tipo == "PF"){
				$("#cnpj").css('display', 'none');
				$("#cpf").css('display', 'block');
			}else{				
				$("#cpf").css('display', 'none');
				$("#cnpj").css('display', 'block');
			}
			
		});
		
	});
</script>
