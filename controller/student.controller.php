<?php
    include("Model/student.class.php");

    $student=new Student();//creamos el objeto $student de tipo Student

  

    $operation=$_REQUEST["operation"];

  
    if ($operation=="add"){
        $student->setDni ($_REQUEST ["dni"]);
        $student->setName($_REQUEST ["name"]);
        $student->addStudent();
        
    }else if($operation=="update"){
       $student->setIdStudent($_REQUEST["idStudent"]);
       $student->setDni ($_REQUEST["]dni"]);
       $student->setName($_REQUEST["name"]);
       $student->setSurname($_REQUEST["surname"]);
       $student->setBirthdate($_REQUEST["birthdate"]);
       $student->setAddress($_REQUEST["address"]);
       $student->setEmail($_REQUEST["email"]);
       $student->setPhone($_REQUEST["phone"]);
       $student->setIdSchool($_REQUEST["school"]);
       $student->setPassword($_REQUEST["password"]);
       $student->editStudent ();

       
    }else if($operation=="delete"){
        $student->setIdStudent ($_REQUEST["idStudent"]);
        $result=$student->deleteStudent();
        echo $result;
    }
    
    ?>