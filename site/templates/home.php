<?php snippet('header') ?>
<div id="content">
	<div id="posts">
		<?php $posts = $pages->findByTitle('Articles')->children()->visible()->paginate(3) ?>
		<?php foreach($posts as $post):?>
		<div class="post">
			<h3 class="post-title"><a href="<?=$post->url()?>"><?=$post->title()?></a></h3>
			<div class="post-meta"><?=$post->date('F jS Y')?></div>
			<p><?=kirbytext($post->headerimage())?></p>
			<?=Helper::summary(kirbytext($post->body()))?>
			<div class="read-more"><a href="<?=$post->url()?>">Read More</a></div>
		</div>
		<?php endforeach;?>
		<?php if($posts->pagination()->hasPages()): ?>
		<div class="pagination">  

		  <?php if($posts->pagination()->hasNextPage()): ?>
		  <a class="prev" href="<?php echo $posts->pagination()->nextPageURL() ?>">&larr; Older</a>
		  <?php endif ?>

		  <?php if($posts->pagination()->hasPrevPage()): ?>
		  <a class="next" href="<?php echo $posts->pagination()->prevPageURL() ?>">Newer &rarr;</a>
		  <?php endif ?>
		<div class="cf"></div>
		</div>

		<?php endif ?>
	</div>
</div>
<?php snippet('footer')?>

