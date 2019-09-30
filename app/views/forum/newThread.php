<?php if(!empty($_GET['fid']) OR ($_GET['fid'] != NULL)) { ?>
<div class="mainContents">
    <div class="agridC">
        <div class="agItem ag0">
            <div class="centerGrid">
                <div class="gridItem3">
                    <div class="frameTitle">Новая тема</div>
                    <div class="frame">
                        <form method="post" action="/forum/postThread">
                            <p>
                                Тема:
                                <input type="text" name="title" required>
                            </p>

                            <p>
                                Сообщение:<br>
                                <textarea name="text" class="full" required></textarea>
                            </p>
                            <p class="rightText">
                                <input type="hidden" name="fid" value="<?= $_GET['fid'] ?>">
                                <input type="hidden" name="login" value="<?= $_COOKIE['login'] ?>">
                                <input type="submit" name="submit" class="stdBtn" value="Отправить">
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
} else {
    $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
    header('HTTP/1.1 404 Not Found');
    header("Status: 404 Not Found");
    header('Location:'.$host.'404');
}

?>


<!--<?php if(!empty($_GET['fid'])) { ?>
    <div class="card my-4">
        <h5 class="card-header">Новая тема:</h5>
        <div class="card-body">
            <form action="/forum/postThread" method="post">
                <div class="form-group">
                    <span class="form-control">От: <?= $_COOKIE['login'] ?></span>
                    <input class="form-control" type="text" size="68" name="title" width="70" placeholder="Тема"
                           required>
                    <textarea class="form-control" name="text" rows="6" placeholder="Сообщение" required></textarea>
                    <input type="hidden" name="fid" value="<?= $_GET['fid'] ?>">
                    <input type="hidden" name="login" value="<?= $_COOKIE['login'] ?>">
                </div>
                <button type="submit" class="btn btn-primary" value="Создать" name="submit">Создать</button>
            </form>
        </div>
    </div>
    <?php
} else {
    $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
    header('HTTP/1.1 404 Not Found');
    header("Status: 404 Not Found");
    header('Location:'.$host.'404');
}

?>
-->