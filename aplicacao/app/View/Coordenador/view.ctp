<div class="coordenador view">
<h2><?php  echo __('Coordenador'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($coordenador['Coordenador']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($coordenador['Coordenador']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cpf'); ?></dt>
		<dd>
			<?php echo h($coordenador['Coordenador']['cpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rg'); ?></dt>
		<dd>
			<?php echo h($coordenador['Coordenador']['rg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($coordenador['Coordenador']['foto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone Fixo'); ?></dt>
		<dd>
			<?php echo h($coordenador['Coordenador']['telefone_fixo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone Celular'); ?></dt>
		<dd>
			<?php echo h($coordenador['Coordenador']['telefone_celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($coordenador['Coordenador']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Anexo Curriculum'); ?></dt>
		<dd>
			<?php echo h($coordenador['Coordenador']['anexo_curriculum']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Coordenador'), array('action' => 'edit', $coordenador['Coordenador']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar Coordenador'), array('action' => 'delete', $coordenador['Coordenador']['id']), null, __('Are you sure you want to delete # %s?', $coordenador['Coordenador']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Coordenador'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Coordenador'), array('action' => 'add')); ?> </li>
	</ul>
</div>
