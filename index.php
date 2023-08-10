<?php

require_once 'classes/Teacher.php'; //пiдключаю файли з классами
require_once 'classes/TeachersFile.php';

$teacher = new Teacher('professor-1', 'Георий', 'лаборант'); //створюю обекти
$teacher1 = new Teacher('professor-2', 'Александр', 'профессор'); //створюю обекти
$teacher2 = new Teacher('professor-3', 'Иван', 'декан', 'философия');
$teacher3 = new Teacher('professor-4', 'Андрей', 'аспирант', '');

$teachers = array(); //додаю обекти в массив
array_push($teachers, $teacher1);
array_push($teachers, $teacher2);
array_push($teachers, $teacher3);

$teachersFile = new TeachersFile(); //створюю обект картотеку
$teachersFile->addTeacher($teacher); //додаю викладачiв в картотеку
$teachersFile->addTeacher($teacher1);
$teachersFile->addTeacher($teacher2);
$teachersFile->addTeacher($teacher3);



// $teachersFile->addArray($teachers); //додаю массив викладачiв в картотеку

//$teachersFile->addTeacher($teacher); //додаю  викладача в картотеку


//$teachersFile->removeTeacher('Иван','декан');//видалення викладачiв з картотеки по iменi та посадi

//$teachersFile->deleteTeacher(2);//видалення обекту з картотеки по iндексу

// $teachersFile->deleteTeacherKey("professor-2");//видалення за ключем

// echo$teachersFile->getTeacher(3);//виведення обекту з картотеки по iндексу

$teachersFile->setAllPosition("math-professor"); //замiна посади 

echo$teacher->getAttribute('key');
// echo'<pre>';
// print_r($teachersFile);

foreach ($teachersFile->printFiles() as $teach)
    echo $teach->print(); //виведення iнформацii картотеки
