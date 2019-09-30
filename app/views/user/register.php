<div class="mainContents">
    <div class="centerGrid">
        <div class="gridItem4">
            <div class="pageTitle">Регистрация в игре</div>
            <?=$data?>
            <div class="frame grid">
                <div class="gridItem2">
                    <form method="post" action="/user/register" name="reg" class="regForm">
                        <p>
                            <label>
                                <span>Логин:</span>
                                <input type="text" name="login" autocomplete="off" value="" required>
                            </label>
                        </p>
                        <p>
                            <label>
                                <span>Почта:</span>
                                <input type="text" name="mail" autocomplete="off" value="" >
                            </label>
                        </p>
                        <p>
                            <label>
                                <span>Пароль:</span>
                                <input type="password" name="pass1" autocomplete="off"  value="" required>
                            </label>
                        </p>
                        <p>
                            <label>
                                <span>Повторите пароль:</span>
                                <input type="password" name="pass2" autocomplete="off"  value="" required>
                            </label>
                        </p>
                        <!--<p>
                            <label>
                                <img src="/kcaptcha/">
                                <input type="text" autocomplete="off" name="captcha" style="width: 80px; vertical-align: top; margin-top: 15px; margin-left: 13px;">
                            </label>
                        </p>
                        <p>
                            <label>
                                <span>Пол:</span>
                                <select name="gender">
                                    <option value="m" >Мужской</option>
                                    <option value="f" >Женский</option>
                                </select>
                            </label>
                        </p>-->
                        <p>
                            <label>
                                <input type="checkbox" name="eula"  value="agree">
                                Я принимаю все условия
                                <a href="/help/eula">пользовательского соглашения</a>.
                            </label>
                        </p>
                        <p>
                            <input type="submit" name="reg" value="Зарегистрироваться">
                        </p>
                    </form>
                </div>
                <div class="gridItem3">
                    <div class="frame">
                        <p>
                            <b>Логин — имя персонажа</b> может содержать русские или английские буквы (но не те и другие вместе), цифры и знаки «-», «_» и пробел.
                            <br>В логине должно быть от 3 до 27 символов и начинаться он должен с буквы.</p>
                        <p>
                            <b>Почта</b> почта пригодится если вы вдруг забудете пароль, так же можно включить
                            <a href="/help/mail-frowarding">перенаправление</a> личных сообщений на почту.
                        <p><b>Пароль</b> может содержать от 6 до 30 любых символов.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear">&nbsp;</div>
</div>


<!--
    <div class="col-md-4">
        <div class="card my-4">
            <h5 class="card-header">Регистрация</h5>
            <div class="card-body">
                <form role="form" action="/user/register" method="post" name="reg">
                    <table align="center">
                        <tr>
                            <td>
                                <input class="form-control" type="text" name="login" required placeholder="| Введите логин">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-control" type="password" name="pass1" required placeholder="| Введите пароль">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-control" type="password" name="pass2" required placeholder="| Повторите пароль">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="captcha.php" /><br>
                                <input class="form-control" type="text" name="captcha"  placeholder="| Введите текст"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br>
                                <input class="btn btn-success" type="submit" name="reg" value="Регистрация">
                                <a class="btn btn-default" href="/user/login">Авторизация</a>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
-->