<?php

    class viewUser extends getUser {

        public function viewAllUser() {
            $datas = $this->getAllUser();
            foreach($datas as $data)
            {
                echo $data['emp_lname']." ";
                echo $data['emp_fname']."<br>";
            }
        }
        
    }