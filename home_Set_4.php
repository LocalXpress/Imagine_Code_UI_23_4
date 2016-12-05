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
					
					<a class="navbar-brand" href="javascript:void(0)"> and &nbsp&nbsp<?php echo $row['name_2'];}?></b></a></li></h3>
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

<h3>Web Design Quiz</h3>

<form name="quiz" id="quiz">

<div class="form-group">
    <center><legend>Set-4</legend>
	<p class="text-warning">Time Left:<legend id='timer_div' class="text-danger"><b></b></legend></p></center>
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp1. Under Netaji Subash Chandra Bose, the Andaman and Nicobar Islands were renamed-</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q1" value="R">
            Shaheed and Swaraj Islands
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q1"  value="xxx">
            Little Andaman and Nicobar Islands
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q1"  value="xxx">
            Car Nicobar and Port Blair
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q1"  value="option2">
            None of these
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp2. All of the following are amino acids except:</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q2" value="XXX">
            Tryptophan
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q2"  value="R">
            Adenine
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q2"  value="xxx">
            Tyrosine
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q2"  value="option2">
            Leucine
          </label>
        </div>
		
      </div>
</div>


<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp3. A drop of food coloring spreading out in a cup of water is an example of which transport process?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q3" value="XXX">
            Osmosis
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q3"  value="xxx">
            Effusion
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q3"  value="xxx">
            Reverse Osmosis
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q3"  value="R">
            Diffusion
          </label>
        </div>
		
      </div>
</div>


<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp4. Which country was separated from British India by the Durand Line?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q4" value="XXX">
            Pakistan
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q4"  value="xxx">
            China
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q4"  value="R">
            Afganistan
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q4"  value="option2">
            Nepal
          </label>
        </div>
		
      </div>
</div>


<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp5. Which among the following is the natural inhabitant of North Pole but not of South Pole?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q5" value="XXX">
            Penguins
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q5"  value="xxx">
            Emu
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q5"  value="R">
            Polar Bear
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q5"  value="option2">
            Seals
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp6. Who among the following is not the the winner of Rajiv Gandhi Khel Ratna Award 2016?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q6" value="XXX">
             P.V. Sindhu
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q6"  value="xxx">
            Sakshi Malik
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q6"  value="R">
            Saina Nehwal
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q6"  value="option2">
            Jitu Rai
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp7. Where will the Commonwealth Games 2016 be held?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q7" value="XXX">
             Tokyo
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q7"  value="xxx">
            Sydney
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q7"  value="xxx">
            Johannesburg
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q7"  value="R">
            Queensland
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp8. The first commercial jet airliner was this ____</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q8" value="R">
            de Havilland Comet
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q8"  value="xxx">
            Boeing 707
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q8"  value="xxx">
            Boeing Stratocruiser
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q8"  value="option2">
            None of these
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp9. North Korea, under its censorship propaganda, has launched its own Operating System. What is the the name of the Operating System?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q9" value="xxx">
            Kwangmyong
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q9"  value="xxx">
            Comrade Computer System
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q9"  value="R">
            Red Star OS
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q9"  value="option2">
            Naenara
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp10. Find the output :- </p>
	  <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp#include<stdio.h></p>

<p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspint main()</p>
<p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{</p>
    <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspint a[5] = {5, 1, 15, 20, 25};</p>
    <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspint i, j, m;</p>
    <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspi = ++a[1];</p>
    <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspj = a[1]++;</p>
    <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspm = a[i++];</p>
    <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspprintf("%d, %d, %d", i, j, m);</p>
    <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspreturn 0;</p>
<p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp}</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q10" value="xxx">
            2, 1, 15
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q10"  value="xxx">
            1, 2, 5
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q10"  value="R">
            3, 2, 15
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q10"  value="option2">
            2, 3, 20
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp11. What was the initial reason behind the development of Java?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q11" value="xxx">
            As a replacement of C and C++
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q11"  value="xxx">
            To develop platforms for Cell Phones
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q11"  value="xxx">
            For ATM machines
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q11"  value="R">
            For Television set-top boxes
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp12. Which of the following is the protocol of the url http://geekyhub.com</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q12" value="xxx">
            .com
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q12"  value="R">
            http
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q12"  value="xxx">
            It depends on the ip address
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q12"  value="xxx">
            ://
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp13. What program is responsible for loading the operating system into RAM?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q13" value="xxx">
            Booter
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q13"  value="R">
            BIOS
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q13"  value="xxx">
            Loader
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q13"  value="xxx">
            Linker
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp14. Who is popularly known as 'Father of Indian Cinema'?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q14" value="xxx">
            V. Shantaram	
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q14"  value="xxx">
            Ardeshir Irani
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q14"  value="xxx">
            Kidar Sharma
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q14"  value="R">
            Dadasaheb Phalke
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp15. size of int variable in 32bit compiler</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q15" value="xxx">
            2 bits
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q15"  value="xxx">
            4 bits
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q15"  value="R">
            4 bytes
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q15"  value="option2">
            2 bytes
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
