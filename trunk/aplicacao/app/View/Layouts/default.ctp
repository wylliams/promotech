<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>

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
		<div class="topo">
			<?php echo $this->Html->image('logo-main.png');?>
			<div class="user">
				<?php echo $this->Html->image('user.jpg');?>
				<div class="user-p">
					<ul>
						<ol>Bem Vinda</ol>
						<ol>Cargo: Dona</ol>
						<ol>acesso: 19/03/2013 10:03</ol>
					</ul>
				</div>
			</div>
		</div>
		<div class="menu">
			<hr>
			<ul class="dropdown">
				
				<li><?php echo $this->Html->link($this->Html->image('btn_home.png'), array('controller' => 'Principal', 'action' => 'index'), array('escape' => false)
				);
				?></li>
				<li><?php echo $this->Html->link(__('Agenda'), array('controller' => 'Compromisso', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Clientes'), array('controller' => 'Cliente', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Promotores'), array('controller' => 'Promotor', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Coordenadores'), array('controller' => 'Coordenador', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Fornecedores'), array('controller' => 'Fornecedor', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Campanhas'), array('controller' => 'Campanha', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Categoria Produtos'), array('controller' => 'CategoriaProduto', 'action' => 'index')); ?></li>
			</ul> <!--fim ul dropdown-->
		</div>
		<div class="conteudo">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			
		</div>
		<div class="rodape">
			<p>2013 PROMOTECH - TODOS OS DIREITOS RESERVADOS</p>
		</div>
	</body>
</html>



<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		
		echo $this->Html->script('jquery');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
			<?php echo $this->Html->link('Logout', BASE_HTTP."usuario/logout");?>
		</div>
		<div id="content">
			<?php if(AuthComponent::user()){?><p align="right"><?php echo $this->Html->link('Logout', BASE_HTTP."aplicacao/usuario/logout");?></p><?php } ?>
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->Js->writeBuffer(array('cache' => FALSE)); ?>
</body>
</html>-->
