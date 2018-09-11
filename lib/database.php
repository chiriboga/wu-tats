<?php
class Connection {

    var $host      = 'localhost';
	  var $user      = 'dueymusi_wunet';
	  var $password  = 'Blast434!';
    var $db        = 'dueymusi_wutatart';
    public $dbc;

    function __construct() {
       $con = $this->getSLQConn();   
        if(mysqli_errno($con)){
            echo"Error";           
        }
        else{
           $this->dbc = $con;
           //echo "connected ";
        }
    }
	
	function __destruct() {
		$con = $this->getSLQConn();
        mysqli_close($con);
		//echo 'destroyed';
    }
	
	function getSLQConn()
	{
		$con = mysqli_connect($this->host, $this->user, $this->password, $this->db);
		return $con;
	}
	
	function closedb()
	{
		mysqli_close($this->dbc);
	}
}
?>
