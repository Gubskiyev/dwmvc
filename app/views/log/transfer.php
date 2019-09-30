<div class="mainContents">
    <div class="agridC">
        <div class="agItem ag0">
            <div class="pageTitle">Протокол движения денег и предметов</div>
            <div class="frame">
                <?php foreach($data as $log): ;?>
				
				<?php if($log['sender_id'] == $_GET['id']) { ?>
					<span class="grey"><?=$log['date']?></span>
					Передано<b> <span class="money"><?=$log['money']?> $</span></b> для <a href="/user/search?login=<?=$log['receiver']?>"><?=$log['receiver']?></a> — "<?=$log['text']?>"
					<br>
				<?php }else {?>
					<span class="grey"><?=$log['date']?></span>
					Передано<b> <span class="money"><?=$log['money']?> $</span></b> от <a href="/user/search?login=<?=$log['sender']?>"><?=$log['sender']?></a> — "<?=$log['text']?>"
					<br>
				<?php } ?>
				
				
                <?php endforeach; ?>
            </div>
		</div>
    </div>		<div class="clear">&nbsp;</div>
</div>

<!--
<div class="transfer">
    <table width="100%">
        <?php foreach($data as $log): ;?>
        <tr>
            <td><?=$log['date']?> | </td>
            <td><b><?=$log['sender']?></b> передал <b><?=$log['money']?>$</b> в пользу <?=$log['receiver']?>: "<?=$log['text']?>"</td>

        </tr>

        <?php endforeach; ?>
    </table>
</div>
-->