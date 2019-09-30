<?php foreach($data as $item): ;?>
<div class="container">
    <div class="left">
        <div class="img">
            <img src="<?=$item['img']?>">
        </div>
    </div>

    <div class="right">
        <div class="title">
            <b><?=$item['title']?></b>
        </div>
        <div class="options">

                Вес: <?=$item['weight']?><br>
                Прочность: <?=$item['proch']?><br>
                Цена: <?=$item['price']?><br>
                Слот: <?=$item['slot']?><br>

        </div>
        <div class="options2">
            <ul>
                <li>Урон: <?=$item['dmg_min']?>-<?=$item['dmg_max']?></li>
                <li>Точность: <?=$item['acc']?>%</li>
                <li>Количество выстрелов: <?=$item['bullets']?></li>

            </ul>
        <div class="disc">
            <b>Описание:</b>
        </div>
        <div class="text">
            <?=$item['text']?>
        </div>
    </div>
</div>

<?php endforeach; ?>