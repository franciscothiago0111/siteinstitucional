<div class="home_sobre">
	<img src="" border="0" width="150" height="150" />
	<h4>Sobre</h4>
	Sublime Text may be downloaded and evaluated for free, however a license must be purchased for continued use.
    Licenses are per-user, rather than per-machine, so you can enjoy Sublime Text on as many computers and operating systems as you wish with your license. More…

</div>

<div class="home_portfolio">
	<h4> portfolio recente</h4>
    <?php foreach ($portfolio as $value): ?>
    	<div class="portfolio_item">
    		<img src="assets/images/portfolio/<?php echo $value['imagem']; ?>" border="0" width="200" height="150">
    	</div>
    	<?php endforeach;?>
    	<div style="clear:both;"></div>
</div>
