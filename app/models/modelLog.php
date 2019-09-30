<?php
class ModelLog extends Model {

    public function getTransferLog($id) {
        $userData = $this->select("SELECT * FROM `users` WHERE `id` = '$id'");
        $login = $userData[0]['login'];
        $data = $this->select("SELECT * FROM `log_transfer` WHERE `sender` = '$login' OR `receiver` = '$login' ORDER BY `id` DESC");
        return $data;
    }
}