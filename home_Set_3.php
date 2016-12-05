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

  <!-- Navbar
================================================== -->

          <div class="navbar navbar-info">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div class="navbar-collapse collapse navbar-responsive-collapse">
				<ul class="nav navbar-nav">
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
            </div>

  <!-- Forms
================================================== -->

    <div class="row">
      <div >
        <div class="well bs-component">
          <form class="form-horizontal">
            <fieldset>
              <script language="JavaScript">

// Insert number of questions
var numQues = 15;

// Insert number of choices in each question
var numChoi = 4;

// Insert number of questions displayed in answer area
var answers = new Array(15);

// Insert answers to questions
answers[0] = "R";
answers[1] = "R";
answers[2] = "R";
answers[3] = "R";
answers[4] = "R";
answers[5] = "R";
answers[6] = "R";
answers[7] = "R";
answers[8] = "R";
answers[9] = "R";
answers[10] = "R";
answers[11] = "R";
answers[12] = "R";
answers[13] = "R";
answers[14] = "R";

// Do not change anything below here ...

function getScore(form) {
  var score = 0;
  var currElt;
  var currSelection;
  for (i=0; i<numQues; i++) 
{
    currElt = i*numChoi;
    for (j=0; j<numChoi; j++)
 {
      currSelection = form.elements[currElt + j];
      if (currSelection.checked) {
        if (currSelection.value == answers[i]) {
          score=score+4;
        }
		else
		{score--;}
      }
    }
  }
  location.href="http://localhost/Imagine_Code_UI_23_4/php/score_cal.php?score="+score;
  
}

function myFunction() {
    setTimeout(function(){document.getElementById('but').click();}, 1000*12*60);
}

var seconds_left = 720;
var interval = setInterval(function() {

    document.getElementById('timer_div').innerHTML =Math.floor((--seconds_left)/60)+" : "+(seconds_left%60);

}, 1000);

</script>

</HEAD>

<!-- STEP TWO: Copy this code into the BODY of your HTML document  -->

<BODY onload="javascript:myFunction();">

<h3>Web Design Quiz</h3>

<form name="quiz" id="quiz">

<div class="form-group">
  <center><legend>Set-3</legend>
	<p class="text-warning">Time Left:<legend id='timer_div' class="text-danger"><b></b></legend></p></center>
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp1. For security and secrecy, the type of atomic bomb, that was dropped on Nagasaki by the US, had a codename. What was the name?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q1" value="R">
            Fat Man
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q1"  value="xxx">
            Little Boy	
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q1"  value="xxx">
            Mad Man
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q1"  value="option2">
            Little Gift
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp2.  Which operator will always evaluate all the Operands?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q2" value="XXX">
            ||
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q2"  value="XXX">
            &&
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q2"  value="xxx">
            ?:
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q2"  value="R">
            %
          </label>
        </div>
		
      </div>
</div>


<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp3.  Which Company owned the RMS Titanic?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q3" value="XXX">
            British Merchant  Navy
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q3"  value="R">
            White Star Line 
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q3"  value="xxx">
            Princess Cruises
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q3"  value="option2">
            Merchant Navy of United Kingdom
          </label>
        </div>
		
      </div>
</div>


<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp4. Who invented Bluetooth?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q4" value="R">
            Jaap Haartsen
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q4"  value="xxx">
            James Arthur Gosling
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q4"  value="xxx">
            Patrick Naughton
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q4"  value="option2">
            Alan Turing
          </label>
        </div>
		
      </div>
</div>


<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp5.  What is JIT?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q5" value="XXX">
            debugger
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q5"  value="XXX">
            interpreter
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q5"  value="R">
            compiler
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q5"  value="option2">
            loader
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp6. Which county did Ravi Shastri play for?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q6" value="R">
            Glamorgan
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q6"  value="XXX">
            Leicestershire
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q6"  value="xxx">
            Glucestershire
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q6"  value="option2">
            Lancashire
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp7. IBM, the American multinational technology giant, was given a nickname. What was the nickname?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q7" value="XXX">
            The Mainframe Corp 
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q7"  value="xxx">
            Friend of Business
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q7"  value="R">
            Big Blue
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q7"  value="option2">
            The Blues and Stripes
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp8. Who has been ranked number one in latest Football ranking announced by Fifa?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q8" value="XXX">
            Germany
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q8"  value="XXX">
            Spain
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q8"  value="R">
            Argentina
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q8"  value="option2">
            Brazil
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp9. Which class cannot be a subclass in java?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q9" value="XXX">
            Abstract class
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q9"  value="XXX">
            Parent class	
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q9"  value="R">
            Final class
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q9"  value="option2">
            None of the above
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp10. What does VIRUS stand for?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q10" value="XXX">
            Very Important Resource Under Siege
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q10"  value="XXX">
            Valuable Information and ResourcesUnderSiege
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q10"  value="xxx">
            Variable Information and Resources Under Siege 
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q10"  value="R">
            Vital Information Resources Under Siege 
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp11. Which of the following is the correct order of evaluation for the below expression?
			z = x + y * z / 4 % 2 - 1</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q11" value="R">
            * / % + - =
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q11"  value="XXX">
            = * / % + -	
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q11"  value="xxx">
            / * % - + =
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q11"  value="option2">
            * % / - + =
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp12. Which of the following countries are joined by the Palk Strait??</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q12" value="XXX">
            Pakistan and China
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q12"  value="R">
            India and Sri Lanka	
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q12"  value="xxx">
            France and Britain
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q12"  value="option2">
            Madagascar and South Africa
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp13. Who is credited with the invention of the modern periodic table??</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q13" value="XXX">
            Nobel
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q13"  value="XXX">
            Lavoisier
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q13"  value="R">
            Mendeleev
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q13"  value="option2">
            Mendel
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp14. Which Indian region is the only place in the world where the Asiatic Wild Ass is found??</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q14" value="XXX">
            Sunderban
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q14"  value="XXX">
            Coromandel
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q14"  value="R">
            Rann of Kutch
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q14"  value="option2">
            Andaman and Nicobar Islands
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp15. This company bought Yahoo! in 2016 _____ </p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q15" value="XXX">
            Google Inc.
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q15"  value="XXX">
            Apple Inc.	
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q15"  value="XXX">
            AT&T
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q15"  value="R">
            Verizon
          </label>
        </div>
		
      </div>
</div>


	<center>
	<input type="button" value="Submit" class="btn btn-raised btn-warning" id="but" onClick="getScore(this.form)">
	</center>
	<br>
</form>
              
                
              </div>
			</fieldset>
          </form>
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
