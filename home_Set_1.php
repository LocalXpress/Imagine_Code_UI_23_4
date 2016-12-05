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


  <title>Quizard</title>

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
				<ul class="nav navbar-nav navbar-left">
			<?php
			$sql="select * from quiz_1 where sl=$sl";
			foreach($db->query($sql) as $row){
			?>
				<ul class="nav navbar-nav">
					<h3><li><a class="navbar-brand" href="javascript:void(0)"><b><i class="material-icons md-48"><i class="material-icons">account_circle</i></i>&nbsp&nbsp<?php echo $row['name_1'];?></a>
					
					<a class="navbar-brand" href="javascript:void(0)"> and <?php echo $row['name_2'];}?></b></a></li></h3>
				</ul>
                  </li>
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
<!-- Begin
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
<form name="quiz" id="quiz">

<div class="form-group">
	<center><legend>Set-1</legend>
	<p class="text-warning">Time Left:<legend id='timer_div' class="text-danger"><b></b></legend></p></center>
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp1. What is the scope of external variable?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q1" value="XXX">
            Whole source file in which it is defined
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q1"  value="R">
            From the point of declaration to the end of the file being compiled
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q1"  value="xxx">
            Any source file in a program
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q1"  value="option2">
            From the point of declaration to the end of the file in which it is defined
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp2. What does XML stand for?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q2" value="R">
            Extensible Markup Language
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q2"  value="XXX">
            Essential Mod Language
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q2"  value="xxx">
            Electron Marking Language
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q2"  value="option2">
            Extensive Markup Language
          </label>
        </div>
		
      </div>
</div>


<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp3. Class is a _____ entity?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q3" value="XXX">
            Physical
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q3"  value="xxx">
            Up normal
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q3"  value="R">
            Logical
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q3"  value="option2">
            Collection of
          </label>
        </div>
		
      </div>
</div>


<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp4. Which of these collection class has the ability to grow dynamically?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q4" value="XXX">
            Arrays
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q4"  value="R">
            ArrayList
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q4"  value="xxx">
            Array	
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q4"  value="option2">
            (None of these)
          </label>
        </div>
		
      </div>
</div>


<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp5. The distance covered in half Marathon is approximately -</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q5" value="R">
            21 km
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q5"  value="xxx">
            42 km
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q5"  value="xxx">
             11 km
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q5"  value="option2">
            5 km
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp6. Which part of a Computer System hardware connects a computer to computer network?</p><br>

      <div class="col-md-10">
	  
	  	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q6" value="R">
            NIC	
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q6"  value="xxx">
            CAT 5 socket
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q6"  value="xxx">
             MODEM 
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q6"  value="option2">
            router
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp7. Before the Internet was invented, The United States Department of Defense developed its own working network system. What was its name?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q7" value="XXX">
            Telenet
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q7"  value="xxx">
            NSFNET
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q7"  value="xxx">
             CYCLADES 
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q7"  value="R">
            ARPANET
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp8. Facsimile was a very popular device. What is its common name?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q8" value="XXX">
            Photocopier 
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q8"  value="xxx">
            Xerox 
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q8"  value="xxx">
             Telex 
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q8"  value="R">
            Fax
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp9. Who was the lead architect of the famous World Trade Centre situated in New York, USA?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q9" value="XXX">
            Edward Durell Stone
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q9"  value="xxx">
            Frank Lloyd Wright 
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q9"  value="R">
             Minoru Yamasaki 
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q9"  value="option2">
            Philip Johnson
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp10. Which was the first Indian sound film?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q10" value="R">
            Alam Ara	
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q10"  value="xxx">
            Raja Harischandra	
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q10"  value="xxx">
             Kishan Kanya 
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q10"  value="xxx">
            None of the above
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp11. Which Company owned the RMS Titanic??</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q11" value="XXX">
            British Merchant Navy
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q11"  value="R">
            White Star Line 
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q11"  value="xxx">
             Princes Cruises 
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q11"  value="option2">
            Merchant Navy of United Kingdom
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp12. The Statue Of Liberty, a UNESCO World Heritage Site, was gifted by a country to the USA. Which one of the following countries gifted the statue?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q12" value="R">
            France	
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q12"  value="xxx">
            The United Kingdom 
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q12"  value="xxx">
             Italy 
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q12"  value="option2">
            Spain
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp13. Which compound is known as Green Vitriol?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q13" value="R">
            Iron(||) Sulphate
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q13"  value="xxx">
            Cupric Sulphate
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q13"  value="xxx">
             Hydro Chloric Acid
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q13"  value="option2">
            Iron(|||) Sulphate
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp14. Rahul johri recently appointed as CEO of which body after the recommendation of Lodha to administer the body?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q14" value="XXX">
            CCI
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q14"  value="xxx">
            ISRO 
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="14"  value="R">
             BCCI 
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="14"  value="option2">
            AIR INDIA
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp15. What is the output of this C code?</p>
	<p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp#include <stdio.h></p>
    <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspint main()</p>
    <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{</p>
        <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspwhile ()</p>
            <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspprintf("In while loop ");</p>
        <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspprintf("After loop\n");</p>
    <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp}</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q15" value="XXX">
            In while loop after loop
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q15"  value="xxx">
            After loop 
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q15"  value="R">
             Compile time error
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q15"  value="option2">
            Infinite loop
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
