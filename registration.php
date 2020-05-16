<?php
//other input constraints  that can be added...... empty inputs, filter data, check for duplicate email address

require "dbconfig.php";

if (isset($_POST["first_name"])) {

    $first_name = trim($_POST["first_name"]);
    $last_name = trim($_POST["last_name"]);
    $age = trim($_POST["age"]);
    $email = trim($_POST["email"]);
    $address = trim($_POST["address"]);

    //return true on success
    echo register($DB_con, $first_name, $last_name, $age, $email, $address);


}

function register($DB_con, $first_name, $last_name, $age, $email, $address)
{
    try {
        $conf = $DB_con->prepare("                                    
                                    INSERT INTO `user` ( `first_name`, `last_name`, `age`, `email`, `address`) VALUES (:first_name, :last_name, :age, :email, :address)
                                ");

        $conf->bindValue(":first_name", $first_name);
        $conf->bindValue(":last_name", $last_name);
        $conf->bindValue(":age", $age);
        $conf->bindValue(":email", $email);
        $conf->bindValue(":address", $address);


        if ($conf->execute()) {

            //use the user id to add work experience to work exp table
            $user_id = $DB_con->lastInsertId();
            return save_work_experience($DB_con, $user_id);

        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function save_work_experience($DB_con, $user_id)
{
    $company_name = $_POST["company_name"];
    $role = $_POST["role"];
    $work_duration = $_POST["work_duration"];

    try {
        for ($i = 0; $i < sizeof($company_name); $i++) {
            $conf = $DB_con->prepare("  
                                        INSERT INTO `user_work_experience` (`user_id`, `company_name`, `role`, `work_duration`) VALUES (:user_id, :company_name, :role, :work_duration);                                  
                                   ");

            $conf->bindValue(":user_id", $user_id);
            $conf->bindValue(":company_name", trim($company_name[$i]));
            $conf->bindValue(":role", trim($role[$i]));
            $conf->bindValue(":work_duration", trim($work_duration[$i]));


            if (!$conf->execute()) {
                return false;
            }
        }

        return true;

    } catch (PDOException $e) {
        echo $e->getMessage();

    }
}

