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
    setTimeout(function(){document.getElementById('but').click();},1000*12*60);
}

var seconds_left = 720;
var interval = setInterval(function() {

    document.getElementById('timer_div').innerHTML =Math.floor((--seconds_left)/60)+" : "+(seconds_left%60);;

}, 1000);
</script>

</HEAD>

<!-- STEP TWO: Copy this code into the BODY of your HTML document  -->

<BODY onload="javascript:myFunction();">

<h3>Web Design Quiz</h3>

<form name="quiz" id="quiz">

<div class="form-group">
	<center><legend>Set-2</legend>
	<p class="text-warning">Time Left:<legend id='timer_div' class="text-danger"><b></b></legend></p></center>
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp1. Which of these is NOT valid keyword or reserved word in Java?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q1" value="XXX">
            default
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q1"  value="xxx">
            null 
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q1"  value="R">
            String
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q1"  value="option2">
            volatile
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp2. What does SIM stand for?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q2" value="XXX">
            System Information Manager
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q2"  value="R">
            Subscriber Identity Module
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q2"  value="xxx">
            Subscriber Information Module
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q2"  value="option2">
            Subscriber Information Manager
          </label>
        </div>
		
      </div>
</div>


<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp3.For security and secrecy, the type of atomic bomb, that was dropped on Hiroshima by the US, had a codename. What was the name?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q3" value="R">
            Little Boy
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q3"  value="xxx">
            Fat Man
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q3"  value="xxx">
            Mad Man
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q3"  value="option2">
            Little Gift
          </label>
        </div>
		
      </div>
</div>


<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp4. Film and Televison Institute of India is located in?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q4" value="XXX">
            Mumbai
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q4"  value="xxx">
            Kolkata
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q4"  value="xxx">
            Delhi
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q4"  value="R">
            Pune
          </label>
        </div>
		
      </div>
</div>


<div class="form-group">
	
     <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp5. Is it possible in Java to create arrays of length zero ?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q5" value="XXX">
            Yes, you can create arrays of any type with length zero.
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q5"  value="R">
            No, it is not possible to create arrays of length zero in Java.
          </label>
        </div>
	<!--option 3-->
		<div class="radio radio-primary">
          <label>
            <input type="radio" name="q5"  value="xxx">
            Depends on compiler
          </label>
        </div>
	<!--option 4-->
		<div class="radio radio-primary">
          <label>
            <input type="radio" name="q5"  value="xxx">
            Depends on interpreter
          </label>
        </div>
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp6. Before the Internet was invented, the United States Department of Defense developed its own working network system. What was its name?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q6" value="R">
            ARPANET
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q6"  value="xxx">
            CYCLADES
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q6"  value="xxx">
            NSFNET
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q6"  value="option2">
            Telenet
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp7. Rahul johri recently appointed as CEO of which body after the recommendation of Lodha to administer the body?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q7" value="XXX">
            CCI
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q7"  value="R">
             BCCI 
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q7"  value="xxx">
            ISRO  
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q7"  value="option2">
            AIR INDIA
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp8. Which must be the first non comment statement in the file?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q8" value="R">
            Package
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q8"  value="xxx">
            Class
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q8"  value="xxx">
           Object
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q8"  value="option2">
            Declaration
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp9. The rights of the well-known CLI, MS-DOS are held by Microsoft Inc now. Before Microsoft, which one of the following companies owned the rights of this OS?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q9" value="R">
            Seattle Computer Products
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q9"  value="XXX">
            IBM
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q9"  value="xxx">
            Apple Inc	
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q9"  value="option2">
            DOS was invented by Microsoft and no other company owned its rights.
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp10. From where did RMS Titanic start her maiden journey?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q10" value="XXX">
            New York City
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q10"  value="XXX">
            Port of London
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q10"  value="xxx">
            Port of Liverpool
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q10"  value="R">
            Port of Southampton
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp11. Who has been ranked number one in latest Football ranking announced by Fifa?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q11" value="XXX">
            Germany
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q11"  value="R">
            Argentina
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q11"  value="xxx">
            Spain
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q11"  value="option2">
            Brazil
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp12. The World Trade Centre was a large complex with how many number of buildings?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q12" value="XXX">
            2
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q12"  value="xxx">
            5
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q12"  value="R">
            7
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q12"  value="option2">
            4
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp13. Which is the only character present in both Ramayana and Mahabharata?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q13" value="R">
            HANUMANA
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q13"  value="xxx">
            KRISHNA
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q13"  value="xxx">
            DRONACHARYA
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q13"  value="option2">
            VED VYASA
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp14. How many moons does Jupiter has?</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q14" value="XXX">
            53
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q14"  value="xxx">
            20
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q14"  value="R">
            66
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q14"  value="option2">
            2
          </label>
        </div>
		
      </div>
</div>

<div class="form-group">
	
      <p class="text-info" style="left-margin:20px; font-size:20px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp15. Operation “a = a * b + a” can also be written as:</p><br>

      <div class="col-md-10">
	  
	  <!--option 1-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q15" value="XXX">
             a *= b + 1;
          </label>
        </div>
		
	<!--option 2-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q15"  value="R">
            (c = a * b)!=(a = c + a);
          </label>
        </div>
		
	<!--option 3-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q15"  value="xxx">
            a = (b + 1)* a;
          </label>
        </div>
		
	<!--option 4-->
        <div class="radio radio-primary">
          <label>
            <input type="radio" name="q15"  value="option2">
            All of the mentioned
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
