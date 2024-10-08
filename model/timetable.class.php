<?php
include ("database.class.php");
    class Timetable {
        private $year;
        private $division;
        private $course;
        private $subjet;
        private $shift;

        public function editTimetable() {
            $sql="INSERT INTO timetable (year, division, course, subjet, shift) VALUES (".$this->year.",'".$this->division."','".$this->course."','".$this->subjet."','".$this->shift.")";
         
            $this->conexion=new Database();
            $result= $this->conexion->query($sql);
            $this->conexion->close();
        
            return $result;
        }
    }
     function getTimetable() {
        $sql="SELECT * FROM students WHERE idStudent=".$this->idStudent;
   
        $this->conexion=new Database();
       $result= $this->conexion->query($sql);
       $this->conexion->closeDB();
       if($result){
        if($row=$result->fetch_assoc()){
            $this->year=$row["year"];
            $this->division=$row["division"];
            $this->course=$row["course"];
            $this->subjet=$row["subjet"];
            $this->shift=$row["shift"];
            return true;
        }
    }
    return false;
  }
  //Geeter y Seeter
 function getyear () {
    return $this -> year;
}
 function setyear ($year){
    $this ->year=$year;
}

 function getdivision () {
    return $this -> division;
}
 function setdivision ($division){
    $this ->division=$division;
}

 function getcourse () {
    return $this -> course;
}
 function setcourse ($course){
    $this ->course=$course;
}

 function getsubjet () {
    return $this -> subjet;
}
 function setsubjet ($subjet){
    $this ->subjet=$subjet;
}

 function getshift () {
    return $this -> shift;
}
 function setshift ($surshift){
    $this ->shift=$surshift;
}

?>