<?php
class controller404 extends Controller {
    public function __construct()
    {
        $this->view = new View();
    }

    public function actionView() {
        $this->view->render('404');
    }
}