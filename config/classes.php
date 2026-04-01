<?php
session_start();
trait connection
{
    protected $con; 

    function database()
    {
        $this->con = mysqli_connect("localhost","root","","classroom_project");

        if($this->con==TRUE)
        {
            return $this->con;
        }
        else
        {
            return connection_status();
        }
    }
}

class classroom
{
    use connection;

    function __construct()
    {
        $this->database();
    }

    function login($email,$password)
    {
        $sql = "select * from users where email='$email' AND pass='$password'";
        $result = mysqli_query($this->con,$sql);
        $users = mysqli_fetch_array($result);

        if($users>0)
        {
            $_SESSION["user_id"] = $users[0];
            $_SESSION["username"] = $users[1];

            header("Location:../index.php");
        }
        else
        {
            echo "not found";
        }

    }
}

?>