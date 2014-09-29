<h1><i>ТОП 10 фотографий</i></h1>

<?php foreach ($photos as $photo): ?>
<img src="<?php echo HTML::chars($photo['way']);?>" width="200" height="200"/>

<?php endforeach ?><br>


<p><a href="<?php echo URL::site('picture/topbytoday'); ?>">за сегодня</a></p>
<p><a href="<?php echo URL::site('picture/topbyweek'); ?>">за неделю</a></p>
<p><a href="<?php echo URL::site('picture/topbyalltime'); ?>">за все время</a></p>
