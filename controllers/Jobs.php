<?php
error_reporting(0);
ini_set('display_errors', 1);
// Connnection Here
require_once('Connection.php');
class Jobs extends db
{
    public function register($first_name, $last_name, $email, $password)
    {
        $checkEmailQuery = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_prepare($this->con, $checkEmailQuery);
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);
        $resultCheckEmail = mysqli_stmt_get_result($stmt);
    
        if (mysqli_num_rows($resultCheckEmail) > 0) {
            return 'Email already in use.';
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
            $insertQuery = "INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($this->con, $insertQuery);
            mysqli_stmt_bind_param($stmt, 'ssss', $first_name, $last_name, $email, $hashedPassword);
    
            if (mysqli_stmt_execute($stmt)) {
                return 'Registration successful!';
            } else {
                return 'Error: ' . mysqli_error($this->con);
            }
        }
    }
    
}
