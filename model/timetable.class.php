<?php
include ("database.class.php");
    class Timetable {
        private $year;
        private $division;
        private $course;
        private $subjet;
        private $shift;

        public function modify() {
            $sql="INSERT INTO timetable (year, division, course, subjet, shift) VALUES (".$this->year.",'".$this->division."','".$this->course."','".$this->subjet."','".$this->shift.")";
         
            $this->conexion=new Database();
            $result= $this->conexion->query($sql);
            $this->conexion->close();
        
            return $result;
        }
    }
?>