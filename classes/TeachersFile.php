<?php
//класс картотеки
class TeachersFile{

    private $teachers = array();

    public function addTeacher($teacher) : void //функцiя додавання обекту в картотеку
    {
        $this->teachers[] = $teacher;
    }

    public function printFiles() : void //функцiя виведення данних картотеки
    {
        foreach ($this->teachers as $teacher) {
            echo $teacher->print(); 
            echo "<br>";
        }
    }
}