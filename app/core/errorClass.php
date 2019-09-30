<?php

class Errors {

    private function errorTemplate($rc) {
        $template = "
        <div class=\"frame grid\">
            <div class='error'>
                  $rc   
            </div>
        </div>
        ";
        return $template;
    }

    public function UserReg($rc) {
        if($rc == 0) return "Успешно!";
        if($rc == 1) return $this->errorTemplate('Логин содержит недопустимые символы');
        if($rc == 2) return $this->errorTemplate("Логин должен быть не меньше 3-х символов и не больше 30");
        if($rc == 3) return $this->errorTemplate("Пользователь с таким логином уже существует в базе данных");
        if($rc == 4) return $this->errorTemplate("Введите одинаковые пароли");
        //if($rc == 5) return $this->errorTemplate('Проверка');
    }

    public function UserLogin($rc) {

        if($rc == 1) return $this->errorTemplate('Вы ввели неправильный логин/пароль');
    }
	
	public function UserSearch($rc) {
		if($rc == 1) return $this->errorTemplate('Игрок не найден');
	}
	
	public function UserTransfer($rc) {
		if($rc == 1) return $this->errorTemplate('Сумма не может быть меньше 1$');
		if($rc == 2) return $this->errorTemplate('Игрок не найден');
		if($rc == 3) return $this->errorTemplate('Комментарий слишком длинный');
		if($rc == 4) return $this->errorTemplate('У меня нет столько денег');
		if($rc == 5) return $this->errorTemplate('Самому себе? Зачем?');
	
	}
	
}