<!DOCTYPE html>
<html>
<head>
<title>Hospital-Events</title>
<style>
body{
    background-image: url("data:image/jpeg;base64,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");
    height: 100%;
background-postition: center;
    background-repeat: no-repeat;
    background-size:cover;
    }
div.marquee{
    background-color: white;
    opacity:0.6;
    width: 300px;
    float : right;
    margin: 220px 50px 0 20px;
    
    
}
.marquee{
      position: fixed !important;
    top: 0 !important;
}
.marquee:hover{
     opacity: 0.8;
          }
h1{
   color: #1100cc;
  }
pre{   
font-size: 130%;
   color: #000099;
   }
.column{
       float:left;
       padding: 5px       
}
#asa{
     padding: 80px !important;
    }
.row::after{
         content: "";
         clear: both;
         display:table;
}
pre:hover{
    color: #000000;
       }
#ha{ 
   width: 700px; 
   align: left; 
   margin-left: 100px;
   border-width: 2px; 
}
.ul1 li{
width:220px;
height:50px;
font-size:25px;
border-width:2px;
line-height:50px;
text-align:center;
border-radius:10px;
background:linear-gradient(#252d80,#313e78);
color:white;
list-style:none;
float:left;
margin-right:10px;
}
.ul1 li a{
text-decoration:none;
color:white;
font-family:Times New Roman;
}
.ul1 li a:hover{
background-color:#3e558a;
display:block;
}
.ul1 li ul {
list-style:none;
display:none;
background-color:green;
}
.ul1 li ul li{
font-size:20px;
display:block;
border-radius:10px;
height:50px;
line-height:50px;
padding:10px 0 10px 0 ;
border:1px solid white;
margin-left:-39px;

}
.ul1 li:hover ul{
display:block;
}
.div1{
font-size:60px;
width:1000px;
height:70px;
text-align:center;
margin-right:-10px;;
padding:10px 0 10px 0;
}

        
</style>
</head>
<body leftmargin=20>
<ul class='ul1'>
<li><a href=projectdatabase.php>HOME</a></li>
<li><a href=#about>ABOUT US</a>
<ul>
<li><a href=aboutus.php>Introduction</a></li>
<li><a href=rules.php>Rules & Regulation</a></li>
<li><a href=staffinfo.php>Staff info</a></li>
</ul>
</li>
<li><a href=departments.php>DEPARTMENTS</a></li>
<li><a href=login.php>APPOINTMENT</a>

</li>
<li><a href=#events>EVENTS</a>
<ul>
<li><a href=#conference>Conference </a></li>
<li><a href=events.php>Upcoming Events</a></li>
</ul>
</li>
<li><a href=contactfinal.php>CONTACT US</a></li>
<li><a href=emergency.php>EMERGENCY</a></li>
</ul>
<br><br><br><br>
<h1><font color=black>
<center>
<div class='div1'>Events</div>
</center>
</font>
</h1>
<div class="event" id="a">
<h1>
1. Blood donation camp
</h1>
<div class="row">
<div class="column">
<img id="e" src="https://calc.edu/wp-content/uploads/5a2945c15d6088000150771b_ARM2-271x300.png" >
</div>
<div class="column">
<pre>



You do not have to wear a cape to save lives! 
Donate blood, you can save up to 4 lives at once.

Stay healthy is organising a blood donation camp 
in association with the NSS on 4th December,2019.

Have doubts about donating blood: 
Is is painful? Is it healthy? <a href=""> Contact us</a> or visit Stay Healthy hospital.
</pre>
</div>
<div class="column" id="asa">
<div class="marquee"><h2><strong>Important News</strong></h2><hr>
<marquee direction=up width=300px height=250px scrollamount="2" onmouseover="stop()" onmouseout="start()"><h4>
<ul>
<li>Stay Healthy hospital ranked 3 in Delhi NCR and 14 all over India by Medical Assocition of India.</li>
<br><br><br><br>
<li>Congratulations to Dr. Pankaj Tripathi for successfully registering patent for the treatment of nasopharyngitis using Aminoglycosides </li>
<br><br><br><br>
<li>Hospital Plan for expanding the West side building has been approved and the project will be completed by 2023.</li>
<br><br><br><br><br>
</ul>
</h4></marquee></div>
</div>
</div>
</div> 
<br><br><br>
<hr id="ha">
<br><br><br>
<div class="event" id="b">
<h1>

2. Free Health checkup for senior citizens
</h1>
<div class="row">
<div class="column">
<pre>




A free health checkup would be 

organised for senior citizens (60+)

on Gandhi Jayanti that is 

2nd october,2019.
</pre>
</div>
<div class="column">
<img id="d" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Doctor_Checkup_Cartoon.svg/1280px-Doctor_Checkup_Cartoon.svg.png" width=600>
</div>
<div class="column">
</div>
</div>

<br><br><br>
<hr id="ha">
<br><br><br>


<event id="c">
<h1>
3. Seminar on women health and hygiene:
</h1>
<div class="row">
<div class="column">
<img src="https://cdn3.iconfinder.com/data/icons/people-office-activities/50/9-512.png" width=300>
</div>
<div class="column">
<pre>


Even in this 21st Century we treat the hormnonal issues of girls in 

our family as a secondary factor, as a result these children 

remain ignorant about the hormonal changes happening in their body. 

If we start educating them, these girls will go out and educate 

other girls in the society.
</pre>
</div>
<div class="column">
</div>
</div>
</event>
</body>
</html>