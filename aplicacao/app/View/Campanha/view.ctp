<div class="campanha view">
<h2><?php  echo __('Campanha'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($campanha['Campanha']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($campanha['Campanha']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Local'); ?></dt>
		<dd>
			<?php echo h($campanha['Campanha']['local']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Inicio'); ?></dt>
		<dd>
			<?php echo h($campanha['Campanha']['hora_inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Fim'); ?></dt>
		<dd>
			<?php echo h($campanha['Campanha']['hora_fim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Inicio'); ?></dt>
		<dd>
			<?php echo h($campanha['Campanha']['data_inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Fim'); ?></dt>
		<dd>
			<?php echo h($campanha['Campanha']['data_fim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor Orcado'); ?></dt>
		<dd>
			<?php echo h($campanha['Campanha']['valor_orcado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link(__($campanha['Cliente']['nome']), array('controller' => 'Cliente', 'action' => 'view', $campanha['Cliente']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Campanha'), array('action' => 'edit', $campanha['Campanha']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar Campanha'), array('action' => 'delete', $campanha['Campanha']['id']), null, __('Are you sure you want to delete # %s?', $campanha['Campanha']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Campanhas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Campanha'), array('action' => 'add')); ?> </li>
	</ul>
</div>
