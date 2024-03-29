<div class="left_side">
	<div class="actions">
		<h3><?php echo __('Ações'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Editar Cliente'), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Deletar Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), null, __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('Listar Clientes'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Novo Cliente'), array('action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="right_side">
	<div class="cliente view">
	<h2><?php  echo __('Cliente'); ?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($cliente['Cliente']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Tipo'); ?></dt>
			<dd>
				<?php echo h($cliente['Cliente']['tipo']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Nome'); ?></dt>
			<dd>
				<?php echo h($cliente['Cliente']['nome']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Telefone Fixo'); ?></dt>
			<dd>
				<?php echo h($cliente['Cliente']['telefone_fixo']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Telefone Celular'); ?></dt>
			<dd>
				<?php echo h($cliente['Cliente']['telefone_celular']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Cpf'); ?></dt>
			<dd>
				<?php echo h($cliente['Cliente']['cpf']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Cnpj'); ?></dt>
			<dd>
				<?php echo h($cliente['Cliente']['cnpj']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Email'); ?></dt>
			<dd>
				<?php echo h($cliente['Cliente']['email']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Banco'); ?></dt>
			<dd>
				<?php echo h($cliente['Cliente']['banco']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Agencia'); ?></dt>
			<dd>
				<?php echo h($cliente['Cliente']['agencia']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Conta'); ?></dt>
			<dd>
				<?php echo h($cliente['Cliente']['conta']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
</div>
