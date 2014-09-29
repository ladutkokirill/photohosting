<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>" />
<?php foreach($styles as $style): ?>
    <link href="<?php echo URL::base(); ?>css/<?php echo $style; ?>.css" 
    rel="stylesheet" type="text/css" />
<?php endforeach; ?>
  
   
 
</head>
 
<body>
  <div class="layer">
    <div class="container">
      <div class="header"><h1>Фотохостинг</h1></div>
 
      <div class="left">
        <h3>Меню</h3>
        <br />
        <ul>
          <li><a href="<?php echo URL::site(); ?>">Главная</a></li>
          <li><a href="<?php echo URL::site('static/about'); ?>">О сайте</a></li>
          <li><a href="<?php echo URL::site('static/contacts'); ?>">Мои контакты</a></li> 
          <li><a href="<?php echo URL::site('news/news'); ?>">Новости</a></li> 
          <li><a href="<?php echo URL::site('static/help'); ?>">Помощь</a></li> 
          <li><a href="<?php echo URL::site('static/termsofservice'); ?>">Пользовательское соглашение</a></li> 
          <li><a href="<?php echo URL::site('picture/top'); ?>">ТОП 10</a></li> 
          <li><a href="<?php echo URL::site('static/feedback'); ?>">Обратная связь</a></li> 
        </ul>
      </div>
      <div class="content">
          <?php echo $content; ?></div>
      <form action='<?php echo URL::site('picture/loadkomp'); ?>'>
        <button type="submit" style="background-color: #FBC2C4;border-radius: 10px; ">Загрузить фото</button>
</form>
      
      <div class="clearing"></div>
     
      <div class="footer">2014 Все права защищены  <br> Изображений на фотохостинге:
          <?php $photo = ORM::factory('photo');  echo $content=$photo->countFile(); ?> <br>
За сутки загружено:<?php   echo $content=$photo->countFileDay(); ?> фотографий <br> <img src="http://i63.fastpic.ru/big/2014/0514/58/9c3a32f8889e67ba6225a8431f519058.gif" width="40" height="20" alt="php"></div>
                  
    </div>
  </div>
</body>
</html>