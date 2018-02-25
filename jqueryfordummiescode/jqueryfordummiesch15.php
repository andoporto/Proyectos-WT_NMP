-------------------
Chapter 15:

--Getting the contents of a text file--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$('div').load('mytext.txt');

});
</script>
</head>
<body>
<div></div>
</body>
</html>

--Getting the contents of a Web page--

<html>
<body>
<strong>This is from my Web page.</strong>
</body>
</html>

------------

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$('div').load('mywebpage.html');

});
</script>
</head>
<body>
<div></div>
</body>
</html>

--Getting part of a Web page--

<html>
<body>
<div id="monday">Content for Monday.</div>
<div id="tuesday">Content for Monday.</div>
<div id="wednesday">Content for Monday.</div>
<div id="thursday">Content for Monday.</div>
<div id="friday">Content for Monday.</div>
<div id="saturday">Content for Monday.</div>
<div id="sunday">Content for Monday.</div>
</body>
</html>

-------------

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$('div').load('days.html' #friday);

});
</script>
</head>
<body>
<div></div>
</body>
</html>

--Sending Data with AJAX--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$("#testform").submit(function(){

$.post( "test.php",
$("#testform").serialize(),
function(data){
	alert(data);    
});
return false;


})


});
</script>
</head>
<body>
<form id="testform">
Email: <input type="text" name="email" />
<br />
First Name: <input type="text" name="fname" />
<br />
Last Name: <input type="text" name="lname" />
<br />
<input type="button" name="submit" id="submit" value="Submit" />
</form>
</body></html>

--------

<?php
print_r($_POST);  
?>


