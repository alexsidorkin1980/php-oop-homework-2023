<?php

class Teacher
{

    public function __construct(
        private string $key,
        private string $name,
        private string $position,
        private ?string $subject = ''
    ) {
    }



    public function setPosition($position)
    {
        return $this->position = $position;
    }
    public function getKey(): string
    {
        return $this->key;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function print(): string //функцiя виведення данних обьекта
    {
        return "
    <hr><b>О преподавателе</b><br>
    Ключ: {$this->getKey()}<br>
    Iм'я: {$this->getName()}<br>
    
    Посада: {$this->getPosition()}<br>

    Предмет: {$this->getSubject()}<br>
    ";
    }

}