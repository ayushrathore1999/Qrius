<?php session_start();
?>
<!DOCtype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <!--bootstrap css-->
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- <link rel="stylesheet" href="socialMedia.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="main.css">
    
</head>
<body data-spy="scroll" data-target="#navbar-site" data-offset="80" onload="initialise()">
<div class="text-danger bg mt-5 fixed-bottom" style="margin-top:400px;">
        <h2 class="text-center font-weight-bold">
            <code>
                Medium Level!
            </code>
            
        </h2>
        
    </div>

    <nav id="navbar-site" class="navbar navbar-dark bg-dark navbar-expand-sm fixed-top">
        <div class="container">
            
                <ul class="navbar-nav justify-content-center">
                    <li class="nav-item mr-3"><a classs="active nav-link" href="#Ques1">Question 1</a></li>
                    <li class="nav-item mr-3"><a classs="nav-link" href="#Ques2">Question 2</a></li>
                    <li class="nav-item mr-3"><a classs="nav-link" href="#Ques3">Question 3</a></li>
                    <li class="nav-item mr-3"><a classs="nav-link" href="#Ques4">Question 4</a></li>
                    <li class="nav-item mr-3"><a classs="nav-link" href="#Ques5">Question 5</a></li>

                </ul>
        </div>
    </nav>
    <div class="container"> 
 <form action="scoreSubMedium.php" method="post">
     <fieldset class="form-group">
    <div class="container form-group" id="Ques1" style="margin-top=70px; margin-bottom: 800px; " >
    <br>
    <br>
    <br>
    
         <h3>Question 1</h3>
         <span class="form-check-label">Which of the following is not a valid identifier?</span><br>
                
                <input class="form-check-input" type="RADIO" name="q1" onClick="save(1,0)">_examveda<br>
               <input class="form-check-input" type="RADIO" name="q1" onClick="save(1,15)">1examveda<br>
               <input  class="form-check-input" type="RADIO" name="q1" onClick="save(1,0)">exam_veda<br>
            
    </div>
    
    <div class="container form-group" id="Ques2" style="margin-bottom: 800px;">
         <h3>Question 2</h3>
         <span class="style1">Which of the following is not a reseved keyword for C?</span><br>
            
            <input  class="form-check-input"type="RADIO" name="q2" onClick="save(2,0)">auto<br>
            <input class="form-check-input" type="RADIO" name="q2" onClick="save(2,0)">case<br>
            <input  class="form-check-input"type="RADIO" name="q2" onClick="save(2,15)">main<br>
            
    </div>
    
    <div class="container form-group" id="Ques3" style="margin-bottom: 800px;">
         <h3>Question 3</h3>
         <p>
         <span class="style1">Which is the only function all C program must contain?</span><br>
		
        <input class="form-check-input" type="RADIO" name="q3" onClick="save(3,0)">start<br>
        <input class="form-check-input" type="RADIO" name="q3" onClick="save(3,0)">system<br>
        <input class="form-check-input" type="RADIO" name="q3" onClick="save(3,15)">main<br>
		
    </div>
    <div class="container form-group" id="Ques4" style="margin-bottom: 800px;">
         <h3>Question 4</h3>
         <span class="style1">Which of the following is not a correct variable type?</span><br>
			
			<input class="form-check-input" type="RADIO" name="q4" onClick="save(4,0)">float<br>
			<input class="form-check-input" type="RADIO" name="q4" onClick="save(4,15)">real<br>
			<input class="form-check-input" type="RADIO" name="q4" onClick="save(4,0)">int<br>		
    </div>
    <div class="container form-group" id="Ques5" >
         <h3>Question 5</h3>
         <span class="style1">What is the difference between declaration and definition of a variable?</span><br>
			
			<input class="form-check-input" type="RADIO" name="q5" onClick="save(5,15)">
A declaration occurs once, but a definition may occur many times.
<br>
			<input class="form-check-input" type="RADIO" name="q5" onClick="save(5,0)">There is no difference between them.<br>
			<input class="form-check-input" type="RADIO" name="q5" onClick="save(5,0)">
Both can occur multiple times, but a definition must occur first.
<br>>
		
    </div>
    <input type="hidden" id="scor" name="score" value="5">
    <input type="hidden" id="uname" name="unameN" value="">
    <input class="btn btn-primary" type="button" name="result" Value="confirm" onClick="total()">
    <input class="btn btn-success" id="subm" type="submit" value="Save" disabled >
    <div style="margin-bottom: 400px;"></div>
</fieldset>
</form>
    </div>
        

        <script src="jquery-3.3.1.min.js"></script>
        <script src="popper.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <script>
            $(function() {
                var topoffset = 80; //variable for menu height

                //Use smooth scrolling when clicking on navigation
                $('.navbar-nav a').click(function() {
                    if (location.pathname.replace(/^\//,'') === 
                    this.pathname.replace(/^\//,'') && 
                    location.hostname === this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html,body').animate({
                        scrollTop: target.offset().top-topoffset
                        }, 500);
                        return false;
                    } //target.length
                    } //click function
                }); //smooth scrolling

                });
        </script>
         <script src="score2.js"></script> 
    

        



</body>
</html>