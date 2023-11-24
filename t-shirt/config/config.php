<?php

class Config{

    private $host = '127.0.0.1';
    private $username = 'root';
    private $password = '';

    private $db_name = 'walls';

    public $admin_username = 'tushal07';
    public $admin_paw = 'tushal.123@';
    

    private $teas_table = 'teas';

    private $conn;

    public function __construct(){

            $this-> conn = mysqli_connect($this->host,$this->username,$this->password,$this->db_name);

            if($this->conn){
                // echo " Connected...";
            }
            else{
                echo "Not Connected...";
            }

    }




    public function insert_teas($t_shirt,$price,$category) {

        $query = "INSERT INTO $this->teas_table (t_shirt,price, category) VALUES ('$t_shirt','$price', '$category')";

        return mysqli_query($this->conn, $query);

    }
    

    public function get_all_teas() {

        $query = "SELECT * FROM $this->teas_table";

        return mysqli_query($this->conn,$query);

    }

    
    public function delete_teas($id) {

        $query = "DELETE FROM $this->teas_table WHERE id = $id";

        return mysqli_query($this->conn,$query);

    }

    public function update_teas($id,$t_shirt,$price,$category) {

        $query = "UPDATE $this->teas_table SET t_shirt='$t_shirt',price='$price',category='$category' WHERE id=$id";

        return mysqli_query($this->conn,$query);

    }

}   


?>

