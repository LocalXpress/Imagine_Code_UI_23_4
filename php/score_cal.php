<?php
//The end time will be updated.
//The marks will be updated.
//Then the page will be redirected to a dead-end page.

try {
    $db = new PDO("mysql:dbname=quiz;host=localhost", "root", "" );
    //echo "PDO connection object created";
    }
catch(PDOException $e)
    {
    alert($e->getMessage()) ;
    }
	
session_start();
$sl=$_SESSION['sl'];
$score=$_GET['score'];

$sql = $db->prepare("UPDATE quiz_1 SET end_time=CURRENT_TIMESTAMP WHERE sl=$sl");
$sql->execute(array());

$sql = $db->prepare("UPDATE quiz_1 SET mark=:score WHERE sl=$sl");
$sql->execute(array("score"=>$score));

unset($_SESSION['sl']);
session_destroy();
header("Location:http://localhost/Imagine_Code_UI_23_4/score_pg.php?score=".$score);
?>