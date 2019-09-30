<?php
class ControllerUser extends Controller {

    public function __construct() {
        parent::__construct();
        $this->model = new ModelUser();
    }

    public function actionView() {
        if(!$this->isLogin()) header('Location: /user/login'); //Проверка на логон

        $data[] = $this->model->getUserData($_COOKIE['login']);
        $data[] = $this->model->getLast5NewsList();

        $this->view->render('Персонаж', $data);
    }

    public function actionRegister() {
        if(isset($_POST['reg'])) {
            $login = trim(strip_tags($_POST['login']));
            $pass1 = md5($_POST['pass1']);
            $pass2 = md5($_POST['pass2']);
            $err = [];
            $eula = $_POST['eula'];
			$date = date('d/m/Y, H:i:s');

            # проверям логин
            if(!preg_match("/^[a-zA-Zа-яА-Я0-9]+$/",$login)){
                $err[] = $this->view->UserReg(1);
            }

            if(strlen($login) < 3 or strlen($login) > 30){
                $err[] = $this->view->UserReg(2);
            }

            if($this->model->getCountUser($login) > 0){
                $err[] = $this->view->UserReg(3);
            }

            if($pass1 != $pass2){
                $err[] = $this->view->UserReg(4);
            }

            if($eula != 'agree') {
                $err[] = $this->view->UserReg(5);
            }

            if(count($err) == 0) {
                $err[] = $this->error->UserReg(0);
                $this->model->userAdd($login,$pass1);
				$this->model->setUserLoginIP($_SERVER['REMOTE_ADDR'],$login,'reg',$date);
                //echo "Пользователь создан!<br>";
                $this->view->render('Регистрация', $err);
            } else {
                //print "<b>При регистрации произошли следующие ошибки:</b><br>";
                //foreach($err AS $error){
                  //  print $error."<br>";
                //}
                //var_dump($err);die;
                $this->view->render('Регистрация', $err);
            }

        } else {
            $this->view->render('Регистрация');
        }
    }

    public function actionLogin() {
        if (isset($_COOKIE['login'])) header('Location: /user/');
        if (isset($_POST['auth'])) {
            $login = $_POST['login'];
            $pass = trim(strip_tags($_POST['pass']));
            $pass = md5($pass);
			$date = date('d/m/Y, H:i:s');
            $data = $this->model->getUser($login);

            if ($data['pass'] === $pass) {
                setcookie("login", $login, time() + 36000, "/");
                setcookie("id", $data['id'], time() + 36000, "/");
                header('Location: /user/');
                $this->model->setUserOnline($login);
				$this->model->setUserLoginIP($_SERVER['REMOTE_ADDR'],$login,'logon',$date);
            } else {
                $err[] = $this->error->UserLogin(1);
                $this->model->setUserLoginIP($_SERVER['REMOTE_ADDR'],$login,'error',$date);
                $this->view->render('Авторизация', $err);
            }
        } else {
            $this->view->render('Вход в игру @ DestWorld.Ru');
        }
    }

    public function actionInfo() {
        $id = trim(strip_tags(intval($_GET['id'])));
        if($id == NULL || $id == '' || $id == '0') header('Location: info?id=1');
        if(intval($id)) {
            $data[] = $this->model->getUserDataByID($id);
            $this->view->render('Информация', $data);
        }
    }

    public function actionSearch() {
        if(isset($_GET['login'])) {
            $login = trim(strip_tags($_GET['login']));
            $data = $this->model->getUser($login);
			
                if($data != NULL) header("Location: /user/info?id=".$data['id']);
            //else $this->view->render('Найти игрока', 'user/searchError.php');
			
			$err[] = $this->error->UserSearch(1);
			$this->view->render('Найти игрока', $err);
		}else $this->view->render('Найти игрока');
    }

    public function actionSendmoney() {
        if(isset($_POST['sendmoney'])) {
			
			$senderLogin = $_COOKIE['login'];
            $receiverLogin = $_POST['receiver'];
            $money = $_POST['money'];
            $text = $_POST['text'];
            $senderData = $this->model->getUserData($_COOKIE['login']);
            $receiverData = $this->model->getUserData($_POST['receiver']);
            $senderID = $senderData['0']['id'];
			$receiverID = $receiverData['0']['id'];
			
			$err = [];
			
            if($text == NULL) $text = "Без примечания";

            if($money <= 0) {
                $err[] = $this->error->UserTransfer(1);
				$this->view->render('Перевод средств', $err);
				exit;
            }elseif($this->model->getUser($receiverLogin) == NULL) {
				$err[] = $this->error->UserTransfer(2);
				$this->view->render('Перевод средств', $err);
				exit;
            }elseif(strlen($text) > 100) {
                $err[] = $this->error->UserTransfer(3);
				$this->view->render('Перевод средств', $err);
				exit;
            }elseif($senderData[0]['money'] < $money) {
                $err[] = $this->error->UserTransfer(4);
				$this->view->render('Перевод средств', $err);
				exit;
            }elseif($senderLogin === $receiverLogin) {
                $err[] = $this->error->UserTransfer(5);
				$this->view->render('Перевод средств', $err);
				exit;
            }else{
                $date = date('d/m, H:i:s');
                $this->model->userSendMoney($senderID,$senderLogin,$receiverID,$receiverLogin,$money,$text,$date);
                $data[] = "<div class='frame success'>Сумма в размере $money отправлена персонажу $receiverLogin.</div>";
				$this->view->render('Перевод средств', $data);
				exit;
            }
			
        }
		$this->view->render('Перевод средств');
    }

    public function actionClans() {
        $this->view->render('Ваши кланы');
    }

    public function actionOnline() {
        $data[] = $this->model->getUserOnline();
        $this->view->render('Сейчас онлайн игроков', $data);
    }

    public function actionLogout() {
        $login = $_COOKIE['login'];
        $this->model->setUserOffline($login);
        foreach($_COOKIE as $k => $v)
        setcookie($k, '' , time()-999, "/");
        header('Location: /user/login/');

    }

    public function actionCookie() {
        var_dump($_COOKIE);
    }

}