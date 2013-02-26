<ul id="nav">
	<?php foreach($pages->visible() as $p): ?>
	<li><a href="<?=$p->url()?>"><?=$p->title()?></a></li>
	<?php endforeach ?>
</ul>