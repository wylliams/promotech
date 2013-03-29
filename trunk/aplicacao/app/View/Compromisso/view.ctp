<div class="left_side">
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Editar Compromisso'), array('action' => 'edit', $compromisso['Compromisso']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Deletar Compromisso'), array('action' => 'delete', $compromisso['Compromisso']['id']), null, __('Are you sure you want to delete # %s?', $compromisso['Compromisso']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('Listar Compromissos'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Novo Compromisso'), array('action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="right_side">
	<div class="compromisso view">
		<h2><?php  echo __('Compromisso'); ?></h2>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($compromisso['Compromisso']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Descricao'); ?></dt>
				<dd>
					<?php echo h($compromisso['Compromisso']['descricao']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Data'); ?></dt>
				<dd>
					<?php echo h($compromisso['Compromisso']['data']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Hora'); ?></dt>
				<dd>
					<?php echo h($compromisso['Compromisso']['hora']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
</div>

