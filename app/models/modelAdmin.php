<?php
class modelAdmin extends Model {
    public function getResultNewItem() {

        if(isset($_POST['ItemTest'])) {

            $dmg_min = $_POST['item']['dmg_min'];
            $dmg_max = $_POST['item']['dmg_max'];
            $item_acc = $_POST['item']['acc'];
            $count_bullet = $_POST['item']['count_bullet'];

            $user_acc = $_POST['user']['acc'];
            $gun_lvl = $_POST['user']['gun_lvl'];
            $mask = $_POST['user']['mask'];

            $dmgOneBullet = rand($dmg_min,$dmg_max);
            $acc = ($item_acc + $user_acc) * (100-$mask)/100;
            $dmgTotal = 0;
            $countBullets = 0;

            $y = $count_bullet;

            while ($y>0){
                if (rand(0,100)<=$acc){
                    $rand = rand(0,3);
                    //$r_arm[$rand]++;
                    $dmgTotal += $dmgOneBullet; //- $arm1[$rand];
                    $countBullets++;
                }
                $y--;
            }

            if ($dmgTotal > 0){
                //$dmgTotal = ($dmgTotal / 100) * $this->getSkillMode($gun_lvl);
                $dmgTotal = ($dmgTotal / 100) * $this->getSkillMode($gun_lvl);
                $dmgTotal = (int)ceil($dmgTotal);
            }
            $kill = $this->getSkillMode($gun_lvl);
            $data = [];

            $data['dmgTotal'] = $dmgTotal;
            $data['countBullets'] = $countBullets;
            $data['acc'] = $acc;
            $data['kill'] = $kill;
            $data['count_bullet'] = $count_bullet;
        }
        return $data;
    }

    public function getSkillMode($n) {
        $sql = "SELECT * FROM `gun_lvl` WHERE `lvl` = '$n'";
        $data = $this->select($sql);
        $data = $data[0]['multi'];
        return $data;
    }

}