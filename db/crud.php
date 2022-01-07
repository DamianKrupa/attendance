<?php 
    class crud{
        //prive database object
        private $db;

        //constructor to initialize private variable to the datebase connection
        function __construct($conn){
            $this->db = $conn;
        }
        //publiczna funkcja, która wstawia rekordy do bazy
        public function insertAttendees($fname, $lname, $dob, $email, $phone, $speciality){
            try {
                //$sql = "INSERT INTO attende VALUES (firstname,lastname,dob,email,phone,speciality_id) 
                                    //(:fname,:lname,:dob,:email,:phone,:speciality)";
                    $sql = "INSERT INTO `attende`(`firstname`, `lastname`, `dob`, `email`, `phone`, `speciality_id`) 
                                    VALUES (:fname,:lname,:dob,:email,:phone,:speciality)";

                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':phone',$phone);
                $stmt->bindparam(':speciality',$speciality);
                //execute statmant
                $stmt->execute();
                return true;


            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function edditAttendees($id, $fname, $lname, $dob, $email, $phone, $speciality){
            try{
                $sql = "UPDATE `attende` SET 
                `firstname`=:fname,
                `lastname`=:lname,
                `dob`=:dob,
                `email`=:email,
                `phone`=:phone,
                `speciality_id`=:speciality 
            WHERE `attendance_id`=:id";

                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':phone',$phone);
                $stmt->bindparam(':speciality',$speciality);
                //execute statmant
                $stmt->execute();
                return true;

            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        
        }



        public function getAttendees(){
            try{
                $sql = "SELECT * FROM `attende` as a inner join `specialities` as s 
                on a.speciality_id = s.speciality_id";
                $resutl = $this->db->query($sql);
                return $resutl;

            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }


        public function getAttendeesDetails($id){
        try{
            $sql = "SELECT * FROM `attende` as a inner join `specialities` as s 
            on a.speciality_id = s.speciality_id where attendance_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
            }
        }

        public function deleteAttendees($id){
            try{
                $sql = "DELETE FROM `attende` WHERE `attendance_id`=:id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                return true;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;

            }
    
        }
            


        public function getSpecialities(){
            $sql = "SELECT * FROM `specialities`";
            $resutl = $this->db->query($sql);
            return $resutl;
        }

      




    }
?>