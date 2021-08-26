<?php

class Db{
	public $servername;
	public $username;
	public $password;
	public $dbname;
	public $tablename;
	public $con;


	public function __construct(
$dbname="newdb",
$tablename="newtb",
$servername="localhost",
$username="root",
$password=""
	)
	{
	$this->$dbname=$dbname;
	$this->$tablename=$tablename;
	$this->$servername=$servername;
	$this->$username=$username;
	$this->$password=$password;

	$con=mysqli_connect($servername,$username,$password,$dbname);

	if(!$con){
		die("Connection Failed : ".mysqli_connect_error());

	}

	$sql="CREATE DATABASE IF NOT EXISTS $dbname";

	if(mysqli_query($con,$sql)){
		$con=mysqli_connect($servername,$username,$password,$dbname);

		$sql="CREATE TABLE IF NOT EXISTS $tablename
		      (id INT(11) NOT NULL PRIMARY KEY, Click_Count INT(20));";

		if(!mysqli_query($con,$sql)){
			echo "Error creating table:".mysqli_error($con);

		}
		else{
			return false;
		}
	}
}

}
?>