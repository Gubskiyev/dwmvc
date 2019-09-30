<?php// var_dump($data);die;?>
<br>
    <table border="2" cellspacing="3" cellpadding="3" width="300">
        <form method="post" action="/admin/newitemtest">

            <tr>
                <td>
                    <br>Оружие:
                    <br><input type="text" name="item[dmg_min]" value="<?php echo $item[dmg_min];?>" style="width: 33;">&nbsp;&nbsp;Урон 1
                    <br><input type="text" name="item[dmg_max]" value="<?php echo $item[dmg_max];?>" style="width: 33;">&nbsp;&nbsp;Урон 2
                    <br><input type="text" name="item[acc]" value="<?php echo $item[acc];?>" style="width: 33;">&nbsp;&nbsp;Точность
                    <br><input type="text" name="item[acc2]" value="<?php echo $item[acc2];?>" style="width: 33;">&nbsp;&nbsp;Точность 2
                    <br><input type="text" name="item[count_bullet]" value="<?php echo $item[count_bullet];?>" style="width: 33;">&nbsp;&nbsp;Выстрелов за ход
                    <br><select name="item[g_l]">
                        <option value=1<?php if ($item['g_l']==1) echo ' selected';?>>Пистолет</option>
                        <option value=2<?php if ($item['g_l']==2) echo ' selected';?>>Автомат</option>
                        <option value=3<?php if ($item['g_l']==3) echo ' selected';?>>Дробовик</option>
                        <option value=4<?php if ($item['g_l']==4) echo ' selected';?>>Винтовка</option>
                        <option value=5<?php if ($item['g_l']==5) echo ' selected';?>>Пулемет</option>
                    </select>
                    <br><br>Персонаж:
                    <br><input type="text" name="user[acc]" value="<?php echo $pers_m;?>" style="width: 33;">&nbsp;&nbsp; Меткость
                    <br><input type="text" name="user[gun_lvl]" value="<?php echo $gun_lvl;?>" style="width: 33;">&nbsp;&nbsp;Gun level
                    <br><input type="text" name="user[mask]" value="<?php echo $mask;?>" style="width: 33;">&nbsp;&nbsp;Enemy mask
                    <br><input type="text" name="user[arm[0]]" value="<?php echo $arm[0];?>" style="width: 33;">&nbsp;&nbsp;arm[0]
                    <br><input type="text" name="user[arm[1]]" value="<?php echo $arm[1];?>" style="width: 33;">&nbsp;&nbsp;arm[1]
                    <br><input type="text" name="user[arm[2]]" value="<?php echo $arm[2];?>" style="width: 33;">&nbsp;&nbsp;arm[2]
                    <br><input type="radio" name="prom" <?php if ($prom!=1)echo 'checked';?> value="0">met&nbsp;&nbsp;<input type="radio" name="prom" <?php if ($prom==1)echo 'checked';?> value="1">&nbsp;&nbsp;met_2
                    <div align=right><input type="submit" name="ItemTest" value="Snd"></div>
                </td>
            </tr>
            <tr style="height: 33;"><td></td></tr>
            <tr >
                <td><br>
                    <?php foreach ($data as $var): ;?>
                    Урон: <?=$var['dmgTotal']?><br>
                    Попало пуль: <?=$var['countBullets']?><br>
                    Броня[0]: $r_arm[0]<br>
                    Броня[1]: $r_arm[1]<br>
                    Броня[2]: $r_arm[2]<br>
                    Броня[3]: $r_arm[3]<br>
                    ВП: <?=$var['acc']?> %<br>
                    GL: <?=$var['kill']?> %<br>
                    Всего пуль: <?=$var['count_bullet']?>
                    <?php endforeach; ?>

                    <br></td>
            </tr>

        </form>
    </table>

