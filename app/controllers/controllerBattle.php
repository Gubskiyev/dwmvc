<?php
class ControllerBattle extends Controller {

    public function __construct()
    {
        parent::__construct();
        //$this->model = new ModelLog();
        $this->view = new View();
    }

    public function actionView()
    {
        $this->view->render('Уличные бои', 'battle/index.php', 'template.php');
    }

    public function actionB()
    {
        $this->view->render('Идет бой # ', 'battle/b.php', 'template.php');
    }
}