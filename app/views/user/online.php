<div class="mainContents">
    <ol class="l1">
    <?php foreach ($data as $user): ;?>

            <li><a href="/user/info?id=<?=$user['id']?>"><?=$user['login']?>[<?=$user['blvl']?>]</a> </li>

    <?php endforeach; ?>
    </ol>
    <div class="clear">&nbsp;</div>
</div>