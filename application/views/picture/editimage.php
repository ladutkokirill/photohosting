<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $title; ?></title>


    </head>
    <body>
        <h1>Редактирование фотографии</h1>
        <img src="<?php echo $src ?>"  width="400" height="300"/>

        <br>
            <form enctype="multipart/form-data" method="post" action="">
                <div > Ширина:<input type="text" name="width" value=""><br>
                            Высота: <input type="text" name="heigth" value="">
                                </div>
                                <div>     
                                    <input type="radio" name="turn" value="90">Повернуть на 90 градусов<Br>
                                            <input type="radio" name="turn" value="180">Повернуть на 180 градусов<Br>
                                                    <input type="radio" name="turn" value="270">Повернуть на 270 градусов<br>
                                                            <input type="submit" name="submit" value="Сохранить" /><br>
                                                                </div>
                                                                </form>
                                                                </body>


                                                                </html>
































<!--<form  enctype="multipart/form-data" method="post" action="">
<div class="fieldsets well well-small">
    <label class="btn btn-toggle btn-primary active" for="resize">
        <input type="checkbox" id="resize" name="resize" value="true"> Изменить размеры изображения
    </label>
    <hr>
    <span class="form-inline">
        <label>Ширина: <input name="width" size="10" type="text" class="resize_elements span2"></label>
        <label>Высота: <input name="height" size="10" type="text" class="resize_elements span2"></label>
    </span>
</div>
<div class="fieldsets well well-small">
    <label class="btn btn-toggle btn-primary active" for="turn">
        <input type="checkbox" id="turn" name="turn" value="true" onchange=""> Поворот</label>
    <hr>
    <span class="form-inline">
        <label>По часовой стрелке на 90 градусов: <input type="button" value=" Повернуть " class="turn_elements span2"></label><br>
        <label>Против часовой стрелки на 90 градусов:<input type="button" value=" Повернуть "  class="turn_elements span2"></label>
    </span>
    <br><br>
    </div>

<input type="submit" name="submit" value="Изменить" />

</form> -->