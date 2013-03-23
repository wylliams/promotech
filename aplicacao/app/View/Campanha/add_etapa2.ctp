<div class="campanha form">
<?php echo $this->Form->create('Campanha'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Campanha/Etapa 2'); ?></legend>
		<?php echo $this->Form->input('Campanha.id');?>
		<?php
		foreach($fornecedores as $fornecedor){?>
			<dt></dt>
			<dl>
				<a href="#janela1" class="modal" idFornecedor="<?php echo $fornecedor['Fornecedor']['id']; ?>"><?php echo $fornecedor['Fornecedor']['nome']?></a>&nbsp;<?php echo in_array($fornecedor['Fornecedor']['id'], $campanhaFornecedor) ? "*":"" ;?>
			</dl>
			
		<?php }
		?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Campanhas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Promotores'), array('controller' => 'Promotor', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Clientes'), array('controller' => 'Cliente', 'action' => 'index')); ?> </li>
	</ul>
</div>
 
<div class="window" id="janela1">
</div> 
 
<!-- mascara para cobrir o site -->  
<div id="mascara"></div>

<script>
	//Script responsavel por abrir a janela modal
	$(document).ready(function(){
	    $(".modal").click( function(ev){
	        ev.preventDefault();
	        
	        $("#janela1").html('Carregando...');
	 
	        var id = $(this).attr("href");
	 
	        var alturaTela = $(document).height();
	        var larguraTela = $(window).width();
	     
	        //colocando o fundo preto
	        $('#mascara').css({'width':larguraTela,'height':alturaTela});
	        $('#mascara').fadeIn(1000); 
	        $('#mascara').fadeTo("slow",0.8);
	 
	        var left = ($(window).width() /2) - ( $(id).width() / 2 );
	        var top = ($(window).height() / 2) - ( $(id).height() / 2 );
	     
	        $(id).css({'top':top,'left':left});
	        $(id).show();   
	        
	        
	        var idFornecedor = $(this).attr('idFornecedor');
	        var idCampanha = $("#CampanhaId").val();
	        
	        /*funcao que despacha os as categorias de produtos dos fornecedores*/
			$.ajax({
			//definimos a url
				url : '../adicaoCategoriaProduto/'+idFornecedor+'/'+idCampanha,
			//definimos o tipo de requisição
				type: 'get',
			//definimos o tipo de retorno
				dataType : 'html',
			//colocamos o retorno na tela
				success : function(pre){
					console.log(pre);
					$("#janela1").html(pre);
				}
			});
	        
	    });
 
	    $("#mascara").click( function(){
	        $(this).hide();
	        $(".window").hide();
	    });
	}); 
</script>
