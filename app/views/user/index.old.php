<div class="col-lg-8">

    <h5 class="mt-4">Ваш персонаж</h5>
        <?php foreach($data as $user): ;?>


            <div id="login">
                <a href="info?id=<?=$user['id']?>">
                    <?=$user['login']?>
                </a>
            </div>

            <!--НОВАЯ ПОЧТА -->
            <?php
                if($user['mailstatus'] == 1) {
                    echo '<a class="newmail" href="/mail/">'.'Новая почта!'.'</a>';
                }
            ?>

            <div id="money">
                Наличность: <b>$<?=$user['money']?></b>
                <?php
                    if($user['euro'] != 0)
                    {
                        echo "<br>Евро-юниты: <b>&#8364;".$user['euro']."</b>";
                    }

                ?>
            </div>
            <br>
            <div id="hp">
                Здоровье: <?=$user['health']*6?>/<?=$user['health']*6?>
            </div>

            <br>

            <div id="lvl">
                <div id="title">
                    <b>Уровни:</b>
                </div>
                <div id="blvl">
                    <span class="blvl">Боевой: <b><?=$user['blvl']?></b> (<?=$user['bexp']?>)</span>
                </div>
                <div id="elvl">
                    <span class="elvl">Экономический: <b><?=$user['elvl']?></b> (<?=$user['eexp']?>)</span>
                </div>
                <div id="plvl">
                    <span class="plvl">Производственный: <b><?=$user['plvl']?></b> (<?=$user['pexp']?>)</span>
                </div>

                <hr>

                <div id="raion">
                    <div id="street">
                        Район: [M] DownTown
                    </div>
                    <div id="status">
                        Статус: <?=$user['status']?>
                    </div>
                </div>

                <hr>

                <div id="params">
                    <div id="str">
                        Сила: <?=$user['strength']?>
                    </div>
                    <div id="agl">
                        Меткость: <?=$user['accuracy']?>
                    </div>
                    <div id="life">
                        Здоровье: <?=$user['health']?>
                    </div>
                    <div id="end">
                        Выносливость: <?=$user['endurance']?>
                    </div>
                </div>
                <br>
                <div id="skill">
                    <table border="1">
                        <tr>
                            <td>
                                Пистолеты:
                            </td>
                            <td>
                                <?=$user['']?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>


    <div class="col-md-4">
        <div class="card my-4">
            <h5 class="card-header">Меню</h5>
            <div class="card-body">
                <div class="list-unstyled mb-0">
                    <ul>
                        <li><a href="/inventory">Инвентарь</a></li>
                        <li><a href="/shop">Магазин</a></li>
                        <li><a href="/mail">Почта</a></li>
                        <li><a href="/user/search">Найти персонажа</a></li>
                        <li><a href="/user/sendmoney">Перевод денег</a></li>
                        <li><a href="/log/transfer?id=<?=$_COOKIE['id']?>">Протокол переводов</a></li>
                        <li><a href="/log/battle?id=<?=$_COOKIE['id']?>">Протокол боев</a></li>
                        <li><a href="/user/setting">Настройки<a/></li>
                        <li><a href="/user/logout"><font color="darkred">Выход</font><a/></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card my-4">
            <h5 class="card-header">Новости</h5>
            <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <?php foreach ($data2 as $news): ;?>
                        <li>
                            <a href="/forum/message?fid=1&amp;tid=<?=$news['id']?>"><?=$news['title']?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
            </div>
        </div>

    </div>

<?php endforeach; ?>