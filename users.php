
<?php
session_start();
class users{
    public $host="localhost";
    public $username="root";
    public $pass="";
    public $db_name="pro";
    public $conn;
     public $data;


     public function __construct()
    {
        $this->conn= new mysqli($this->host,$this-> username,$this->pass,$this->db_name );
        if($this->conn->connect_errno)
        {
        die("connection failed".$this->conn->connect_errno);
        }
    }

    public function signup($data)
    {
     $this->conn->query($data);
        return true;
       
     }
     public function profile($email)
     {
        $query= $this->conn->query("select * from project where email='$email' ");
         $res =$query->fetch_array(MYSQLI_ASSOC);
         if($query->num_rows>0)
         {
          $this->data[]=$res; 
         }
         return $this->data; 

     }
     
     public function url($url)
     {
         header("location:".$url);
     }
     public function signin($email,$pass)
     {
         $query= $this->conn->query("select email,pass from project where email='$email' AND pass='$pass'");
         $query->fetch_array(MYSQLI_ASSOC);
         if($query->num_rows>0)
         {
             $_SESSION['email']=$email;
             return true;
         }
         else
         {
             return false;
         }
     }
}

?>
