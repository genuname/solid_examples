<?php

/**
 * Пример интерфейса класса животного, которое содержит слишком много методов.
 *
 * Банально - рыба ходить не может, а так же прыгать. Но при этом все животные могут дышать в той или иной степени.
 */
interface Animal {
    public function breath();
    public function fly();
    public function swim();
    public function jump();
    public function walk();
}

/**
 * Разделим данные интерфейс.
 */
// Тут у нас будет базовый класс.
interface Animal {
    public function breath();
}

// И начинаем разделять интерфейсы на более тонкие.
interface Fish extends Animal {
    public function swim();
}

// И так далее для остальных видов животных...