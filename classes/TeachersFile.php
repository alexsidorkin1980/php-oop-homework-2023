<?php
//класс картотеки
class TeachersFile{

    private $teachers = array();

    public function addTeacher($teacher) : void //функцiя додавання обекту в картотеку
    {
        $this->teachers[] = $teacher;
    }

    public function removeTeacher($name,$position) : void//функцiя видалення обекту з картотеки
    {
        foreach ($this->teachers as $key=>$teacher) {
            if ($teacher->getName() == $name&&$teacher->getPosition() == $position) {
                unset($this->teachers[$key]);
            }
        }
    }

    public function printFiles() : void //функцiя виведення данних картотеки
    {
        foreach ($this->teachers as $teacher) {
            echo $teacher->print(); 
            echo "<br>";
        }
    }
}