<div class="mainContents">
    <div class="agridC">
        <div class="agItem ag0">
            <div class="pageTitle">Форум</div>
            <table class="tb1 threadList">
                <tr>
                    <th>Тема</th>
                    <th>Тем</th>
                    <th>Последнее сообщение</th>
                </tr>
                <?php foreach($data['section'] as $section): ;?>
                <tr>
                    <td><a href="/forum/section?id=<?=$section['id']?>"><?=$section['title']?></a></td>
                    <td><?=$data['count'][$section['id']]?></td>
                    <td><?=$data['lastThread'][$section['id']]['title']?> - <a href="/user/info?id=<?=$data['lastThread'][$section['id']]['user_id']?>"><?=$data['lastThread'][$section['id']]['user']?></a></td>
                </tr>
                <?php endforeach ;?>
            </table>
        </div>
    </div>
    <div class="clear">&nbsp;</div>
</div>


<!--<div class="card my-4">
    <h5 class="card-header"></h5>
    <div class="card-body">
        <div class="form-group">
            <table class="table table-hover">
                <tr>
                    <th width="70%">Форум</th>
                    <th width="30%">Последняя тема</th>
                    <th width="10%">Тем</th>
                </tr>

                <?php foreach($data['section'] as $section): ;?>
                    <tr>
                        <td>
                            <div>
                                <a href="/forum/section?id=<?=$section['id']?>">
                                     <?=$section['title']?>
                                </a>
                            </div>
                            <div>
                                <small><?=$section['desc']?></small>
                            </div>
                        </td>
                        <td>
                            <?=$data['lastThread'][$section['id']]['title']?> - <a href="/user/info?id=<?=$data['lastThread'][$section['id']]['user_id']?>"><?=$data['lastThread'][$section['id']]['user']?></a>
                        </td>
                        <td align="center">
                            <?=$data['count'][$section['id']]?>
                        </td>
                    </tr>
                <?php endforeach ;?>
            </table>
        </div>
    </div>
</div>-->

