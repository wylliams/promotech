<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Campanhas'), array('controller' => 'Campanha', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Promotores'), array('controller' => 'Promotor', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Coordenadores'), array('controller' => 'Coordenador', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Clientes'), array('controller' => 'Cliente', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Fornecedores'), array('controller' => 'Fornecedor', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Categoria Produtos'), array('controller' => 'CategoriaProduto', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('controller' => 'Usuario', 'action' => 'index')); ?> </li>	
		<li><?php echo $this->Html->link(__('Listar Mensagens'), array('controller' => 'Mensagem', 'action' => 'index')); ?> </li>
	</ul>
</div>
