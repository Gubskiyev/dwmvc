<div class="mainContents">
    <div class="centerGrid">
        <div class="gridItem4">
            <div class="pageTitle">Авторизация</div>

            <?=$data?>

            <div class="frame grid">
                <div class="gridItem2">
                    <form method="post" action="/user/login/" name="auth" class="regForm">
                        <p>
                            <label><span>Логин:</span><input type="text" name="login" value=""></label>
                        </p>
                        <p>
                            <label><span>Пароль:</span> <input type="password" name="pass" value=""></label>
                        </p>
                        <p>
                            <input type="submit" name="auth" value="Вход"></p>
                    </form>
                </div>
                <div class="gridItem3">

                </div>
            </div>
        </div>
    </div>
    <div class="clear">&nbsp;</div>
</div>



<!--<div class="col-md-4">
    <div class="card my-4">
        <h5 class="card-header">Вход</h5>
        <div class="card-body">
            <form role="form" action="/user/login/" method="post" name="auth">
                <table align="center">
                    <tr>
                        <td>
                            <input class="form-control" type="text" name="login" required placeholder="| Введите логин">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="form-control" type="password" name="pass" required placeholder="| Введите пароль">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                            <input class="btn btn-success" type="submit" name="auth" value="Авторизация">
                            <a class="btn btn-default" href="/user/register/">Регистрация</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
-->