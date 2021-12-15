<?php
    function sendEmail($id){

        try {
            $sql = "SELECT `email` FROM `patient` where patient_id = :id";
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
    
   
}{


        $user_email = $user->user_email;
   
        $user_full_name = $user->user_firstname . $user->user_lastname;

    // Now we are ready to build our welcome email
    
?>