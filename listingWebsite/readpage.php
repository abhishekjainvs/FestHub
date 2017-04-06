<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ReadPage</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="myCSS/MenuBar.css" />
<link rel="stylesheet" type="text/css" href="myCSS/readPageDsgn.css" />

<!--signup content-->
<link rel="stylesheet" href="signStyle.css"/>
	<script type="text/javascript" src="signJS.js"></script>
<!--signup content-->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<style>
#log_btn
{
	font-size: 14px;
	padding-top: 16px;
	padding-bottom: 14px;
	border-radius: 3px;
	padding-left: 5px;
	padding-right: 5px;
	display: block;
	cursor: pointer;
}
#log_btn:hover
{
	background-color: #e0e0e0;
}
#mainWrap_id
{
	display: none;
	position: absolute;
	top: 10px;
	left: 0px;
	width: 100%;
	z-index: 2000;
}
#shadow
{
	display: none;
	position: absolute;
	height: 100%;
	width: 100%;
	z-index: 1500;
	background-color: #777;
	opacity: 0.5;
}
#close
{
	display: none;
	cursor: pointer;
	font-size: 25px;
	color: #555;
	font-weight: bold;
	position: absolute;
	top: 14px;
	left: 1030px;
	z-index: 2500;
}
</style>
<script type="text/javascript">
	function displayLogin()
	{
		var myObj = document.getElementById("mainWrap_id");
		var back = document.getElementById("shadow");
		var closeObj = document.getElementById("close");
		back.style.display = "block";
		closeObj.style.display = "block";
		myObj.style.display = "block";
	}
	function hideLogin()
	{
		var myObj = document.getElementById("mainWrap_id");
		var back = document.getElementById("shadow");
		var closeObj = document.getElementById("close");
		back.style.display = "none";
		closeObj.style.display = "none";
		myObj.style.display = "none";
	}
</script>
</head>

<body>
<div id="shadow"></div>
<span id="close" onclick="hideLogin()"><i class="fa fa-close"></i></span>
<div class="outer">
<!--header-->
<div class="container">

<div class="area1">
<a href="" style="color:#b92b27;text-decoration:none;">LOGO</a>
</div>

<div class="area2">
<input type="text" placeholder="    Ask or Search" class="search_box" />
<a href="" class="ask_link">Ask Question</a>
</div>

<div class="area3">
<ul class="nav nav-pills list">
<li><a href="readpage.html"><i class="fa fa-file-text-o"></i> <span class="bar">Read</span></a></li>
<li><a href="Answer.html"><i class="fa fa-pencil"></i> <span class="bar">Answer</span></a><li>
<li><a href="#"><i class="fa fa-bell-o"></i> <span class="bar">Notifications</span></a></li>
<li><span id="log_btn" onclick="displayLogin()">LogIn/SignUp</span></li>
</ul>
</div>
<div class="clearfix"></div>

</div>
</div>

<div class="container">

<div class="side1">
<div class="s1cnt1">
Feeds<a href="#" class="s1lnr">Edit</a>
</div>

<div class="s1cnt2">
<button type="button" class="s1btr">Top Stories</button>
</div>

<div class="s1cnt3">
<i class="fa fa-hand-spock-o"></i>Trending Now
</div>
<!--loop start-->
<div class="s1cnt4">
<b style="color:#337ab7">&bull;&nbsp;</b><a href="#" class="s1cnt4lnr">Tesla Announces Model 3</a>
</div>

<div class="s1cnt4">
<b style="color:#337ab7">&bull;&nbsp;</b><a href="#" class="s1cnt4lnr">Batman vs Superman:<br />Dawn of Justice</a>
</div>
<!--loop end-->
</div>

<div class="gap1">
</div>

<div class="side2">
<div class="s2cnt1">
Top Fests For You
</div>

<div class="s1cnt5">


<div class="ques">
<h3><a href="viewQues.html" class="t2ln"><b>Which is the best place to travel for a girl, as a first time traveler?</b></a></h3>
</div>

<div class="clearfix"></div>
<div class="s1cnt5c">
If you're looking for travel within India-

Try kerela or north east

Both of these states have literacy next to 100% and the reason for mentioning literacy here is that they have low crime rates against women which is the major concern with travelling alone. Both of these states are nature's paradise as well with beautiful and clean forests.

If you're looking for international travel-

There's no country beating Japan there. SAFEST for women. In my one year time span, I never heard a single case against women. NEVER. You'll love the people, the warm welcome, the places and ofcourse Disneyland to the say the least.  
</div>

</div>


<!--loop end-->
</div>


<div class="gap2">

</div>

<div class="side3">
<div class="s3cnt1">
Update Your Profile <a href="#" class="s3lnr">Next</a>
</div>

<div class="s3cnt2">

 <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:70%">
  </div>
</div>

</div>
<div class="s3cnt3">
Where have you studied?
</div>

<div class="s3cnt4">
<input type="text" style="width:100%" placeholder="Add Education" />
</div>

<div class="s3cnt5">
<!--place a loop here to display req DIVs-->
<div class="cntnt">
<!-- write image path-->
<span style="float:left"><img src="IMG_20150427_214234.jpg" alt="" style="height:30px;width:30px;border-radius:3px;" /></span>

<!--write topic name-->
<span style="float:left;padding-left:10px;"><div><b>ABC School</b><br />
<!--Add bio link-->
<a href="" class="bio_link link_hover">Add Bio</a></div></span>
</div><!--loop braces will end here-->
</div>

</div>

<div class="clearfix"></div>
</div>

<!--signup content start-->
<?php include 'signUpContent.php'; ?>
<!--signup content end-->
</body>
</html>
