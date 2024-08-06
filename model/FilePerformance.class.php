<?php
include ("database.class.php");
    class FilePerformance {
        private $student;
        private $subjet;
        private $qualification;
        private $comments;
        private $date;

        public function calculateAverage() {
            $sql="INSERT INTO FilePerformance (student, subjet, qualification, comments, date) VALUES (".$this->student.",'".$this->subjet."','".$this->qualification."','".$this->comments."','".$this->date.")";
          
            $this->conexion=new Database();
            $result= $this->conexion->query($sql);
            $this->conexion->close();
        
            return $result;
        }
        public function addComment() {
            //crear la consulta
            $sql="INSERT INTO FilePerformance (idStudent, dni, surname, name, birthdate, phone, address, email, password, school) VALUES (".$this->dni.",'".$this->surname."','".$this->name."','".$this->birthdate."','".$this->phone."', '".$this-> address."','".$this->email."','".$this->password."',".$this->school." )";
          
            $this->conexion=new Database();
           $result= $this->conexion->query($sql);
           $this->conexion->close();
       
           return $result;
           
       }
       public function getDetails() {
        $sql="SELECT * FROM FilePerformance WHERE student=".$this->student;
   
        $this->conexion=new Database();
       $result= $this->conexion->query($sql);
       $this->conexion->closeDB();
       if($result){
        if($row=$result->fetch_assoc()){
            $this->subjet=$row["subjet"];
            $this->qualification=$row["qualification"];
            $this->comments=$row["comments"];
            $this->date=$row["date"];
            return true;
        }
    }
    return false;
  }
  public function UpdateAverage() {
    $sql="UPDATE FilePerformance SET subjet=".$this->subjet.", qualification='".$this->qualification."', comments='".$this->comments."', date='".$this->date."' WHERE student=".$this->student;
    $this->conexion=new Database();
   $result= $this->conexion->query($sql);
   $this->conexion->close();

   return $result;
   
}
    }
?>

