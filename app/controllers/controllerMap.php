<?php
class ControllerMap extends Controller {
    public function __construct() {
        parent::__construct();
        if(!$this->isLogin()) $this->view->redirect('/user/login');
        $this->model = new ModelMap();
    }

    public function actionView() {
        $data[] = $this->model->getAllSectors();
        $data[] = $this->model->getRealtyFromSector(25);

        $this->view->render('Карта', $data);
    }
}