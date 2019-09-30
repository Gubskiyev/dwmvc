<div class="error">
    <?=$data?>
</div>
<div class="form sendmoney">
    <form action="/user/sendmoney" method="post" name="sendmoney">
        <input class="form-control" type="text" name="receiver" placeholder="Имя получателя" required>
        <input class="form-control" type="text" name="money" placeholder="Сумма" required>
        <input class="form-control" type="text" name="text" placeholder="Сообщение, примечание" required>
        <input class="btn btn-success" type="submit" name="sendmoney" value="Первести">
    </form>
</div>