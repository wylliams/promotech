<div class="categoriaProduto form">
<?php echo $this->Form->create('CategoriaProduto', array('type' => 'post')); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Categorias de produtos'); ?></legend>
	<?php $count = 0; foreach($arrayCategoriaProduto as $categoriaProduto){ ?>
			
		<input type="checkbox" name="data[dados][]" value="<?php echo $categoriaProduto['CategoriaProduto']['id']; ?>" <?php echo in_array($categoriaProduto['CategoriaProduto']['id'], $campanhaFornecedorCategoriaProduto ) ? "checked":""; ?>/><b><?php echo $categoriaProduto['CategoriaProduto']['nome']; ?></b><br><br>
	
	<?php $count++;}?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
