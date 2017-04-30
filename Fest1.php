<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FEST DETAILS</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="myCSS/MenuBar.css" />
<link rel="stylesheet" type="text/css" href="myCSS/readPageDsgn.css" />
<!-- first two css files are used for tab n festdisplay-->
<link rel="stylesheet" href="festcss.css"/>

<!--signup content-->
<link rel="stylesheet" href="signStyle.css"/>
	<script type="text/javascript" src="signJS.js"></script>
<!--signup content-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="myJS/common.js"></script>
<style >
	#opened{
		display: block;
	}
</style>


<!-- php in always open About tab start-->

<script type="text/javascript">
/*
function openAbout(<?php echo $name1, $name2, $name3 ?>) {
	<!--alert('You will have to login first.');-->
           document.getElementById('open').innerHTML='<h3>Fest Details</h3><p>$name1</p><p>For more Information please visit</p><button>$name2</button><p><button>$name3</button></p>';
        }
       <!-- window.onload = openAbout();-->	
*/
</script>

<!-- end -->
	
</head>
<body>
<div id="shadow"></div>
<span id="close" onclick="hideLogin()"><i class="fa fa-close"></i></span>

<!--____________________MENU BAR START________________________________-->

<?php include 'menu_bar.php'; ?>

<!--____________________MENU BAR END________________________________-->
<div class="container bodyContent">



<!--fest details display start-->

<?php
	if(isset($_GET["cata"]))
		{
			$v=$_GET["cata"];
			$con=mysqli_connect("localhost","root","","festhub");
			$res=mysqli_query($con,"select * from `fest` where `fest_id`='$v'");
			
			
			while($val=mysqli_fetch_array($res))
			{
		echo"
	
<div id='first'>
  <h2 id='cc'>$val[1]</h2>

 </div>
  <hr COLOR='red' WIDTH='90%' SIZE='10' noshade>

<div style='width: 100%'>


  <!--beginning of left div-->

  <div style='float:left;width:80%'>";
  
  $res1=mysqli_query($con,"select * from `college` where `col_id`='$val[4]'");
			
			while($val1=mysqli_fetch_array($res1))
			{
				
		echo"
	
 <div id='second'> College Name:<a href='clgprof.php?cat=$val1[0]'>  $val1[1]</a>
<br><br>";
			}
			echo"
			
Category: $val[2]
<br><br>
Organiser: $val[9]
<br><br>
Location:  $val[7]
<br><br>
Fest Date: $val[8]
</div>



<script type='text/javascript'>
confirm('You will have to login first.');
        window.onload = 'openAbout($val[3],$val[11],$val[10])';	
prompt('You will have to login first.');

<!--window.addEventListener('load',openAbout($val[3],$val[11],$val[10]),once);-->

</script>



<div class='tab' >
	<button  class='tablinks' onclick=\"openfest('About')\"> &nbsp&nbsp&nbsp&nbsp ABOUT &nbsp&nbsp&nbsp&nbsp    </button>
	<button class='tablinks' onclick=\"openfest('Event Listing')\"> &nbsp&nbsp&nbsp&nbsp EVENTS LIST &nbsp&nbsp&nbsp&nbsp </button>
    <button class='tablinks' onclick=\"openfest('Contacts')\"> &nbsp&nbsp&nbsp&nbsp CONTACT &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp </button>
    <!--<button class='tablinks' onclick=\"openfest(event,'Other Events')\">&nbsp&nbsp &nbsp &nbsp Other Events &nbsp&nbsp</button>-->
</div>

<div id='open'></div>
<!--About Details-->

     <div id='About' class='tabcontent' >
     <h3>Fest Details</h3><p>$val[3]</p><p>For more Information please visit</p>  
     <button>$val[11]</button><p><button>$val[10]</button></p>
     </div>
     
<!--Event List  Details-->
     <div id='Event Listing' class='tabcontent'>";
	 
	 $res2=mysqli_query($con,"select * from `fest_eve` where `fest_id`='$val[0]'");
			while($val2=mysqli_fetch_array($res2))
			{
		echo"
	<p>$val2[1]</p>
	";
			}
			
			
	echo"</div></div>

        <!--Contact Details-->
        <div id='Contacts' class='tabcontent'><p>$val[10]</p></div>
			
		 </div>
		 
		 
 <!--Register Details-->
        <button>$val[11]</button>";
		}
		}
?>

<?php
	if(isset($_GET["cat"]))
		{
			$v=$_GET["cat"];
			$con=mysqli_connect("localhost","root","","festhub");
			$res=mysqli_query($con,"select * from `fest` where `fest_type`='$v'");
			
			
			while($val=mysqli_fetch_array($res))
			{
		echo"
		
		<div id='first'>
  <h2 id='cc'>$val[1]</h2>

 </div>
  <hr COLOR='red' WIDTH='90%' SIZE='10' noshade>

<div style='width: 100%'>


  <!--beginning of left div-->

  <div style='float:left;width:80%'>";
  
  $res1=mysqli_query($con,"select * from `college` where `col_id`='$val[4]'");
			
			while($val1=mysqli_fetch_array($res1))
			{
				
		echo"
	
 <div id='second'> College Name:<a href='clgprof.php?cat=$val1[0]'>  $val1[1]</a>
<br><br>";
			}
			echo"
			
Category: $val[2]
<br><br>
Organiser: $val[9]
<br><br>
Location:  $val[7]
<br><br>
Fest Date: $val[8]
</div>
<div class='tab' >
	<button  class='tablinks' onclick=\"openfest('About')\"> &nbsp&nbsp&nbsp&nbsp ABOUT &nbsp&nbsp&nbsp&nbsp    </button>
	<button class='tablinks' onclick=\"openfest('Event Listing')\"> &nbsp&nbsp&nbsp&nbsp EVENTS LIST &nbsp&nbsp&nbsp&nbsp </button>
    <button class='tablinks' onclick=\"openfest('Contacts')\"> &nbsp&nbsp&nbsp&nbsp CONTACT &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp </button>
    <!--<button class='tablinks' onclick=\"openfest(event,'Other Events')\">&nbsp&nbsp &nbsp &nbsp Other Events &nbsp&nbsp</button>-->
</div>
<div id='open'></div>
<!--About Details-->

     <div id='About' class='tabcontent' >
     <h3>Fest Details</h3><p>$val[3]</p><p>For more Information please visit</p>  
     <button>$val[11]</button><p><button>$val[10]</button></p>
     </div>
     
<!--Event List  Details-->
     <div id='Event Listing' class='tabcontent'>";
	 
	 $res2=mysqli_query($con,"select * from `fest_eve` where `fest_id`='$val[0]'");
			while($val2=mysqli_fetch_array($res2))
			{
		echo"
	<p>$val2[1]</p>
	";
			}
			
			
	echo"</div></div>

        <!--Contact Details-->
        <div id='Contacts' class='tabcontent'><p>$val[10]</p></div>
			
		 </div>
		 
		 
 <!--Register Details-->
        <button>$val[11]</button>";
		}
		}
?>


<!--end-->

   <!--Other Events Details -->
   <!--<div id="Other Events" class="tabcontent"><p>Providing List of other events</p></div>-->
    
<script>
function openfest(cityName) {
	document.getElementById("open").style.display="none";
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    /*tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }*/
    document.getElementById(cityName).style.display = "block";
    //evt.currentTarget.className += " active";
}
</script>
</div>
<!--end of left div and start of right div-->
<div style="float: right;background-color: #C8C8C8;width: 20%"><p>Similar Events list</p>
   <li><a href="">Event 1</a></li>
   <li><a href="">Event 2</a></li>
   <li><a href="">Event 3</a></li>
   <li><a href="">Event 4</a></li>
</div>
<!--end of right div-->

</div>
<!--signup content start-->

<?php include 'signUpContent.php'; ?>

<!--signup content end-->
</body>
</html>