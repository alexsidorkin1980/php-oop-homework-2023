<?php

require_once 'classes/Teacher.php';//пiдключаю файли з классами
require_once 'classes/TeachersFile.php';

$teacher1=new Teacher('Александр','профессор');//створюю обекти
$teacher2=new Teacher('Иван','декан','философия');
$teacher3=new Teacher('Андрей','аспирант','');
 
    $teachers=array();//додаю обекти в массив
     array_push($teachers, $teacher1); 
     array_push($teachers, $teacher2); 
     array_push($teachers, $teacher3); 

    foreach ($teachers as $item) {//виводю массив
        echo $item ->print(). "<br>";
    }
//видаляю обекти з массиву
    unset($teachers[0]);
    unset($teachers[1]);


    foreach ($teachers as $item) {
        echo $item ->print(). "<br>";
    }


    // echo'<pre>';
    // print_r($teachers);
    
    $teachersFile=new TeachersFile();//створюю обект картотеку
    $teachersFile->addTeacher($teacher1);//додаю викладачiв в картотеку
    $teachersFile->addTeacher($teacher2);
    $teachersFile->addTeacher($teacher3);
    echo$teachersFile->printFiles();//виведення iнформацii картотеки

    // echo'<pre>';
    // print_r($teachersFile);

    
