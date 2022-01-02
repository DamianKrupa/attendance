<?php 
    class crud{
        //prive database object
        private $db;

        //constructor to initialize private variable to the datebase connection
        function __construct($conn){
            $this->db = $conn;
        }
        //publiczna funkcja, która wstawia rekordy do bazy
        public function insert($fname, $lname, $dob, $email, $phone, $speciality){
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
    }
?>