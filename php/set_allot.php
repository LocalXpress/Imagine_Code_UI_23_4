<?php
try {
    $db = new PDO("mysql:dbname=quiz;host=localhost", "root", "" );
    echo "PDO connection object created";
    }
catch(PDOException $e)
    {
    alert($e->getMessage()) ;
    }
	
session_start();
$sl=$_SESSION['sl'];
$set=(($sl%4)+1);

$sql = $db->prepare("UPDATE quiz_1 SET start_time=CURRENT_TIMESTAMP WHERE sl=$sl");
$sql->execute(array());

if($set==1)
	header("Location:http://localhost/Imagine_Code_UI_23_4/home_Set_1.php");
else if($set==2)
	header("Location:http://localhost/Imagine_Code_UI_23_4/home_Set_2.php");
else if($set==3)
	header("Location:http://localhost/Imagine_Code_UI_23_4/home_Set_3.php");
else
	header("Location:http://localhost/Imagine_Code_UI_23_4/home_Set_4.php");


?>