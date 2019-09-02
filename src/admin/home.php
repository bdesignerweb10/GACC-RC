<?php
	require_once('header.php');
?>
<main>
	<div class="container">
		<div class="row default">
			<div class="col-sm-8">
				<h1><?php echo strftime('Rio Claro, %d de %B de %Y', strtotime('today')); ?></h1>				
				<p>Status do Site: <strong class="text-success">Online</strong></p>				
			</div>
			<div class="col-sm-4 access">
				<?php
					require_once('acesso-rapido.php');
				?>
			</div>
		</div><!-- row -->		
	</div><!-- container -->
</main>
<?php
	require_once('footer.php');
?>