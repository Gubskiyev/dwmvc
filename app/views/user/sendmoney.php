<div class="mainContents">
    <div class="centerGrid">
        <div class="gridItem2">
            <div class="frameTitle">Денежные переводы</div>

            <?=$data?>
            <div class="frame">
                <div class="agrid12">
                    <div class="ag12Item6">
                        <form method="post" action="/user/sendmoney" name="sendmoney">
                            <table class="form">
                                <tr>
                                    <th>Получатель:</th>
                                    <td><input type="text" name="receiver" value=""></td>
                                </tr><tr>
                                    <th>Сумма:</th>
                                    <td><input type="text" name="money" value=""></td>
                                </tr><tr>
                                    <th>Комментарий:</th>
                                    <td><input type="text" name="text" value=""></td>
                                </tr><tr>
                                    <td colspan="2" class="rightText">
                                        <input type="submit" name="sendmoney" value="Перевести">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <!--<div class="ag12Item6">
                        <div class="frame">
                        <p>Помните о необходимости указания корректного комментария. Переводы без комментариев, либо с бессмысленными комментариями, могут быть расценены как финансовая прокачка.</p>
                        </div>
                    </div>-->
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear">&nbsp;</div>
</div>


<!--<div class="form sendmoney">
    <form action="/user/sendmoney" method="post" name="sendmoney">
        <input class="form-control" type="text" name="receiver" placeholder="Имя получателя" required>
        <input class="form-control" type="text" name="money" placeholder="Сумма" required>
        <input class="form-control" type="text" name="text" placeholder="Сообщение, примечание">
        <input class="btn btn-success" type="submit" name="sendmoney" value="Первести">
    </form>
</div>-->