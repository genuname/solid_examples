<?php

/**
 * Реально используемый в коде класс
 */
class Bird {
    public function fly() {
        $flySpeed = 10;
        return $flySpeed;
    }
}

/**
 * Дочерний класс от Bird.
 * Не изменяет поведение, но дополняет.
 * Не нарушает принцип LSP
 */
class Duck extends Bird {
    public function fly() {
        $flySpeed = 8;
        return $flySpeed;
    }

    public function swim() {
        $swimSpeed = 2;
        return $swimSpeed;
    }
}

/**
 * Дочерний класс от Bird.
 * Изменяет поведение.
 * Нарушает принцип LSP
 */
class Penguin extends Bird {
    public function fly() {
        die('i can`t fly (((');  // не типичное поведение - die или exception
    }

    public function swim() {
        $swimSpeed = 4;
        return $swimSpeed;
    }
}

class BirdRun {
    private $bird;
    public function __construct(Bird $bird) {
        $this->bird = $bird;
    }

    public function run() {
        echo $this->bird->fly();
    }
}


/**
 * После замены использования Bird на Duck код будет работать как и прежде - принцип LSP соблюден.
 * После замены Bird на Penguin код меняет свое поведение, следовательно в данном случае принцип LSP нарушен.
 */
$bird    = new Bird();
//$bird = new Duck(); // Тут ок
//$bird = new Penguin(); // Тут не ок
$birdRun = new BirdRun($bird);
$birdRun->run();