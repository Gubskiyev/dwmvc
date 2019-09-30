<?php
class ControllerForum extends Controller {
    private $close = false;

    public function __construct() {
		//if(!$this->isLogin()) header('Location: /user/login');
        parent::__construct();
        $this->model = new ModelForum();
        if($this->close == true) header("Location: 404");
    }

    public function actionView() {
		$data[] = $this->model->getAllForums();

		$this->view->render('Форум', $data);
    }

    public function actionSection() {
        if(!$this->isLogin()) header('Location: /user/login');
        $id = trim(strip_tags(intval($_GET['id'])));
		if(isset($id)) {
            $data[] = $this->model->getThreadsBySection($id);
            $data[] = $this->model->getForumByID($id);

            $this->view->render('Форум', $data);
        }
    }

    public function actionMessage() {
		if(!$this->isLogin()) header('Location: /user/login');
		
		$fid = trim(strip_tags(intval($_GET['fid'])));
		$tid = trim(strip_tags(intval($_GET['tid'])));
        if(isset($tid) && isset($fid)) {

			$data[] = $this->model->getThreadByID($fid,$tid);
            $data[] = $this->model->getForumByID($fid);

			if($fid === $data[0][1]['fid'] || $fid === $data[0][0]['fid']) { //Если FID в адресной строке имеется в запросе с TID то выводим страницу

                $this->view->render('Сообщение', $data);
			}else Router::page404();
        }else Router::page404();
    }

    public function actionNewThread() {
        if(!$this->isLogin()) header('Location: /user/login');
        $fid = trim(strip_tags(intval($_GET['fid'])));
        if(isset($fid)) {
            $this->view->render('Новая тема','forum/newThread.php','template.php');
        }
    }

    public function actionPostThread() {
        $date = date('d/m/Y, H:i');
        $this->model->addNewThread($_POST['fid'],$_POST['title'],$_POST['text'],$_POST['login'],$_COOKIE['id'],$date);
        header('Location: /forum/section?id='.$_POST['fid']);
    }

    public function actionPostMessage() {
        $date = date('d/m/Y, H:i');
		$this->model->addNewMessage($_POST['mid'],$_POST['fid'],$_POST['text'],$_POST['login'],$_COOKIE['id'],$date);
        header('Location: /forum/message?fid='.$_POST['fid'].'&tid='.$_POST['mid']);
    }

    public function actionCookie() {
        var_dump($_COOKIE);
    }
}