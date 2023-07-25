<?php

class Teacher{

private string $name;
private string $position;
private string $subject;

public function __construct(string $name,string $position,string $subject=''){

    $this->name=$name;
    $this->position=$position;
    $this->subject= $subject;
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
    return $this->subject ;
}

public function print(): string
{

    $out="
    <hr><b>О преподавателе</b><br>
    Iм'я: {$this-> getName()}<br>
    
    Посада: {$this->getPosition()}<br>

    Предмет: {$this->getSubject()}<br>
    ";

    return $out;
}

}