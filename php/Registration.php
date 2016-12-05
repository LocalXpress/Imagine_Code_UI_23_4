<?php 
session_start();

try {
    $db = new PDO("mysql:dbname=quiz;host=localhost", "root", "" );
    echo "PDO connection object created";
    }
catch(PDOException $e)
    {
    alert($e->getMessage()) ;
    }
	
	$name1=$_POST['name1'];
	$name2=$_POST['name2'];
	$ph=$_POST['ph'];
	$email=$_POST['email'];
	
	$sql = $db->prepare("INSERT INTO quiz_1 (name_1,name_2,ph,email)VALUES(:name1, :name2, :ph,:email)");
		$sql->execute(array(
		"name1" => $name1,
		"name2" => $name2,
		"ph" => $ph,
		"email"=>$email));
		
		$sql="select * from quiz_1 where email='$email'";
		foreach($db->query($sql) as $row)
		{$_SESSION['sl']=$row['sl'];}
		
		echo "The session variable is: ".$_SESSION['sl'];
		
		header("location:http://localhost/Imagine_Code_UI_23_4/rules_pg.php");
	
	
?>