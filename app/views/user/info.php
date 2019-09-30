<?php foreach ($data as $user): ;?>
<div class="mainContents">
    <div class="agridC">
        <div class="agItem ag0">
            <div class="pageTitle">
			<span class="right">
				[<B>m</B>][<b><?=$user['online']?></b>]</span>
                <?=$user['login']?>
            </div>
            <div class="agrid12">
                <div class="ag12Item6">
                    <table class="tb1">
                        <tr>
                            <th colspan="2">Статус: <?=$user['status']?></th>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Счет:</b> <span class="money"><?=$user['money']?> $</span><br />
                                    <b>HP [<?=$user['health']*6?>/<?=$user['health']*6?>]</b></p>
                                <p>
                                    &bull; <a href="/log/battle?id=<?=$user['id']?>" class="icon btlLogIcon">Протокол боев</a><br>
                                    &bull; <a href="/log/crime?id=<?=$user['id']?>" class="icon btlLogIcon">Протокол правонарушений</a><br>
                                    &bull; <a href="/log/transfer?id=<?=$user['id']?>" class="icon btlLogIcon">Протокол движения денег</a><br>
                                </p>
                            </td>
                            <td>
                                <p>
                                    <a href="/mail/new?to=<?=$user['login']?>" class="icon mailIcon nobr">Написать в личную почту</a><br>
                                    <a href="/user/friends?add=<?=$user['login']?>">Добавить в друзья</a>
                                </p>
                            </td>
                        </tr>
                    </table>


                    <div class="frameTitle">Клан:</div>
                    <div class="frame">
                        &bull; <a href="/clan/263/" class="bold">Vault 68</a>: »» Owner<br>

                    </div>


                    <div class="frameTitle">Сообщества:</div>
                    <div class="frame">
                        &bull; <a href="/clan/101/" class="bold">Старая гвардия</a>: Rafus<br>

                   </div>

                    <div class="">
                        <table class="tb1">
                            <tr>
                                <th>О себе:</th>
                            </tr>
                            <tr>
                                <td>
                                    <img src="http://images.desert.com.ru/1319_1362317018.jpeg" style="float: right; margin: 0 0 20px 20px">
                                    Когда-то был тут... <br />
                                    http://web.archive.org/web/20060720172451/http://dezert.ru/info.php?uin=7048<br />
                                    <br />
                                    Снова вернулсо...<br />
                                    <br />
                                    11.02.2013 - начало....<br />
                                    <br />
                                    <br />
                                    ----------------------------------------------------------------------------<br />
                                    <br />
                                    <br />
                                    Цыферки схавали моск<br />
                                    <br />
                                    <br />

                                </td>
                            </tr>
                        </table>
                    </div>
                </div>



                <div class="ag12Item3">
                    <table  class="tb2">
                        <tr>
                            <th colspan="2">Параметры:</th>
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

                    </table>
                </div>
                <div class="ag12Item3">
                    <table class="tb1">
                        <tr>
                            <th colSpan="2">Уровни:</th>
                        </tr>
                        <tr>
                            <td >Боевой </td>
                            <td><b><?=$user['blvl']?></b> (<?=$user['bexp']?>) <small>+7738</small> </td>
                        </tr><tr>
                            <td>Производственный</td>
                            <td><b><?=$user['plvl']?></b> (<?=$user['pexp']?>)  <small>+34</small></td>
                        </tr><tr>
                            <td>Экономический</td>
                            <td><b><?=$user['elvl']?></b> (<?=$user['elvl']?>)  <small>+4</small></td>
                        </tr>
                    </table>
                </div>
                <div class="ag12Item3">
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
                <div class="ag12Item3">
                    <table class="tb2">
                        <tr>
                            <th colspan="2">Предметы:</th>
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
                    </table>
                </div>

            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <div class="clear">&nbsp;</div>
</div>
