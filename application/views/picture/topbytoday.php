<h1><i>ТОП 10 фотографийза сегодня</i></h1>


<?php foreach ($photos as $photo): ?>
<img src="<?php echo HTML::chars($photo['way']);?>" width="200" height="200"/>

<?php endforeach ?><br>