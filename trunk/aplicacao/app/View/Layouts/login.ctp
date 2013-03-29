<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			Promotech - Sistema de Gerenciamento Eventos
		</title>
		<?php

		echo $this->Html->css('style');
		echo $this->Html->script('jquery');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
		?>
	</head>
	<body>
		<div class="section">
			<div class="logo"></div>
			<div class="info">
				<div class="users form">
					<div class="inputs">
						<?php echo $this->Session->flash(); ?>
						<?php echo $this->Session->flash('auth'); ?>
						<?php echo $this->Form->create('Usuario');?>
						    <?php 
						    echo $this->Form->input('username');
						    echo $this->Form->input('password');
						    ?>
						<?php echo $this->Form->end(__('Login'));?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>