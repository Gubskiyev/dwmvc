<?php
class ModelUser extends Model {
    public function getCountUser($login) {
        $data = "SELECT COUNT(*) FROM `users` WHERE `login` = '$login'";
        $data = $this->select($data);
        return $data[0]["COUNT(*)"];
    }

    public function mailStatus($login)
    {
        $data = $this->select("SELECT `new` FROM `mail` WHERE `receiver` = '$login'");
        return $data;
    }

    public function getUser($login) {
        $data = $this->select("SELECT * FROM `users` WHERE `login` = '$login'");
        return $data[0];
    }

    public function getUserData($login) {
        $data = $this->select("SELECT * FROM `users` WHERE `login` = '$login'");
        return $data;
    }

    public function getUserDataByID($id) {
        $data = $this->select("SELECT * FROM `users` WHERE `id` = '$id'");
        return $data;
    }

    public function userAdd($login,$pass) {
        $sql = "INSERT INTO `users` (`id`,`login`,`pass`) VALUES ('NULL','".$login."','".$pass."')";
        return $this->insert($sql);
    }

    public function userSendMoney($senderID,$sender,$receiverID,$receiver,$sendMoney,$text,$date) {
        $moneySender = "SELECT `money` FROM `users` WHERE `login` = '$sender'";
        $moneyReceiver = "SELECT `money` FROM `users` WHERE `login` = '$receiver'";
        $moneySender = $this->select($moneySender);
        $moneyReceiver = $this->select($moneyReceiver);

        $moneySender = $moneySender[0]['money'] - $sendMoney;
        $moneyReceiver = $moneyReceiver[0]['money'] + $sendMoney;

        $moneyUpdSender = "UPDATE `users` SET `money` = '$moneySender' WHERE `login` = '$sender'";
        $this->update($moneyUpdSender);
        $moneyUpdReceiver = "UPDATE `users` SET `money` = '$moneyReceiver' WHERE `login` = '$receiver'";
        $this->update($moneyUpdReceiver);

        $writeLog = "INSERT INTO `log_transfer` (`id`,`sender_id`,`sender`,`receiver_id`,`receiver`,`text`,`date`,`money`,`item`) VALUES ('NULL','$senderID','$sender','$receiverID','$receiver','$text','$date','$sendMoney','NULL')";
        $this->insert($writeLog);
    }

    public function getLast5NewsList() {
        $data = $this->select("select * from `threads` where `fid` = 1 order by `id` desc limit 5");
        return $data;
    }

    public function getUserOnline() {
        $data = $this->select("select `id`,`login`,`blvl` from  `users` where `online` = 'В сети'");
        return $data;
    }

    public function setUserOnline($login) {
        $sql = "update users set `online` = 'В сети' where `login` = '".$login."'";
        return $this->update($sql);
    }

    public function setUserOffline($login) {
        $sql = "update users set `online` = 'Не в сети' where `login` = '".$login."'";
        return $this->update($sql);
    }
	
	public function setUserLoginIP($ip,$login,$event,$date) {
		$sql = "INSERT INTO `iptable` (`id`,`ip`,`login`,`event`,`date`) VALUES (NULL,'$ip','$login','$event','$date')";
		$this->insert($sql);
	}

}