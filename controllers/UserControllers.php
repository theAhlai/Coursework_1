<?php
    class UserControllers{
        public function register(
            $firstname,$lastname, $email, $password){

                // global database connection
                global $connection;

                // hashing the password
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // INSERTING DATA INTO DATABASE
                $sqlQuery = "
                    INSERT INTO users(firstname, lastname, email, password)
                    VALUES('$firstname', '$lastname', '$email', '$hashed_password');
                ";

                // Executing the query
                if($connection -> query($sqlQuery) === TRUE){
                    return  "User registered successfully!";
                } else{
                    return "Error registering user!" . $connection -> error;
                }

        }

        // get all users
        public function getUsers(){
            global $connection;

            // sql query to get all users
            $sqlQuery = "SELECT * FROM users";

            // executing the query
            $result = $connection -> query($sqlQuery);

            // The result is not accessed by our UI, bcz
            // it has multiple data, so we need to convert to array
            $users = array(); // [ {}, {}, {} ] format

            // while loop to convert the result to array
            if($result && $result -> num_rows > 0){
                while($row = $result -> fetch_assoc()){
                    $users[] = $row;
                }
            }
            // send the array to the UI
            return $users;
        }

        // update user
        public function updateUser($firstname, $lastname, $email){
            global $connection;


            $sqlQuery = "
                UPDATE users
                SET firstname = '$firstname', lastname = '$lastname', email = '$email'
                WHERE email = '$email';
            ";
            // Executing the query
            if($connection -> query($sqlQuery) === TRUE){
                return "User updated successfully!";
            } else{
                return "Error updating user!" . $connection -> error;
            }


        }


    }
?>