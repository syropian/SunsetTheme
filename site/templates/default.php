<?php snippet('header') ?>
<div id="content">
	<div id="posts">
		<div class="post">
			<h3 class="post-title"><?=$page->title()?></h3>
			<?=kirbytext($page->body())?>
		</div>
	</div>
</div>
<?php snippet('footer')?>

