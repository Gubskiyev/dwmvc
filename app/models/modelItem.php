<?php
class ModelItem extends Model {

    public function getItemByID($id) {
        $data = "SELECT * FROM `item` WHERE `id` = '$id'";
        $data = $this->select($data);
        return $data;
    }
}