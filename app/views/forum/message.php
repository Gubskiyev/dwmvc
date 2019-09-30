<div class="navbar">
    <a href="/forum/">Форум</a> ->
	<a href="/forum/section?id=<?=$data2[0]['id']?>"><?=$data2[0]['title']?></a> ->
	<?=$data[0]['title']?>
</div>

</div>
<div class="card my-4">
    <h5 class="card-header"></h5>
    <div class="card-body">
        <div class="form-group">
            <table class="table table-hover">
            <tr>
                <th width="15%">Автор</th>
                <th width="80%">Тема: <?=$data[0]['title']?></th>
            </tr>

            <?php $n = 0;?>
            <?php foreach($data as $message): ;?>
                <?php $n++;?>
                <tr>
                    <td valign="top" align="center">
                        <p>
                            <a href="/user/info?id=<?=$message['user_id']?>"><?=$message['user']?></a>
                        </p>
                    </td>
                    <td>
                        <table  class="table table-hover">
                            <tr>
                                <td align="left"><small>[<?=$n?>]</small></td>
                                <td align="right"><small>Написано: <?=$message['date']?></small></td>
                            </tr>
                        </table>
                        <br>
                        <?=nl2br(htmlentities($message['text']))?>
                    </td>
                </tr>
            <?php endforeach ;?>
            </table>
        </div>
    </div>
</div>


<?php
    if(isset($_COOKIE['login'])){
?>

<div class="card my-4">
    <h5 class="card-header">Быстрый ответ:</h5>
    <div class="card-body">
        <div class="form-group">
            <form action="/forum/postMessage/" method="post" name="mess">
                <textarea class="form-control" name="text" rows="3" required></textarea>
                    <input type="hidden" name="mid" value="<?=$_GET['tid']?>">
                    <input type="hidden" name="fid" value="<?=$_GET['fid']?>">
                    <input type="hidden" name="login" value="<?=$_COOKIE['login']?>">
        </div>
            <input class="btn btn-success" type="submit" value="Написать">
            </form>
    </div>
</div>

<?php
    }
?>
