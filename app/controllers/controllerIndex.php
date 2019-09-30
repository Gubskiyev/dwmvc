<?php
class ControllerIndex extends Controller {

    public function actionView() {
        $this->view->render('Destroyed World :: Онлайн Игра','views/index.php');
    }

}