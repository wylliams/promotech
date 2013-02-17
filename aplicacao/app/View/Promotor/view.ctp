<div class="promotor view">
<h2><?php  echo __('Promotor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($promotor['Promotor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($promotor['Promotor']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cpf'); ?></dt>
		<dd>
			<?php echo h($promotor['Promotor']['cpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rg'); ?></dt>
		<dd>
			<?php echo h($promotor['Promotor']['rg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($promotor['Promotor']['foto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo h($promotor['Promotor']['categoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Altura'); ?></dt>
		<dd>
			<?php echo h($promotor['Promotor']['altura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Manequim'); ?></dt>
		<dd>
			<?php echo h($promotor['Promotor']['manequim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Peso'); ?></dt>
		<dd>
			<?php echo h($promotor['Promotor']['peso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Calcado'); ?></dt>
		<dd>
			<?php echo h($promotor['Promotor']['numero_calcado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone Fixo'); ?></dt>
		<dd>
			<?php echo h($promotor['Promotor']['telefone_fixo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone Celular'); ?></dt>
		<dd>
			<?php echo h($promotor['Promotor']['telefone_celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($promotor['Promotor']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Promotor'), array('action' => 'edit', $promotor['Promotor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar Promotor'), array('action' => 'delete', $promotor['Promotor']['id']), null, __('Are you sure you want to delete # %s?', $promotor['Promotor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Promotor'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Promotor'), array('action' => 'add')); ?> </li>
	</ul>
</div>
