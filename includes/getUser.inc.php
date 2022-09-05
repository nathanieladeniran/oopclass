<?php

    class getUser extends DB {
        
        protected function getAllUser() {
            $user = "SELECT * FROM sms_emptab ";
            $result = $this->connect()->query($user);
            $numrows = $result->num_rows;
            if($numrows > 0)
            {
                while($rows = $result->fetch_assoc())
                {
                    $data[] = $rows; 
                }
                return $data;
            }
        }
    }