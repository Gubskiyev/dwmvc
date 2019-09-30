<?php
class ModelInventory extends Model {
    public function getInv() {
        $owner = $_COOKIE['id'];
        $data = "SELECT * FROM `items` INNER JOIN `item` ON items.list_id = item.id WHERE `item_owner` = '$owner'";
        $data = $this->select($data);
        return $data;
    }
}