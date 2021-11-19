<?php
    class crud{

        //private database object
        private $db;

        //constructor to initialize private variable to the database connection
        function __construct ($conn){
            $this ->db = $conn;
        }
        //function to insert a new record into the attendee database
        public function insertPatient($firstname, $lastname, $address1, $address2, $parish, $dob, $gender, $email, $contact, $avatar_path){
            try {
                //define sql statement to be executed
            

                $sql = "INSERT INTO patient (firstname, lastname, address1, address2, parish_id, dateofbirth, gender, emailaddress,contactnumber,avatar_path)VALUES (:firstname,:lastname,:address1,:address2,:parish,:dob,:gender,:email,:contact,:avatar_path)";
                //prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);

                //bind all placeholders to the actual values
                $stmt->bindparam(':firstname',$firstname);
                $stmt->bindparam(':lastname',$lastname);
                $stmt->bindparam(':address1',$address1);
                $stmt->bindparam(':address2',$address2);
                $stmt->bindparam(':parish',$parish);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':gender',$gender);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':avatar_path',$avatar_path);

                //execute statement
                $stmt->execute();
                return true;

            } catch (PDOException $e){

                echo $e->getMessage();
                return false;
            }

        }

        public function editPatient($id, $firstname, $lastname, $address1, $address2, $parish, $dob, $gender, $contact){
           try{
            $sql ="UPDATE `patient` SET `firstname`=:firstname,`lastname`=:lastname,`address1`=:address1,`address2`=:address2,`parish_id`=parish,`dateofbirth`=:dob,`gender`=:gender,`emailaddress`=:email,`contactnumber`=:contact WHERE patient_id = :id";
            
            $stmt = $this->db->prepare($sql);

                //bind all placeholders to the actual values
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':firstname',$firstname);
                $stmt->bindparam(':lastname',$lastname);
                $stmt->bindparam(':address1',$$address1);
                $stmt->bindparam(':address2',$$address2);
                $stmt->bindparam(':parish',$$parish);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':gender',$gender);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
 
                //execute statement
                $stmt->execute();
                return true;

           }catch (PDOException $e){

                echo $e->getMessage();
                return false;
           }
           
            
        
        }

        public function getPatients(){

            try{
                $sql = "SELECT * FROM `patient` a inner join parish b on a.parish_id = b.parish_id";
                $result = $this->db->query($sql);
                return $result;

            }catch(PDOException $e){

                echo $e->getMessage();
                return false;
            }
            
            
        }

        public function getPatientDetails($id){

            try{
                $sql = "select * from patient a inner join parish b on a.parish_id = b.parish_id where patient_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result; 

            }catch(PDOException $e){

                echo $e->getMessage();
                return false;
            }         
        }

        public function deletePatient($id){
            try{
                $sql = "delete from patient where patient_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->execute();
                return true;
            }catch(PDOException $e){

                echo $e->getMessage();
                return false;
            }
            
        }
        
        public function getParish(){
            try {
                $sql = "SELECT * FROM `parish`";
                $result = $this->db->query($sql);
                return $result;

            }catch(PDOException $e){

                echo $e->getMessage();
                return false;
            }
        }

        public function getParishbyID($id){
            try {
                $sql = "SELECT * FROM `parish` where parish_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result; 

            }catch(PDOException $e){

                echo $e->getMessage();
                return false;
            }
        }
        

    }

?>