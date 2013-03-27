<?php
/**
 *<?php echo $this->fetch('content');?>
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
 * @package       Cake.View.Layouts.Emails.html
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Promotech</title>
</head>
<body style="margin:0;padding:0;background:#f6f6f6">
	<div style="width:600px;margin:0 auto;padding:0">
		<div style="padding:40px;color:#444;font:normal 14px/21px Arial, sans-serif;border:1px solid #eaeaea;background:#fff;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;-webkit-box-shadow:0 0 7px #dad9d9">
			<h1 style="font-size:28px;color:#191970">Agenda da Semana Promotech</h1>
			<p><b>Campanhas</b></p>
			<p><?php echo $campanhas; ?></p>
			<p><b>Compromissos</b></p>
			<p><?php echo $compromissos; ?></p>
		</div>
	</div>
</body>
</html>