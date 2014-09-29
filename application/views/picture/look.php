<h1>Фото которые уже загружены</h1>
</br>
<?php foreach ($photos as $photo): ?>
 
    <div style="padding:10px; margin-bottom:10px; border-bottom:#333 2px solid;"> 
        <?php echo $photo->picturename; ?> <br />
        <i>ip пользователя который загрузил изображение: <?php echo $photo->ipuser; ?></i> / 
        <i>Количество просмотров: <?php echo $photo->rating; ?></i><br /><br />
        <p><a href="<?php echo URL::site("picture/looking/".$photo->id); ?>"> <img src="<?php echo  $photo->way_preview; ?>" /></a></p><br>
        <h3><i>дата загрузки на сайт</i></h3> <?php echo $photo->upload_date ?>
         
    </div>
 

<?php endforeach ?>


			