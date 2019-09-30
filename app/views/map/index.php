<div class="mainContents">
    <div class="agridC">
        <div class="agItem ag0">
            <div class="mapHolder">
                <div class="map">
                    <a href="/map/1/" class=""><span>&nbsp;</span></a>
                    <a href="/map/2/" class=""><span>&nbsp;</span></a>
                    <a href="/map/3/" class=""><span>&nbsp;</span></a>
                    <a href="/map/4/" class=""><span>&nbsp;</span></a>
                    <a href="/map/5/" class=""><span>&nbsp;</span></a>
                    <a href="/map/6/" class=""><span>&nbsp;</span></a>
                    <a href="/map/7/" class=""><span>&nbsp;</span></a>
                    <a href="/map/8/" class=""><span>&nbsp;</span></a>
                    <a href="/map/9/" class=""><span>&nbsp;</span></a>
                    <a href="/map/10/" class=""><span>&nbsp;</span></a>
                    <a href="/map/11/" class=""><span>&nbsp;</span></a>
                    <a href="/map/12/" class=""><span>&nbsp;</span></a>
                    <a href="/map/13/" class=""><span>&nbsp;</span></a>
                    <a href="/map/14/" class=""><span>&nbsp;</span></a>
                    <a href="/map/15/" class=""><span>&nbsp;</span></a>
                    <a href="/map/16/" class=""><span>&nbsp;</span></a>
                    <a href="/map/17/" class=""><span>&nbsp;</span></a>
                    <a href="/map/18/" class=""><span>&nbsp;</span></a>
                    <a href="/map/19/" class=""><span>&nbsp;</span></a>
                    <a href="/map/20/" class=""><span>&nbsp;</span></a>
                    <a href="/map/21/" class=""><span>&nbsp;</span></a>
                    <a href="/map/22/" class=""><span>&nbsp;</span></a>
                    <a href="/map/23/" class=""><span>&nbsp;</span></a>
                    <a href="/map/24/" class=""><span>&nbsp;</span></a>
                    <a href="/map/25/" class=" current selected"><span>&nbsp;</span></a>
                    <a href="/map/26/" class=""><span>&nbsp;</span></a>
                    <a href="/map/27/" class=""><span>&nbsp;</span></a>
                    <a href="/map/28/" class=""><span>&nbsp;</span></a>
                    <a href="/map/29/" class=""><span>&nbsp;</span></a>
                    <a href="/map/30/" class=""><span>&nbsp;</span></a>
                    <a href="/map/31/" class=""><span>&nbsp;</span></a>
                    <a href="/map/32/" class=""><span>&nbsp;</span></a>
                    <a href="/map/33/" class=""><span>&nbsp;</span></a>
                    <a href="/map/34/" class=""><span>&nbsp;</span></a>
                    <a href="/map/35/" class=""><span>&nbsp;</span></a>
                    <a href="/map/36/" class=""><span>&nbsp;</span></a>
                    <a href="/map/37/" class=""><span>&nbsp;</span></a>
                    <a href="/map/38/" class=""><span>&nbsp;</span></a>
                    <a href="/map/39/" class=""><span>&nbsp;</span></a>
                    <a href="/map/40/" class=""><span>&nbsp;</span></a>
                    <a href="/map/41/" class=""><span>&nbsp;</span></a>
                    <a href="/map/42/" class=""><span>&nbsp;</span></a>
                    <a href="/map/43/" class=""><span>&nbsp;</span></a>
                    <a href="/map/44/" class=""><span>&nbsp;</span></a>
                    <a href="/map/45/" class=""><span>&nbsp;</span></a>
                    <a href="/map/46/" class=""><span>&nbsp;</span></a>
                    <a href="/map/47/" class=""><span>&nbsp;</span></a>
                    <a href="/map/48/" class=""><span>&nbsp;</span></a>
                    <a href="/map/49/" class=""><span>&nbsp;</span></a>
                </div>
            </div>
            <div class="realtyList">
                <div class="pageTitle">Район «Оазис»</div>
                <table class="tb1">
                    <tr>
                        <th>Тип</th>
                        <th>Владелец</th>
                        <th>ПЛ</th>
                        <th>ЗП</th>
                    </tr>
                    <?php foreach($data2 as $realty): ;?>
                    <tr>
                        <td><a href="/realty/info?id=<?=$realty['id']?>"><?=$realty['title']?></a></td>
                        <td><a href="/user/info?id=<?=$realty['owner_id']?>"><?=$realty['owner_name']?></a></td>
                        <td>100</td>
                        <td><?=$realty['price']?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>		<div class="clear">&nbsp;</div>
</div>



<!--
<div class="map">
    <img class="mapjpg" src="../img/map.jpg"><br>
    <?php
    foreach ($data as $map) {

        echo "<img class='sector' src='../img/s.gif' title='"."[".$map['x'].$map['y']."]"." : ".$map['name']."'>";
        if($map['y'] == 7) {
            echo "<br>";
        }
    }
    ?>
</div>

<div>
    <table>
        <tr>
            <th width="300px">
                Наименование
            </th>
            <th width="100px">
                $
            </th>
            <th>
                Владелец
            </th>
        </tr>
        <?php foreach($data2 as $realty): ;?>
            <tr>
                <td>
                    <a href="/realty/info?id=<?=$realty['id']?>"><?=$realty['title']?></a>
                </td>
                <td>
                    <?=$realty['price']?>
                </td>
                <td>
                    <a href="/user/info?id=<?=$realty['owner_id']?>"><?=$realty['owner_name']?></a>
                </td>
            </tr>
        <?php endforeach;?>
    </table>
</div>
-->