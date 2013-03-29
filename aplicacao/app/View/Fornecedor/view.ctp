<div class="left_side">
	<div class="actions">
		<h3><?php echo __('Ações'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Editar Fornecedor'), array('action' => 'edit', $fornecedor['Fornecedor']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $fornecedor['Fornecedor']['id']), null, __('Are you sure you want to delete # %s?', $fornecedor['Fornecedor']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('Listar Fornecedores'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Novo Fornecedor'), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('Listar Categoria Produto'), array('controller' => 'categoria_produto', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Listar Campanhas'), array('controller' => 'campanha', 'action' => 'index')); ?> </li>
		</ul>
	</div>
</div>
<div class="right_side">
	<div class="fornecedor view">
	<h2><?php  echo __('Fornecedor'); ?></h2>
		<dl>
			<dt><?php echo __('Nome'); ?></dt>
			<dd>
				<?php echo h($fornecedor['Fornecedor']['nome']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Telefone Fixo'); ?></dt>
			<dd>
				<?php echo h($fornecedor['Fornecedor']['telefone_fixo']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Telefone Celular'); ?></dt>
			<dd>
				<?php echo h($fornecedor['Fornecedor']['telefone_celular']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Email'); ?></dt>
			<dd>
				<?php echo h($fornecedor['Fornecedor']['email']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Produtos'); ?></dt>
			<?php 
			$count = 0;
			foreach($categoriaProduto as $categoriaProduto){
				foreach($categoriaProduto as $chave => $valor){?>
					<?php if($count != 0) {?>
						</br>
					<?php } $count++;?>
					<dd>
					<?php echo $this->Html->link(__($valor), array('controller' => 'categoria_produto', 'action' => 'view', $chave)); ?>
					&nbsp;
					</dd>
				<?php } ?>
			<?php } ?>
		</dl>
	</div>
</div>