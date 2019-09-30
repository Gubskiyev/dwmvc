<div class="mainContents">
    <div class="agridLC">
        <div class="agItem ag0">
            <div class="sideMenu">
                <div class="head">Письма</div>
                <div class="body">
                    <a href="/mail/" class="current">Входящие</a>
                    <a href="/mail/outbox/" >Исходящие</a>
                    <div>&nbsp;</div>
                    <a href="/mail/new/" >Написать письмо</a>
                </div>
            </div>
        </div>
        <div class="agItem ag1">
            <div class="pageTitle">Входящие</div>
            <table class="tb1 mailList">
                <tr>
                    <th>&nbsp;</th>
                    <th>Тема</th>
                    <th>Отправитель</th>
                    <th>Время</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach($data as $mail): ;?>
                <tr>
                    <td>
                        <div class="mailReadIco">&nbsp;</div>
                    </td>
                    <td><a href="/mail/read?type=1&amp;id_mail=<?=$mail['id_mail']?>"><?=$mail['title']?></a></td>
                    <td><a href="/user/info?id="><?=$mail['sender']?></a></td>
                    <td><?=$mail['date']?></td>
                    <td><a href="?delete=8254&token=a4d819ae0771c4d9f677ff30873fa234" class="confirm" rel="Удалить?">[x]</a></td>
                </tr>
                <?php endforeach ;?>
            </table>
            <div class="floatRight"><a href="?deleteAllRead&token=a4d819ae0771c4d9f677ff30873fa234" class="confirm" rel="Удалить все прочитанные сообщения?">Удалить прочитанное</a></div>
            <p class="pages">
                Страницы:
                <a href="/mail/in/page1/" class="current">1</a>
                <a href="/mail/in/page2/" >2</a>
                <a href="/mail/in/page3/" >3</a>
                <a href="/mail/in/page4/" >4</a>
            </p>



        </div>
    </div>		<div class="clear">&nbsp;</div>
</div>






<!--
</div>
<div class="card my-4">
    <h5 class="card-header">Входящие сообщения</h5>
    <div class="card-body">

    <table width="80%" align="center">
        <tr align="center">
            <td>
                <a href="/mail/">Входящие сообщения </a>(<?=$data3[0]['COUNT(*)']?>/<?=$data2[0]['COUNT(*)']?>)
            </td>
            <td>
                <a href="/mail/outbox">Исходящие сообщения</a>
            </td>
        </tr>
    </table>
</div>
</div>


<div class="card my-4">

    <div class="card-body">
    <form name="delmess" method="post" action="/mail/delmessage/">
        <div class="form-group">
    <div class="mail">
        <table class="table table-hover" width="40%" align="center">
            <tr>
                <th width="15%">От</th>
                <th width="15%">Дата</th>
                <th width="5%">#</th>
                <th width="65%">Тема</th>
            </tr>
            <?php foreach($data as $mail): ;?>
            <tr>
                <td>
                    <a href="/user/info?id="><?=$mail['sender']?></a>
                </td>
                <td>
                    <?=$mail['date']?>
                </td>
                <td align="center">
                    <input type="checkbox" name="id[]" value="<?=$mail['id']?>">
                </td>
                <td>
                    <?php if($mail['new'] == 0) { ?>
                        <a href="/mail/read?type=1&amp;id_mail=<?=$mail['id_mail']?>"><?=$mail['title']?></a>
                    <?php }else {?>
                        <strong><a class="newmail" href="/mail/read?type=1&amp;id_mail=<?=$mail['id_mail']?>"><?=$mail['title']?></a></strong>
                    <?php } ?>
                </td>
            </tr>
            <?php endforeach ;?>
        </table>
    </div>

<hr>
    <div class="mail buttons">
        <table class="table table-hover" width="40%" align="center">
            <tr>
                <td>
                    <a href="/mail/new">Написать сообщение</a>
                </td>
                <td>
                    <input type="submit" name="submit" value="Удалить сообщения">
                </td>
                <td>
                    <a href="/mail/view?newmail">Непрочитанные сообщения</a>
                </td>
            </tr>
        </table>
    </form>
    </div>
</div>
</div>

-->