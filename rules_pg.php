<?php
session_start();
$sl=$_SESSION['sl'];


if(!isset($_SESSION['sl'])) 
	{ 
		header("Location:http://localhost/Imagine_Code_UI_23_4/registration.php");
		exit;
	} 

try
{
	$db = new PDO("mysql:dbname=quiz;host=localhost", "root", "" );
}
catch(PDOException $e)
{
    alert($e->getMessage()) ;
}   
?>


<!DOCTYPE html>
<html>
<!-- MEMO: update me with `git checkout gh-pages && git merge master && git push origin gh-pages` -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <title>quizard</title>

  <!-- Material Design fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Material Design -->
  <link href="dist/css/bootstrap-material-design.css" rel="stylesheet">
  <link href="dist/css/ripples.min.css" rel="stylesheet">


  <link href="http://fezvrasta.github.io/snackbarjs/dist/snackbar.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
<body>

<div class="container">

    <div class="navbar navbar-info">
		<div class="container-fluid">
			<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
			</div> 
			<div class="navbar-collapse collapse navbar-responsive-collapse">
			<?php
			$sql="select * from quiz_1 where sl=$sl";
			foreach($db->query($sql) as $row){
			?>
				<ul class="nav navbar-nav">
					<h3><li><a class="navbar-brand" href="javascript:void(0)"><b><i class="material-icons md-48"><i class="material-icons">account_circle</i></i>&nbsp&nbsp<?php echo $row['name_1'];?></a>
					
					<a class="navbar-brand" href="javascript:void(0)"> and <?php echo $row['name_2'];}?></b></a></li></h3>
					
				</ul>
			</div>		
        </div>
    
	<div class="row">
      
        <div class="well bs-component">
          <form class="form-horizontal">
            <fieldset>
              <legend class="text-warning">Welcome to Quizzard, here are the rules and regulations for you, do you agree?<br><br><center><b>RULES & REGULATIONS</b></center><br></legend>
			  <p class="text-primary">1. The quiz consists of 15 questions.</p>
			  <p class="text-primary">2. Total time given for the completion of the question is 12 minutes.</p>
			  <p class="text-primary">3. +4 is awarded for every correct answers.</p>
			  <p class="text-danger">4. -1 is awarded for every wrong answers.</p>
			  <p class="text-primary">5. Top 11 teams from this round will move to the second round.</p>
			  <p class="text-info">6. After the completion of 12 minutes, the quiz will be submitted automatically, you can submit the test before the stipulated time also.</p>
			  <p class="text-danger">7. DON'T REFRESH THE PAGE DURING THE QUIZ, THEN YOU WILL LOSE ALL YOUR PROGRESS.</p>
			  <p class="text-danger">8. Start-time and End-time of the quiz is stored in the Database.</p>
			   <p class="text-danger">9. In case the marks are tied for a position, then the team taking minimum time will be given priority.</p>
			   <center><p class="text-primary"><b>TECHKRUNCH TEAM WISHES YOU BEST OF LUCK!!!!</b></p></center>
			   
			  
			  

              
            </fieldset>
			
			<center>
			<a href="http://localhost/Imagine_Code_UI_23_4/php/set_allot.php" class="btn btn-raised btn-success">START TEST</a>
			</center>
			
          </form>
        </div>
      </div>
     </div> 
    </div>
  </div>    
</div>
    
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script src="dist/js/ripples.min.js"></script>
<script src="dist/js/material.min.js"></script>
<script src="http://fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script>


<script src="http://cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
<script>
  $(function () {
    $.material.init();
    $(".shor").noUiSlider({
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });

    $(".svert").noUiSlider({
      orientation: "vertical",
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });
  });
</script>
</body>
</html>
