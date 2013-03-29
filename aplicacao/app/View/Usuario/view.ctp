<div class="left_side">
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Editar Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $usuario['Usuario']['id']), null, __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Novo Usuario'), array('action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="right_side">
	<div class="usuario view">
	<h2><?php  echo __('Usuario'); ?></h2>
		<dl>
			<dt><?php echo __('Username'); ?></dt>
			<dd>
				<?php echo h($usuario['Usuario']['username']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Email'); ?></dt>
			<dd>
				<?php echo h($usuario['Usuario']['email']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
</div>
