<?php
include ("database.class.php");
    class Timetable {
        private $division;
        private $course;
        private $shift;

        public function editTimetable() {
            $sql="INSERT INTO timetable (division, course, , shift) VALUES (".$this->division."','".$this->course."','".$this->shift.")";
         
            $this->conexion=new Database();
            $result= $this->conexion->query($sql);
            $this->conexion->close();
        
            return $result;
        }
    }
     function getTimetable() {
        $sql="SELECT * FROM timetable WHERE division=".$this->division;
   
        $this->conexion=new Database();
       $result= $this->conexion->query($sql);
       $this->conexion->closeDB();
       if($result){
        if($row=$result->fetch_assoc()){
            $this->division=$row["division"];
            $this->course=$row["course"];
            $this->shift=$row["shift"];
            return true;
        }
    }
    return false;
  }

  //Geeter y Seeter
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
 function getshift () {
    return $this -> shift;
}
 function setshift ($surshift){
    $this ->shift=$surshift;
}

?>