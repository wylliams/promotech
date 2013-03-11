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
			<?php echo h($promotor['Pessoa']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cpf'); ?></dt>
		<dd>
			<?php echo h($promotor['Pessoa']['cpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rg'); ?></dt>
		<dd>
			<?php echo h($promotor['Pessoa']['rg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<img src="http://localhost/promotech/uploads/<?php echo $promotor['Pessoa']['foto'];?>" alt="<?php $promotor['Pessoa']['nome'];?>" height="150" width="150"/>
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
			<?php echo h($promotor['Pessoa']['telefone_fixo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone Celular'); ?></dt>
		<dd>
			<?php echo h($promotor['Pessoa']['telefone_celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($promotor['Pessoa']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Promotor'), array('action' => 'edit', $promotor['Promotor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar Promotor'), array('action' => 'delete', $promotor['Promotor']['id']), null, __("Você tem certeza que quer deletar ".$promotor['Pessoa']['nome']."?", $promotor['Promotor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Promotores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Promotor'), array('action' => 'add')); ?> </li>
	</ul>
</div>
