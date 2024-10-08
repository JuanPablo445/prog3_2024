<?php
include ("database.class.php");
    class FilePerformance {
        private $student;
        private $course;
        private $division;
        private $teacher;
        private $assistantTeacher;
        private $date;

        public function calculateAverage() {
            $sql="INSERT INTO FilePerformance (student, course, division, teacher, assistantTeacher, date) VALUES (".$this->student.",'".$this->course."','".$this->division."','".$this->teacher."','".$this->assistantTeacher."','".$this->date.")";
          
            $this->conexion=new Database();
            $result= $this->conexion->query($sql);
            $this->conexion->close();
        
            return $result;
        }
        public function addComment() {
            //crear la consulta
            $sql="INSERT INTO FilePerformance (student, course, division, teacher, assistantTeacher, date) VALUES (".$this->student.",'".$this->course."','".$this->division."','".$this->teacher."','".$this->assistantTeacher."','".$this->date.")";
          
            $this->conexion=new Database();
           $result= $this->conexion->query($sql);
           $this->conexion->close();
       
           return $result;
           
       }
       public function getDetails() {
        $sql="SELECT * FROM FilePerformance WHERE students=".$this->student;
   
        $this->conexion=new Database();
       $result= $this->conexion->query($sql);
       $this->conexion->closeDB();
       if($result){
        if($row=$result->fetch_assoc()){
            $this->student=$row["student"];
            $this->course=$row["course"];
            $this->division=$row["division"];
            $this->teacher=$row["teacher"];
            $this->assistantTeacher=$row["assistantTeacher"];
            $this->date=$row["date"];
            return true;
        }
    }
    return false;
  }
  public function UpdateAverage() {
    $sql="UPDATE FilePerformance SET student=".$this->student.", course='".$this->course."', division='".$this->division."', teacher='".$this->teacher."',assistantTeacher='".$this->assistantTeacher."', date='".$this->date."' WHERE student=".$this->student;
    $this->conexion=new Database();
   $result= $this->conexion->query($sql);
   $this->conexion->close();

   return $result;
   
}
    }
     //Geeter y Seeter
      function getstudent () {
        return $this -> student;
    }
     function setstudent ($student){
        $this ->student=$student;
    }

     function getcourse () {
        return $this -> course;
    }
     function setcourse ($course){
        $this ->course=$course;
    }

     function getdivision () {
        return $this -> division;
    }
     function setdivision ($division){
        $this ->division=$division;
    }
    
     function getteacher() {
        return $this -> teacher;
    }
     function setteacher ($teacher){
        $this ->teacher=$teacher;
    }

     function getassistantTeacher () {
        return $this -> assistantTeacher;
    }
     function setassistantTeacher ($assistantTeacher){
        $this ->assistantTeacher=$assistantTeacher;
    }

     function getdate () {
        return $this -> date;
    }
     function setdate ($date){
        $this ->date=$date;
    }

?>

