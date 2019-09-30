<?php
class ModelMail extends Model {
    public function getInboxMailByUser($login) {
        $data = "SELECT * FROM `mail` WHERE `receiver` = '$login' AND `type` = 1 ORDER BY `id` DESC";
        $data = $this->select($data);
        return $data;
    }

    public function getNewInboxMailByUser($login) {
        $data = "SELECT * FROM `mail` WHERE `receiver` = '$login' AND `type` = 1 AND `new` = 1 ORDER BY `id` DESC";
        $data = $this->select($data);
        return $data;
    }

    public function getOutboxMailByUser($login) {
        $data = "SELECT * FROM `mail` WHERE `sender` = '$login' AND `type` = 2 ORDER BY `id` DESC";
        $data = $this->select($data);
        return $data;
    }

    public function getInboxMailBySmsID($sms_id,$receiver) {
        $data = "UPDATE `mail` SET `new` = 0 WHERE `id_mail` = '$sms_id'";
        $this->update($data);
        $data = "UPDATE `users` SET `mailstatus` = 0 WHERE `login` = '$receiver'";
        $this->update($data);
        $data = "SELECT * FROM `mail` WHERE `id_mail` = '$sms_id' AND `type` = 1";
        $data = $this->select($data);
        return $data;
    }

    public function getOutboxMailBySmsID($sms_id,$receiver) {
        //$data = "UPDATE `mail` SET `new` = 0 WHERE `id_mail` = '$sms_id'";
        //$this->update($data);
        //$data = "UPDATE `users` SET `mailstatus` = 0 WHERE `login` = '$receiver'";
        //$this->update($data);
        $data = "SELECT * FROM `mail` WHERE `id_mail` = '$sms_id'  AND `type` = 2";
        $data = $this->select($data);
        return $data;
    }

    public function addNewMail($type,$sender,$receiver,$date,$title,$text) {
        $data = "UPDATE `users` SET `mailstatus` = 1 WHERE `login` = '$receiver'";
        $this->update($data);

        $data = "INSERT INTO `mail` (`id`,`id_mail`,`type`,`sender`,`receiver`,`date`,`title`,`text`,`new`) VALUES ('NULL',UNIX_TIMESTAMP(),'$type','$sender','$receiver','$date','$title','$text',1)";
        $this->query($data);
    }

    public function getUserData($login) {
        $data = "SELECT * FROM `users` WHERE `login` = '$login'";
        $data = $this->select($data);
        return $data;
    }

    public function delMailMessage($id) {
        $data = "DELETE FROM `mail` WHERE `id` = '$id'";
        //var_dump($data);die;
        $this->delete($data);
    }

    public function getCountAllMessage($login, $type) {
        $data = $this->select("SELECT COUNT(*) FROM `mail` WHERE `receiver` = '$login' AND `type` = '$type'");
        return $data;
    }

    public function getCountNewMessage($login, $type) {
        $data = $this->select("SELECT COUNT(*) FROM `mail` WHERE `receiver` = '$login' AND `type` = '$type' AND `new` = '1'");
        return $data;
    }
}