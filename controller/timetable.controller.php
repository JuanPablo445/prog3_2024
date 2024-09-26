<?php
include ("database.class.php");
class Timetable {
    private $division;
    private $course;
    private $shift;

    public function editTimetable() {
        $sql="INSERT INTO timetable (division, course, shift) VALUES (".$this->division."','".$this->course."','".$this->shift.")";
     
        $this->conexion=new Database();
        $result= $this->conexion->query($sql);
        $this->conexion->close();
    
        return $result;
    }
}
  function getAlltimetable() {
    $sql="SELECT * FROM timetable WHERE division=".$this->division;
    $this->conexion=new Database();
    $result= $this->conexion->query($sql);
    $alltimetable=null;
    if($result){
    while($row=$result->fetch_assoc()){
        $alltimetable[]=$row;
         }
        }
        return $alltimetable;
    }
?>