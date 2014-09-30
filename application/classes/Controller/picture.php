<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Picture extends Controller_Common
{

    // Cтраница главная
    public function action_index()
    {
        $content = View::factory('/picture/show');
        $this->template->content = $content;
    }

     //Страница ТОП
    public function action_top()
    {

        $photo = ORM::factory('photo');

        $content = View::factory('/picture/top', array('photos' => $photo->topImage()));



        $this->template->content = $content;
    }
   

    public function action_topbytoday()
    {
        $photo = ORM::factory('photo');
        $content = View::factory('/picture/topbytoday', array('photos' => $photo->countByCreateToday()));
        $this->template->content = $content;
    }

    public function action_topbyweek()
    {
        $photo = ORM::factory('photo');
        $content = View::factory('/picture/topbyweek', array('photos' => $photo->countByCreateWeek()));
        $this->template->content = $content;
    }

    public function action_topbyalltime()
    {
        $photo = ORM::factory('photo');
        $content = View::factory('/picture/topbyalltime', array('photos' => $photo->topImage()));
        $this->template->content = $content;
    }

    // Cтраница добавления 
    public function action_add()
    {



        $photo = ORM::factory('photo');

        $content = View::factory('/picture/add');


        $this->template->content = $content;
    }

    // Страница редактирования фотографий
    public function action_edit()
    {
        $photo = ORM::factory('photo');   //создание пустого объекта
        $content = View::factory('/picture/edit', array('photos' => $photo->find_all()));  //указываем на вьюшку и вызываем метод к объекту
        $this->template->content = $content;
        
    }

    public function action_editimage()
    {
         

        $id = $this->request->param('id');
        $photo = ORM::factory('photo', $id);
        $content = View::factory('/picture/editimage', array(
                    'src' => $photo->way,
                    'name' => $photo->picturename,
                    'ip' => $photo->ipuser,
                    'view' => $photo->rating
        ));
        if (isset($_POST['submit']))
        {
            $photo->editImageWidth($id);
            $photo->editImageHeigth($id);


            // echo '<pre>', print_r($_POST), '</pre>';

            if (isset($_POST['turn']))
            {
                $filename = DOCROOT . '/public/' . $photo->way;
                $source = imagecreatefromjpeg($filename);
                $degrees = ($_POST["turn"]);
                $rotate = imagerotate($source, $degrees, 0);
                imagejpeg($rotate, DOCROOT . '/public/' . $photo->way);
            }
            $photo->save();
        }



        $this->template->content = $content;
    }

    // Страница просмотра уже загруженных фотографий
    public function action_look()
    {


        $photo = ORM::factory('photo');   //создание пустого объекта без указания id
        $content = View::factory('/picture/look', array('photos' => $photo->order_by('upload_date','DESC')->find_all()));  //указываем на вьюшку

        $this->template->content = $content;
    }

    public function action_looking()
    {
        $id = $this->request->param('id');
        $photo = ORM::factory('photo', $id);
        $content = View::factory('/picture/looking', array(
                    'src' => $photo->way,
                    'name' => $photo->picturename,
                    'ip' => $photo->ipuser,
                    'view' => $photo->rating,
                    'data' => $photo->upload_date
        ));
        $photo->update_view($id);
        $this->template->content = $content;
        $photo->save();
    }

    // Загрузка фото с компьютера

    public function action_loadkomp()
    {
        $content = View::factory('/picture/loadkomp');
        $this->template->content = $content;
        $photo = ORM::factory('photo');
        if (isset($_POST['submit']))
        {

            if (isset($_FILES))
            {


                $count = count($_FILES['photos']['tmp_name']);
                for ($i = 0; $i < $count; $i++)
                {


                    if (is_uploaded_file($_FILES["photos"]["tmp_name"][$i]))
                    {

                        $FILES_URL = $_FILES["photos"]["tmp_name"][$i];
                        $original_url = DOCROOT . '/public/picture/' . $_FILES["photos"]["name"][$i];
                        $thumb_url = DOCROOT . '/public/picture/thumbs/' . $_FILES["photos"]["name"][$i];
                        $preview = '/picture/thumbs/' . $_FILES["photos"]["name"][$i];

//echo '<pre>', print_r($_POST), '</pre>';
                        if (move_uploaded_file($FILES_URL, $original_url))
                        {

                            copy($original_url, $thumb_url);

                            $photo = ORM::factory('photo');
                            $photo->way = '/picture/' . $_FILES["photos"]["name"][$i];
                            $photo->ipuser = Request::$client_ip;
                            $photo->picturename = $_POST["picturename"];
                            $photo->rating = 0;
                            $photo->heigth = ($_POST["height"]);
                            $photo->width = ($_POST["width"]);
                            $photo->upload_date = date("Y-m-d H:i:s ");



                            if (!isset($q))
                                $q = 100;
                            $image_data = getimagesize($original_url);
                            $w_src = $image_data['0'];
                            $h_src = $image_data['1'];

                            $w = ($_POST["reswidth"]);
                            if ($w_src != $w)
                            {

                                $ratio = $w_src / $w;
                                $w_dest = round($w_src / $ratio);
                                $h_dest = round($h_src / $ratio);



                                $file_type = getimagesize($thumb_url);
                                // var_dump($file_type);
                                //  print_r($file_type[3]);
                                $width = $w_dest;
                                $height = $h_dest;
                                $file = $thumb_url;

                                //определяем тип файла
                                if ($file_type[2] == 1)
                                {
                                    $image = imagecreatefromgif($file);
                                } elseif ($file_type[2] == 2)
                                {
                                    $image = imagecreatefromjpeg($file);
                                } elseif ($file_type[2] == 3)
                                {
                                    $image = imagecreatefrompng($file);
                                } else
                                {
                                    $image = imagecreatefromjpg($file);
                                }

                                $image2 = @imagecreatetruecolor($width, $height);

                                imagecopyresized($image2, $image, 0, 0, 0, 0, $width, $height, $file_type[0], $file_type[1]);

                                if ($file_type[2] == 1)
                                {
                                    imagegif($image2, $file);
                                } elseif ($file_type[2] == 2)
                                {
                                    imagejpeg($image2, $file);
                                } elseif ($file_type[2] == 3)
                                {
                                    imagepng($image2, $file);
                                } else
                                {
                                    imagejpeg($image2, $file);
                                }
                                //   print_r($_FILES);
                                if (isset($_POST['submit']))
                                {

                                    $selected_radio = $_POST['pre'];
                                    if ($selected_radio === 'nothing')
                                    {


                                        $file_type = getimagesize($thumb_url);
                                        // var_dump($file_type);
                                        //  print_r($file_type[3]);
                                        $width = $w_dest;
                                        $height = $h_dest;
                                        $file = $thumb_url;
                                        if ($file_type[2] == 1)
                                        {
                                            $image = imagecreatefromgif($file);
                                        } elseif ($file_type[2] == 2)
                                        {
                                            $image = imagecreatefromjpeg($file);
                                        } elseif ($file_type[2] == 3)
                                        {
                                            $image = imagecreatefrompng($file);
                                        } else
                                        {
                                            $image = imagecreatefromjpg($file);
                                        }

                                        $image2 = @imagecreatetruecolor($width, $height);

                                        imagecopyresized($image2, $image, 0, 0, 0, 0, $width, $height, $file_type[0], $file_type[1]);

                                        if ($file_type[2] == 1)
                                        {
                                            imagegif($image2, $file);
                                        } elseif ($file_type[2] == 2)
                                        {
                                            imagejpeg($image2, $file);
                                        } elseif ($file_type[2] == 3)
                                        {
                                            imagepng($image2, $file);
                                        } else
                                        {
                                            imagejpeg($image2, $file);
                                        }
                                        $photo->way_preview = $preview;
                                        $photo->save();
                                    }

                                    $selected_radio = $_POST['pre'];
                                    if ($selected_radio === 'size')
                                    {


                                        $file_type = getimagesize($thumb_url);
// var_dump($file_type);
                                        //  print_r($file_type[3]);
                                        $width = $w_dest;
                                        $height = $h_dest;
                                        $file = $thumb_url;
                                        $color = ($_POST["color"]);
                                        $colors = explode(",", $color);

                                        $col = imagecolorallocate($image2, $colors[0], $colors[1], $colors[2]);

// Текст надписи
                                        $text = ($file_type[3]);
// Замена пути к шрифту на пользовательский
                                        $size = ($_POST["size"]);
                                        $font = DOCROOT . '/public/picture/' . ($_POST["font"]);
                                        imagettftext($image2, $size, 0, 10, 20, $col, $font, $text);

                                        imagejpeg($image2, $file);
                                        print_r($_POST);
                                        $photo->way_preview = $preview;
                                        $photo->save();
                                    }


                                    //print_r($_POST);
                                    else if ($selected_radio === 'text')
                                    {
                                        $color = ($_POST["color"]);
                                        $colors = explode(",", $color);

                                        $col = imagecolorallocate($image2, $colors[0], $colors[1], $colors[2]);

// Текст надписи
                                        $text = ($_POST["textpre"]);
// Замена пути к шрифту на пользовательский
                                        $size = ($_POST["size"]);
                                        $font = DOCROOT . '/public/picture/' . ($_POST["font"]);
                                        imagettftext($image2, $size, 0, 10, 20, $col, $font, $text);

                                        imagejpeg($image2, $file);

                                        $photo->way_preview = $preview;
                                        $photo->save();
                                    }
                                }
                            }
                        }
                    }
                    if (isset($_POST['submit']))
                    {
                        $this->redirect('/picture/look');
                    } else
                    {
                        echo("Ошибка загрузки файла");
                    }
                }
            }
        }
    }

    //die;
    //var_dump($_POST); die;
    // Страница загрузки фото по ссылке
    public function action_loadlink()
    {
        $content = View::factory('/picture/loadlink');
        $this->template->content = $content;



        if (isset($_POST['submit']))
        {
            $photo = ORM::factory('photo');

            $ch = curl_init($_POST['way']);
            $tmpfname = tempnam(DOCROOT . '/public/picture', "");
            //var_dump($tmpfname); die;
            $fp = fopen($tmpfname, 'wb');

            curl_setopt($ch, CURLOPT_FILE, $fp);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_exec($ch);
            curl_close($ch);
            fclose($fp);
            //rename($tmpfname, $newname);
            //var_dump('/picture/'.  substr($tmpfname,  strrpos($tmpfname, DIRECTORY_SEPARATOR)+1, strlen($tmpfname))); die;
            $preview = '/picture/thumbs/' . substr($tmpfname, strrpos($tmpfname, DIRECTORY_SEPARATOR) + 1, strlen($tmpfname));
            $thumb_url = DOCROOT . '/public/picture/thumbs/' . substr($tmpfname, strrpos($tmpfname, DIRECTORY_SEPARATOR) + 1, strlen($tmpfname));
            $url_photo = DOCROOT . '/public/picture/' . substr($tmpfname, strrpos($tmpfname, DIRECTORY_SEPARATOR) + 1, strlen($tmpfname));
            copy($url_photo, $thumb_url);
            $photo->way = '/picture/' . substr($tmpfname, strrpos($tmpfname, DIRECTORY_SEPARATOR) + 1, strlen($tmpfname));
            $photo->ipuser = Request::$client_ip;
            $photo->picturename = $_POST["picturename"];
            $photo->rating = 0;
            $photo->heigth = ($_POST["height"]);
            $photo->width = ($_POST["width"]);
            $photo->way_preview = $preview;
            $photo->upload_date = date("Y-m-d H:i:s ");
            $image_data = getimagesize($url_photo);

            $w_src = $image_data['0'];
            $h_src = $image_data['1'];
//            echo "$h_src <br> ";
//            echo "$w_src <br>";

            $w = ($_POST["reswidth"]);
            if ($w_src != $w)
            {

                $ratio = $w_src / $w;
                $w_dest = round($w_src / $ratio);
                $h_dest = round($h_src / $ratio);
//                echo "$ratio <br>";
//                echo "$w_dest <br>";
//                echo "$h_dest <br>";


                $file_type = getimagesize($thumb_url);
                // var_dump($file_type);
                //  print_r($file_type[3]);
                $width = $w_dest;
                $height = $h_dest;
                $file = $thumb_url;
//                echo "$width <br>";
//                echo "$height";

                if ($file_type[2] == 1)
                {
                    $image = imagecreatefromgif($file);
                } elseif ($file_type[2] == 2)
                {
                    $image = imagecreatefromjpeg($file);
                } elseif ($file_type[2] == 3)
                {
                    $image = imagecreatefrompng($file);
                } else
                {
                    $image = imagecreatefromjpg($file);
                }
                // print_r($image);
                $image2 = @imagecreatetruecolor($width, $height);

                imagecopyresized($image2, $image, 0, 0, 0, 0, $width, $height, $file_type[0], $file_type[1]);

                if ($file_type[2] == 1)
                {
                    imagegif($image2, $file);
                } elseif ($file_type[2] == 2)
                {
                    imagejpeg($image2, $file);
                } elseif ($file_type[2] == 3)
                {
                    imagepng($image2, $file);
                } else
                {
                    imagejpeg($image2, $file);
                }

                if (isset($_POST['submit']))
                {

                    $selected_radio = $_POST['pre'];
                    if ($selected_radio === 'nothing')
                    {


                        $file_type = getimagesize($thumb_url);
                        // var_dump($file_type);
                        //  print_r($file_type[3]);
                        $width = $w_dest;
                        $height = $h_dest;
                        $file = $thumb_url;
                        if ($file_type[2] == 1)
                        {
                            $image = imagecreatefromgif($file);
                        } elseif ($file_type[2] == 2)
                        {
                            $image = imagecreatefromjpeg($file);
                        } elseif ($file_type[2] == 3)
                        {
                            $image = imagecreatefrompng($file);
                        } else
                        {
                            $image = imagecreatefromjpg($file);
                        }

                        $image2 = @imagecreatetruecolor($width, $height);

                        imagecopyresized($image2, $image, 0, 0, 0, 0, $width, $height, $file_type[0], $file_type[1]);

                        if ($file_type[2] == 1)
                        {
                            imagegif($image2, $file);
                        } elseif ($file_type[2] == 2)
                        {
                            imagejpeg($image2, $file);
                        } elseif ($file_type[2] == 3)
                        {
                            imagepng($image2, $file);
                        } else
                        {
                            imagejpeg($image2, $file);
                        }
                        $photo->way_preview = $preview;
                        $photo->save();
                    }

                    $selected_radio = $_POST['pre'];
                    if ($selected_radio === 'size')
                    {


                        $file_type = getimagesize($thumb_url);
// var_dump($file_type);
                        //  print_r($file_type[3]);
                        $width = $w_dest;
                        $height = $h_dest;
                        $file = $thumb_url;
                        $color = ($_POST["color"]);
                        $colors = explode(",", $color);

                        $col = imagecolorallocate($image2, $colors[0], $colors[1], $colors[2]);

// Текст надписи
                        $text = ($file_type[3]);
// Замена пути к шрифту на пользовательский
                        $size = ($_POST["size"]);
                        $font = DOCROOT . '/public/picture/' . ($_POST["font"]);
                        imagettftext($image2, $size, 0, 10, 20, $col, $font, $text);

                        imagejpeg($image2, $file);
                        //   print_r($_POST);
                        $photo->way_preview = $preview;
                        $photo->save();
                    }


                    //print_r($_POST);
                    else if ($selected_radio === 'text')
                    {
                        $color = ($_POST["color"]);
                        $colors = explode(",", $color);

                        $col = imagecolorallocate($image2, $colors[0], $colors[1], $colors[2]);

// Текст надписи
                        $text = ($_POST["textpre"]);
// Замена пути к шрифту на пользовательский
                        $size = ($_POST["size"]);
                        $font = DOCROOT . '/public/picture/' . ($_POST["font"]);
                        imagettftext($image2, $size, 0, 10, 20, $col, $font, $text);

                        imagejpeg($image2, $file);

                        $photo->way_preview = $preview;
                        $photo->save();

                        //$url_photo='/picture/' . substr($tmpfname, strrpos($tmpfname, DIRECTORY_SEPARATOR) + 1, strlen($tmpfname));
                        //print_r($url);
                        // $photo->save();
                    }
                }
            }
        }
    }

    public function action_putimage()
    {



        $content = View::factory('/picture/putimage');
        $this->template->content = $content;
    }

}
