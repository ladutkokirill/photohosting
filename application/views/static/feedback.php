<?php echo HTML::script('js/alert.js') ?>
<form method="post" action="" id="login_form">
                    <label>Введите Ваш e-mail<i>*</i> :</label>
                    <input type="text" name="email" placeholder="e-mail" id="login_email" value="">
                    <br>
                    <br>

                    <label>Тема сообщения<i>*</i> :</label>
                                            <input type="text" name="subject" placeholder="Тема" id="login_email" value="">
                                        <br>
                    <br>
                    <label>Введите текст сообщения<i>*</i> :</label>
                    <textarea name="message" placeholder="Сообщение"></textarea>
                    <br>
                    <br><br><br>

                    <span><img src="/captcha/default?id=966086" width="150" height="50" alt="Captcha" class="captcha"></span>
                    <br>

                    <a href="#captcha" class="reload_captcha">Обновить картинку</a>
                    <br>
                    <br>
                    <label>Введите текст с картинки<i>*</i> :</label>
                    <input type="text" name="captcha" placeholder="Текст с картинки" id="">
                    <br>
                    <br>

                    <input type="submit" class="btn_register_bar"  value="Отправить">
                    <br>
                    <br>
                </form>
