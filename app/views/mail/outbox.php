

<div class="mainContents">
    <div class="agridLC">
        <div class="agItem ag0">
            <div class="sideMenu">
                <div class="head">Письма</div>
                <div class="body">
                    <a href="/mail/" >Входящие</a>
                    <a href="/mail/outbox/" class="current">Исходящие</a>
                    <div>&nbsp;</div>
                    <a href="/mail/new/" >Написать письмо</a>
                </div>
            </div>
        </div>
        <div class="agItem ag1">
            <div class="pageTitle">Исходящие</div>
            <table class="tb1 mailList">
                <tr>
                    <th>&nbsp;</th>
                    <th>Тема</th>
                    <th>Адресат</th>
                    <th>Время</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach($data as $mail): ;?>
                <tr>
                    <td>
                        <div class="mailIco">&nbsp;</div>
                    </td>
                    <td><a href="/mail/read?type=1&amp;id_mail=<?=$mail['id_mail']?>"><?=$mail['title']?></td>
                    <td><a href="/user/info?id="><?=$mail['receiver']?></a></td>
                    <td><?=$mail['date']?></td>
                    <td><a href="?delete=8469&token=a4d819ae0771c4d9f677ff30873fa234" class="confirm" rel="Удалить?">[x]</a></td>
                </tr>
                <?php endforeach ;?>
            </table>
            <div class="floatRight"><a href="?deleteAllRead&token=a4d819ae0771c4d9f677ff30873fa234" class="confirm" rel="Удалить все прочитанные сообщения?">Удалить прочитанное</a></div>
            <p class="pages">
                Страницы:
                <a href="/mail/out/page1/" class="current">1</a>
                <a href="/mail/out/page2/" >2</a>
                <a href="/mail/out/page3/" >3</a>
                <a href="/mail/out/page4/" >4</a>
                <a href="/mail/out/page5/" >5</a>
                ... <a href="/mail/out/page6/">6</a>
            </p>
        </div>
    </div>
    <div class="clear">&nbsp;</div>
</div>

<!--
<div>
    <table align="center" width="40%">
        <tr align="center">
            <td>
                <a href="/mail/">Входящие сообщения</a>
            </td>
            <td>
                <a href="/mail/outbox">Исходящие сообщения</a>
            </td>
        </tr>
    </table>
</div>
<br>
<form name="delmess" method="post" action="/mail/delmessage/">
<div class="mail">
    <table border="1" width="40%" align="center">
        <tr>
            <th width="15%">Кому</th>
            <th width="15%">Дата</th>
            <th width="5%">#</th>
            <th width="65%">Тема</th>
        </tr>
        <?php foreach($data as $mail): ;?>
            <tr>
                <td>
                    <a href="/user/info?id="><?=$mail['receiver']?></a>
                </td>
                <td>
                    <?=$mail['date']?>
                </td>
                <td align="center">
                    <input type="checkbox" name="id[]" value="<?=$mail['id']?>">
                </td>
                <td>
                    <a href="/mail/read?type=2&amp;id_mail=<?=$mail['id_mail']?>"><?=$mail['title']?></a>
                </td>
            </tr>
        <?php endforeach ;?>
    </table>
</div>
<br>
<div class="mail buttons">
    <table border="1" width="40%" align="center">
        <tr>
            <td>
                <a href="/mail/new">Написать сообщение</a>
            </td>
            <td>
                <input type="submit" name="submit" value="Удалить сообщения">
            </td>
        </tr>
    </table>
</div>
</form>
-->