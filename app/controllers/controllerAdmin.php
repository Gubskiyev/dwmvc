<?php
class ControllerAdmin extends Controller {

    public function __construct(){
        parent::__construct();
        if(!$this->isLogin()) header('Location: /user/login');
        $this->model = new ModelAdmin();
    }

    public function actionView() {
        $this->view->render('Админ-панель', 'admin/index.php', 'template.php');
    }

    public function actionNewitemtest() {
        $data[] = $this->model->getResultNewItem();
        //var_dump($data);
        $this->view->render2('Баланс нового предмета', 'admin/newitemtest.php', 'template.php', $data);
    }
}