<?php echo HTML::script('js/script.js') ?>
<form enctype="multipart/form-data" method="post" action="">
    Изображение: <input type="file" name="photos[]"  multiple="true" multiple accept="image/*"/>
                 
    
    
    <p><strong>Введите имя картинки</strong></p>
    <p><input type="text" name="picturename" maxlength="25" size="40" value=""></p>
    <div >  Ширина:<input type="text" name="width" value=""><br>
            Высота: <input type="text" name="height" value="">
    </div>
    
   

    На превью:
    <div id="prew">
        <input type = 'radio' id = 'cb1' name="pre" value="nothing" onchange = 'showOrHide("cb1", "cat1");'/>Ничего
        <br />
        <div id = 'cat1' style = 'display: none;' ></div>
        <input type = 'radio' id = 'cb2' name="pre" value="size" onchange = 'showOrHide("cb2", "cat2");' />Размеры изображения
        <br />
        <div id = 'cat2' style = 'display: none;' ></div>

        <input type = 'radio' id = 'cb3' name="pre" value="text"  onchange = 'showOrHide("cb3", "cat3");' />Текст
        <br />
        <div id = 'cat3' style = 'display: none;' ><input type="text" name="textpre" value=""/><br>
            
            Цвет текста :<br>Зелёный  <input type="radio" name="color" id="green" value="0, 255, 0">
            Синий  <input type="radio" name="color" id="blue" value="0,0,255">
            Красный  <input type="radio" name="color" id="red" value="255,0,0" ><br>
            Выберите шрифт текста:<br>
            Arial <input type="radio" name="font" id="font1" value="arial.ttf">
            Verdana<input type="radio" name="font" id="font2" value="Verdana.ttf">
            Florence<input type="radio" name="font" id="font3" value="GIGI.ttf"><br>
            Выберите размера шрифта:<br>
            12 <input type="radio" name="size" id="size1" value="12">
            16<input type="radio" name="size" id="size2" value="16">
            20<input type="radio" name="size" id="size3" value="20"><br>
            
            

        </div>
      
            Ширина : <input type="text" name="reswidth" value=""> пропорции сохраняются
      
  
  </div>
  <input type="submit" name="submit" value="Загрузить" /><br>
</form>
<h3>"Разрешенные форматы:<br>

JPG, GIF, PNG<br>
max: 5 MB<br>
разрешение: до 5000x5000 px<br>
до 20 одновременно"</h3>
<br />





 