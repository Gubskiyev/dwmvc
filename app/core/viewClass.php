<?php

class View {

    public $template = 'template';
    public $errorTemplate = 'errorTemplate';

    public function render($title, $var = []) {

        if(!empty($var[0])) $data = $var[0];
        else $data = null;
		
        if(!empty($var[1])) $data2 = $var[1];
        else $data2 = null;
        if(!empty($var[2])) $data3 = $var[2];
        else $data3 = null;

        $url = substr($_SERVER['REQUEST_URI'],1);
        $argArr = explode('/',$url);

        if(!empty($argArr[0])) $path = $argArr[0];
        if(!empty($argArr[1])) $view = $argArr[1];
		
        else $view = 'index';

        $findSymbol = strpos($view, '?');
        if($findSymbol == true) {
            $view = stristr($view, '?', true);
        }

        $content = 'app/views/'.$path.'/'.$view.'.php';

        include 'app/views/'.$this->template.'.php';

    }

    public function render2 ($title, $content, $template, $data = null, $data2 = null) {
        include 'app/views/'.$template;
    }

    public function redirect($url) {
        header('location: '.$url);
        exit;
    }

    public static function page404() {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }

    public function message($message) {
        $template = "
        <div class=\"frame grid\">
            <div class='seccess'>
                  $message   
            </div>
        </div>
        ";
        return $template;
    }

    public function error($message) {
        //include 'app/views/'.$this->errorTemplate.'.php';
        $template = "
        <div class=\"frame grid\">
            <div class='error'>
                  $message   
            </div>
        </div>
        ";
        return $template;

    }
    /*
    public function errUserLogin($rc) {
        if($rc == 1) return $this->errorTemplate('Вы ввели неправильный логин/пароль');
    }

    public function UserReg($rc) {
        if($rc == 0) return $this->errorTemplate("Успешно! Можете <a href='/user/login'>войти в игру</a>");
        if($rc == 1) return $this->errorTemplate('Логин содержит недопустимые символы');
        if($rc == 2) return $this->errorTemplate("Логин должен быть не меньше 3-х символов и не больше 30");
        if($rc == 3) return $this->errorTemplate("Пользователь с таким логином уже существует в базе данных");
        if($rc == 4) return $this->errorTemplate("Введите одинаковые пароли");
        if($rc == 5) return $this->errorTemplate('Вы не приняли условия пользовательского соглашения');
    }
*/

}

