<?php
    include("Model/student.class.php");

    $student=new Student();//creamos el objeto $student de tipo Student

  

    $operation=$_REQUEST["operation"];

  
    if ($operation=="add"){
        $student->setDni ($_REQUEST ["dni"]);
        $student->setName($_REQUEST ["name"]);
        $student->addStudent();
        
    }else if($operation=="update"){

    }else if($operation=="delete"){

    }
    
    
    ?>