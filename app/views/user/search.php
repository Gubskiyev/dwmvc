<div class="mainContents">
    <div class="centerGrid">
        <div class="gridItem2">
            <div class="frameTitle">Поиск персонажа</div>
			
			<?=$data?>
			
            <div class="frame">
			
                <form method="get" action="/user/search" name="search">
                    <p>Ник:
                        <input type="text" name="login" required value="" required>
                        <input type="submit" value="Найти">
                    </p>
                </form>
            </div>
        </div>
    </div>
    <div class="clear">&nbsp;</div>
</div>

<!--<div class="form search">
    <form action="/user/search" method="get" name="search">
        <input class="form-control" type="text" name="login" required placeholder="Введите имя">
        <br>
        <input class="btn btn-success" type="submit" value="Найти">
    </form>
</div>-->