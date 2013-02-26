<?php snippet('header') ?>
<div id="content">
	<div id="posts">
		<div class="post">
			<h3 class="post-title"><a href="<?=$page->url()?>"><?=$page->title()?></a></h3>
			<div class="post-meta"><?=$page->date('F jS Y')?></div>
			<p><?=kirbytext($page->headerimage())?></p>
			<?=kirbytext($page->body())?>
		</div>
	</div>
</div>
<?php snippet('footer')?>

