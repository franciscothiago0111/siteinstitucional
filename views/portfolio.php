<h1> portfolio recente</h1>
    <?php foreach ($portfolio as $value): ?>
    	<div class="portfolio_item">
    		<img src="assets/images/portfolio/<?php echo $value['imagem']; ?>" border="0" width="200" height="150">
    	</div>
    	<?php endforeach;?>
    	<div style="clear:both;"></div>