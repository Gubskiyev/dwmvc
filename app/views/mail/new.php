<div class="mainContents">
    <div class="centerGrid">
        <div class="centerGrid">
            <div class="gridItem3">
                <div class="frameTitle">Новое письмо</div>
                <div class="frame">
                    <?=$data?>
                    <form method="post" action="/mail/postMail">
                        <p>
                            Кому:
                            <input type="text" name="receiver" required value="">
                        </p>
                        <p>
                            Тема:
                            <input type="text" name="title"  value="">
                        </p>
                        <p>
                            Сообщение:<br>
                            <textarea name="text" required class="full"></textarea>
                        </p>
                        <p class="rightText">
                            <input type="submit" name="submit" class="stdBtn" value="Отправить">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clear">&nbsp;</div>
