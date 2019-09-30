<div class="mainContents">
    <div class="agridLCR">
        <div class="agItem ag0">
            <div class="sideMenu">
                <div class="head">Сервисы</div>
                <div class="body">
                    <a href="/inventory/">Рюкзак</a>
                    <a href="/shop/">Магазин</a>

                    <div>&nbsp;</div>

                    <a href="/mail/">Личная почта</a>
                    <a href="/user/search/">Найти персонажа</a>
                    <a href="/user/friends/">Друзья</a>
                    <a href="/user/sendmoney/">Денежные переводы</a>
                    <div>&nbsp;</div>
                    <a href="/user/settings/">Настройки персонажа</a>
                    <a href="/user/parameters/">Управление параметрами</a>

                    <div>&nbsp;</div>
                    <a href="/user/clans/">Кланы</a>
                </div>
            </div>

            <div class="sideMenu">
                <div class="head">Протоколы</div>
                <div class="body">
                    <a href="/log/battle?id=<?=$_COOKIE['id']?>">Проведенных боев</a>
                    <a href="/log/transfer?id=<?=$_COOKIE['id']?>">Движения денег</a>
                </div>
            </div>

            <div class="sideMenu">
                <div class="head">&nbsp;</div>
                <div class="body">
                    <a href="/user/logout/">Выход</a>
                </div>
            </div>
        </div>
        <?php foreach($data as $user): ;?>
        <div class="agItem ag1">
            <div class="pageTitle userTitle">
                <div class="right">
                    <span class="money"><?=$user['money']?> $</span><br>
                    <span class="money"><?=$user['euro']?> CAPS</span><br>
                </div>
                <a href="/user/info?id=<?=$user['id']?>"><?=$user['login']?></a>
            </div>

            <p class="liveHp">HP [<b class="current"><?=$user['health']*6?></b>/<b class="total"><?=$user['health']*6?></b>]</p>
            <div class="agrid12">
                <div class="ag12Item6">
                    <table class="tb1">
                        <tr>
                            <th colSpan="2">Уровни:</th>
                        </tr>
                        <tr>
                            <td>Боевой </td>
                            <td><b>4</b> (11012) <small>+7738</small> </td>
                        </tr><tr>
                            <td>Производственный</td>
                            <td><b>6</b> (124)  <small>+34</small></td>
                        </tr><tr>
                            <td>Экономический</td>
                            <td><b>3</b> (60)  <small>+4</small></td>
                        </tr>
                    </table>
                </div>
                <div class="ag12Item6">
                    <table class="tb1">
                        <tr>
                            <th colSpan=2><a href="/char/parameters/" class="bold">Параметры</a>:</th>
                        </tr>
                        <tr>
                            <td width="70%">Меткость</td>
                            <td><?=$user['accuracy']?></td>
                        </tr>
                        <tr>
                            <td>Здоровье</td>
                            <td><?=$user['health']?></td>
                        </tr>
                        <tr>
                            <td>Сила</td>
                            <td><?=$user['strength']?></td>
                        </tr>
                        <tr>
                            <td>Выносливость</td>
                            <td><?=$user['endurance']?></td>
                        </tr>
                    </table>
                </div>
                <div class="clear"> </div>
                <div class="ag12Item6">
                    <table class="tb1">
                        <tr>
                            <th colSpan=2>Умения:</th>
                        </tr>
                        <tr>
                            <td width="55%">Пистолеты</td>
                            <td><b>3</b> (28) <small>+28</small></td>
                        </tr><tr>
                            <td>Автоматы</td>
                            <td><b>1</b> (6) <small>+2</small></td>
                        </tr><tr>
                            <td>Ружья</td>
                            <td><b>6</b> (228) <small>+55</small></td>
                        </tr><tr>
                            <td>Винтовки</td>
                            <td><b>0</b> (0) <small>+1</small></td>
                        </tr><tr>
                            <td>Пулеметы</td>
                            <td><b>0</b> (0) <small>+1</small></td>
                        </tr><tr>
                            <td>Гранаты</td>
                            <td><b>4</b> (101) <small>+6</small></td>
                        </tr>
                    </table>
                </div>
                <div class="ag12Item6">
                    <table class="tb2">
                        <tr>
                            <th colspan="2"><a href="/inventory/" class="bold">Предметы</a>:</th>
                        </tr>
                        <tr>
                            <td>Очки</td>
                            <td><a href="/item/21/">Солнечные очки</a></td>
                        </tr>
                        <tr>
                            <td>Правая рука</td>
                            <td><a href="/item/16/">Обрез</a></td>
                        </tr>
                        <tr>
                            <td>Штаны</td>
                            <td><a href="/item/25/">Брюки «Legion»</a></td>
                        </tr>
                        <tr>
                            <td>Обувь</td>
                            <td><a href="/item/26/">Пустынные берцы</a></td>
                        </tr>
                        <tr>
                            <td>Автозаполнение</td>
                            <td><a href="/item/54/">Ящик гранат FG-1</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="agItem ag2">
            <div class="sideMenu">
                <div class="head">
                    <a href="/forum/section?id=1">Новости</a></div>
                <div class="body">
                    <?php foreach ($data2 as $news): ;?>
                        <a class="nodec" href="/forum/message?fid=1&amp;tid=<?=$news['id']?>"> - <span><?=$news['title']?></span></a>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="frame error">
                Последний раз вы работали на <a href="/map/object-1/">объекте</a>.
            </div>

            <div class="sideMenu">
                <div class="head">Друзья онлайн</div>
                <div class="body">
                    <a href="/char-info/1319/">Rafus</a>
                </div>
            </div>

        </div>
    </div>


    <div class="clear">&nbsp;</div>
</div>
<?php endforeach; ?>