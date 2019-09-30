<?php
class ControllerLog extends Controller {

    public function __construct(){
        parent::__construct();
        $this->model = new ModelLog();
        $this->view = new View();
    }

    public function actionView() {
        header('Location: /user');
    }

    public function actionTransfer() {
        $id = trim(strip_tags($_GET['id']));
        $data[] = $this->model->getTransferLog($id);
		
        $this->view->render('История переводов персонажа', $data);
    }
}