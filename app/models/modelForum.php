<?php
class ModelForum extends Model {

    public function getAllForums() {
        $sections = $this->getCountSections();

        for($i = 1; $i <= $sections; $i++) {
            $sql = "SELECT COUNT(*) FROM `threads` WHERE `fid` = '$i' AND `type` = 'topic'";
            $total[$i] = $this->select($sql);

            foreach($total[$i] as $v) {
                $count[$i] = $v["COUNT(*)"];
            }

            $sqlLastThread = "SELECT * FROM `threads` WHERE `fid` = '$i' AND `type` = 'topic'";
            $total[$i] = $this->select($sqlLastThread);
            foreach ($total[$i] as $v) {
                $lastThread[$i] = $v;
            }
        }
        $data['lastThread'] = $lastThread;
        $data['count'] = $count;
        $data['section'] = $this->select("SELECT * FROM `section`");
        return $data;
    }

    public function getThreadsBySection($section) {
        $countMessages = $this->select("SELECT DISTINCT `mid` FROM `threads` where `fid` = '$section' AND `mid` > 0");
        foreach ($countMessages as $k => $v) {
            $k++;
            $mid[$k] = $v['mid'];
        }

        for($i = 1; $i <= $mid[$i]; $i++) {
            $sql = "SELECT COUNT(*) FROM `threads` WHERE `mid` = '$mid[$i]'";
            $total[$i] = $this->select($sql);

            foreach($total[$i] as $v) {
                $count[$mid[$i]] = $v["COUNT(*)"]+=1;
            }
        }


        for($i = 1; $i <= $mid[$i]; $i++) {
            $sql = "SELECT * FROM `threads` WHERE `fid` = '$section' AND `id` = '$mid[$i]' OR `mid` = '$mid[$i]' ORDER BY `id` DESC LIMIT 1";
            $total[$i] = $this->select($sql);

            foreach($total[$i] as $v) {
                $lastMess[$mid[$i]] = $v;
            }
        }


        $data['count'] = $count;

        if($data['count'] == NULL)
        $data['count'] = 1;

        $data['lastMessage'] = $lastMess;
        $data['section'] = $this->select("SELECT * FROM `threads` WHERE `fid` = '$section' AND `type` = 'topic' ORDER BY `id` DESC");
        return $data;
    }

    public function getCountSections() {
        $data = count($this->select("SELECT * FROM `section`"));
        return $data;
    }

    public function getThreadByID($fid,$tid) {
        $data = $this->select("SELECT * FROM `threads` WHERE `id` = '$tid' OR `mid` = '$tid' ORDER BY `id`");
		return $data;
    }

    public function addNewThread($fid,$title,$text,$user,$user_id,$date) {
		$sql = "INSERT INTO `threads` (`id`,`mid`,`fid`,`type`,`title`,`text`,`user`,`user_id`,`date`) VALUES ('NULL','0','$fid','topic','$title','$text','$user','$user_id','$date')";
        $this->query($sql);
    }

    public function addNewMessage($mid,$fid,$text,$user,$user_id,$date) {
        $sql = "INSERT INTO `threads` (`id`,`mid`,`fid`,`type`,`title`,`text`,`user`,`user_id`,`date`) VALUES ('NULL','$mid','$fid','reply','','$text','$user','$user_id','$date')";
		$this->query($sql);
    }

	public function getForumByID($id) {
        return $this->select("SELECT * FROM `section` WHERE `id` = '$id'");
    }

    public function getLastThread($id) {

    }

    public function getUserData($login) {
        $sql = "SELECT `id`,`login` FROM `users` WHERE `login` = '$login'";
        return $this->select($sql);
    }

    public function getCountMessages($id) {
        $data = $this->select("SELECT * FROM `threads` WHERE `mid` = '".$id."'");
        $count = count($data);
        $count++;
        return $count;
    }

    public function getCountThreads($id) {
        $data = $this->select("SELECT * FROM `threads` WHERE `fid` = '".$id."'");
        $count = count($data);
        return $count;
    }

}