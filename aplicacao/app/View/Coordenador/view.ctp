<div class="left_side">
	<div class="actions">
		<h3><?php echo __('Ações'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Editar Coordenador'), array('action' => 'edit', $coordenador['Coordenador']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Deletar Coordenador'), array('action' => 'delete', $coordenador['Coordenador']['id']), null, __('Are you sure you want to delete # %s?', $coordenador['Coordenador']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('Listar Coordenador'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Novo Coordenador'), array('action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="right_side">
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
					<?php echo h($coordenador['Pessoa']['nome']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Cpf'); ?></dt>
				<dd>
					<?php echo h($coordenador['Pessoa']['cpf']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Rg'); ?></dt>
				<dd>
					<?php echo h($coordenador['Pessoa']['rg']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Foto'); ?></dt>
				<dd>
					<img src="<?php echo BASE_UPLOADS.$coordenador['Pessoa']['foto'];?>" alt="<?php $coordenador['Pessoa']['nome'];?>" height="150" width="150"/>
					&nbsp;
				</dd>
				<dt><?php echo __('Telefone Fixo'); ?></dt>
				<dd>
					<?php echo h($coordenador['Pessoa']['telefone_fixo']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Telefone Celular'); ?></dt>
				<dd>
					<?php echo h($coordenador['Pessoa']['telefone_celular']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Email'); ?></dt>
				<dd>
					<?php echo h($coordenador['Pessoa']['email']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Anexo Curriculum'); ?></dt>
				<dd>
					<?php echo h($coordenador['Coordenador']['anexo_curriculum']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
</div>
