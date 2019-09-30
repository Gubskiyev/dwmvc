Инвентарь
<br>
<ul>
<?php foreach ($data as $item): ;?>
    <li>
        <a href="/item/info?id=<?=$item['list_id']?>"><?=$item['title']?></a> (<?=$item['proch']?>)<br>
        Цена продажи: <?=$item['price']*0.9?><br>
        <a href="/inventory/sell?id=<?=$item['item_id']?>">Продать</a>
    </li>
    <br>
<?php endforeach;?>
</ul>
