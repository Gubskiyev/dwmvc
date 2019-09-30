<?php
class ControllerItem extends Controller {
    public function __construct()
    {
        parent::__construct();
        $this->model = new ModelItem();
        $this->view = new View();
    }

    public function actionView() {
        $this->view->render("Неизвестный Предмет", $data=null);
    }

    public function actionInfo() {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $data = $this->model->getItemByID($id);

            $type = $data[0]['type'];

            $this->view->render2('Описание предмета', 'item/item_'.$type.'.php', 'template.php', $data);
        }
    }
}