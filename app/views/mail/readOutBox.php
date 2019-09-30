<div class="mail">
    <table border="1" width="40%" align="center">
        <?php foreach($data as $mail): ;?>
        <tr>
            <td width="5%">
                <b>Кому:</b>
            </td>
            <td>
                <?=$mail['sender']?>, <?=$mail['date']?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <b>Тема: <font color="#a52a2a"><?=$mail['title']?></font></b>
            </td>
        </tr>
        <tr>
            <td colspan="2" height="50" align="top">
                <?=nl2br(htmlentities($mail['text']))?>
            </td>
        </tr>
        <?php endforeach ;?>
    </table>
    <br>
    <table border="1" width="40%" align="center">
        <form action="/mail/postMail" method="POST">
        <tr>
            <td>
                Быстрый ответ для <b><?=$mail['sender']?>:</b>
            </td>
        </tr>
        <tr>
            <td>
                <textarea rows="8" cols="103" name="text"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="title" value="<?='RE: '.$mail['title']?>">
                <input type="hidden" name="sender" value="<?=$_COOKIE['login']?>">
                <input type="hidden" name="receiver" value="<?=$mail['sender']?>">
                <input type="submit" name="submit" value="Отправить">
            </td>
        </tr>
        </form>
    </table>
    <br>
    <table border="0" align="center" width="40%">
        <tr>
            <td align="center">
                <a href="/mail">Вернуться в почту</a>
            </td>
        </tr>
    </table>
</div>