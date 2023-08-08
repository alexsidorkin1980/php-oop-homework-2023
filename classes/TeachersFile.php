<?php
//класс картотеки
class TeachersFile
{
    public function __construct(
        private $teachers = array())
    {
    }

    public function addTeacher($element) //функцiя додовання обекту в картотеку
    {
        return array_push($this->teachers, $element);
    }

    public function addArray(array $element) //функцiя додовання массиву в картотеку
    {

        return array_push($this->teachers, ...$element);
    }


    public function removeTeacher($name, $position): void //функцiя видалення обекту з картотеки
    {
        foreach ($this->teachers as $key => $teacher) {
            if ($teacher->getName() == $name && $teacher->getPosition() == $position) {
                unset($this->teachers[$key]);
            }
        }
    }

    public function deleteTeacher($i) //функцiя видалення обекту з картотеки по iндексу
    {
        if ($i < 0 || $i > count($this->teachers) - 1) {
            return null;
        }
        unset($this->teachers[$i]);

    }

    public function deleteTeacherKey(string $key)//функцiя видалення обекту з картотеки по ключу
    { 
        $this->teachers = array_filter($this->teachers, function (Teacher $teacher) use ($key) {
            return $teacher->getKey() !== $key;
        });
    }


    public function getTeacher(int $i): ?string //функцiя виведення обекту з картотеки по iндексу
    {
        if ($i < 0 || $i > count($this->teachers) - 1) {
            return null;
        }
        return $this->teachers[$i]->print();


    }

    public function setAllPosition(string $position)//функцiя замiни посади усiх викладачiв 
    {
        $this->teachers = array_map(function (Teacher $teacher) use ($position) {
            $teacher->setPosition($position);
            return $teacher;
        }, $this->teachers);
    }

    public function printFiles(): array //функцiя виведення данних картотеки
    {
        return $this->teachers;
    }
}