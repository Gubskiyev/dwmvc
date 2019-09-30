<?php
class ControllerMail extends Controller {

    public function __construct(){
        parent::__construct();
        $this->model = new ModelMail();

        if(!$this->isLogin()) header('Location: /user/login'); //Проверка на логон
    }

    public function actionCantread() {
        $this->view->render('Сообщение', 'mail/cantread.php', 'template.php');
    }

    public function actionView() {
        $login = $_COOKIE['login'];

        if(isset($_GET['newmail'])) {
            $data[] = $this->model->getNewInboxMailByUser($login);
            //var_dump(empty($data));die;

            if(empty($data) != FALSE) $this->view->render('Новая почта', $data);
            else $this->view->redirect('/mail/');

        }else {
            $data[] = $this->model->getInboxMailByUser($login);
            $data[] = $this->model->getCountAllMessage($login,'1');
            $data[] = $this->model->getCountNewMessage($login, '1');

            $this->view->render('Почта', $data);
        }
    }

    public function actionNotread() {
        $this->view->render("Не прочитанная почта", $data = null);
    }

    public function actionOutbox() {
        $login = $_COOKIE['login'];
        $data[] = $this->model->getOutboxMailByUser($login);
        $this->view->render('Исходящая почта', $data);
    }

    public function actionRead() {
        $id = $_GET['id_mail'];
        $login = $_COOKIE['login'];

        if($_GET['type'] == 1) {
            $data[] = $this->model->getInboxMailBySmsID($id,$login);
            $this->view->render('Сообщение', $data);
        }elseif ($_GET['type'] == 2) {
            $data[] = $this->model->getOutboxMailBySmsID($id,$login);
            $this->view->render('Сообщение', $data);
        }else $this->view->redirect('/mail/cantread');
    }

    public function actionNew() {
        if($_GET['mailto']) {
            if(!$this->model->getUserData($_GET['mailto'])) Router::page404();
        }
        $this->view->render('Новое письмо', $data);
    }

    public function actionPostMail() {
        if(isset($_POST) && $_POST != NULL) {
            $sender = $_COOKIE['login'];
            $receiver = trim(strip_tags($_POST['receiver']));
            $date = date('d/m, H:i');
            $title = $_POST['title'];
            $text = trim(strip_tags($_POST['text']));
            $type = $_POST['type'];

            if(empty($title)) $title = 'RE:';

            $this->model->addNewMail(1,$sender, $receiver, $date, $title, $text);
            $this->model->addNewMail(2,$sender, $receiver, $date, $title, $text);

            header("location: /mail");
        } else header("Location: new");
    }

    public function actionDelMessage()
    {
        foreach ($_POST['id'] as $id) {
           $this->model->delMailMessage($id);
        }
        header("Location: /mail/");
    }

}