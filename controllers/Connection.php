<?php
error_reporting(0);
ini_set('display_errors', 1);

class db
{
    public $con;
    public function __construct()
    {
        $this->con = mysqli_connect('localhost', 'root', '', 'job-application') or die(mysqli_error());
    }
    
}