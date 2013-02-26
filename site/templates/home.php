<?php snippet('header') ?>
<div id="content">
	<div id="posts">
		<?php $posts = $pages->findByTitle('Articles')->children()->visible()->flip()->paginate(5) ?>
		<?php foreach($posts as $post):?>
		<div class="post">
			<h3 class="post-title"><a href="<?=$post->url()?>"><?=$post->title()?></a></h3>
			<div class="post-meta"><?=$post->date('F jS Y')?></div>
			<p><?=kirbytext($post->headerimage())?></p>
			<?=Helper::summary(kirbytext($post->body()))?>
			<div class="read-more"><a href="<?=$post->url()?>">Read More</a></div>
		</div>
		<?php endforeach;?>
	</div>
</div>
<?php snippet('footer')?>

