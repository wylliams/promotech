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
		<dt><?php echo __('Promotores'); ?></dt>
		<?php 
		$count = 0;
		foreach($promotor as $promotor){
			foreach($promotor as $chave => $valor){?>
				<?php if($count != 0) {?>
					</br>
				<?php } $count++;?>
				<dd>
				<?php echo $this->Html->link(__($valor), array('controller' => 'promotor', 'action' => 'view', $chave)); ?>
				&nbsp;
				</dd>
			<?php } ?>
		<?php } ?>
		<dt><?php echo __('Coordenadores'); ?></dt>
		<?php 
		$count = 0;
		foreach($coordenador as $coordenador){ 
			foreach($coordenador as $chave => $valor){?>
				<?php if($count != 0) {?>
					</br>
				<?php } $count++;?>
				<dd>
				<?php echo $this->Html->link(__($valor), array('controller' => 'coordenador', 'action' => 'view', $chave)); ?>
				&nbsp;
				</dd>
			<?php } ?>
		<?php } ?>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Campanha'), array('action' => 'edit', $campanha['Campanha']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar Campanha'), array('action' => 'delete', $campanha['Campanha']['id']), null, __('Are you sure you want to delete # %s?', $campanha['Campanha']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Campanhas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Campanha'), array('action' => 'addEtapa1')); ?> </li>
	</ul>
</div>
