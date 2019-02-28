<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Site Institucional </title>
    	<link rel="stylesheet"  href="/assets/css/style.css">
    
    <meta charset="utf-8">
  </head>
  <body>
  	<div class="topo">
  		<div class="topo1"></div>
  		<div class="banner"></div>
  		
  	</div>
  	<div class="menu">
  		<ul>
  			<a href="/home"><li>HOME</li></a>
  			<a href="/portfolio"><li>PORTFOLIO</li></a>
  			<a href="/sobre"><li>SOBRE</li></a>
  			<a href="/servicos"><li>SERVIÇOS</li></a>
  			<a href="/contato"><li>CONTATOS</li></a>
  		</ul>
  		
  	</div>
  	<div class="container">
  		<?php   $this->loadViewInTemplate($viewName, $viewData);  ?>
  		
  	</div>

  	<div class="rodape">
  		
  	</div>
   
    
    
  </body>
</html>