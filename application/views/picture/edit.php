Выберите фотографию для редактирования

<?php foreach ($photos as $photo): ?>
 
    <div style="padding:10px; margin-bottom:10px; border-bottom:#333 2px solid;"> 
        <?php echo $photo->picturename; ?> <br />
        <i>ip пользователя который загрузил изображение: <?php echo $photo->ipuser; ?></i> / 
        <i>Количество просмотров: <?php echo $photo->rating; ?></i><br /><br />
        <p> <a href="<?php echo URL::site("picture/editimage/".$photo->id); ?>">  <img src="<?php echo  $photo->way; ?>"  width="<?php echo $photo->width ?>" height="<?php echo $photo->heigth ?>"/> </p>
    </div>
 

<?php endforeach ?>

