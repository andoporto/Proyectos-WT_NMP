
-------------------
Chapter 10:


--Making your page snow--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/snowfall.jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$(document).snowfall();


});
</script>
</head>
<body style="background-color: #000;">
<div style="background-color: #AAA; width: 400px;height: 500px;">Is it snowing in here?</div>
</body>
</html>

--Second Exercise--


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/snowfall.jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$("div").snowfall();


});
</script>
</head>
<body style="background-color: #000;">
<div style="background-color: #AAA; width: 400px;height: 500px;">Is it snowing in here?</div>
</body>
</html>

--Third Exercise--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/snowfall.jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$("div").snowfall({flakeColor:'#ff0000', maxSize: 20});


});
</script>
</head>
<body style="background-color: #000;">
<div style="background-color: #AAA; width: 400px;height: 500px;">Is it snowing in here?</div>
</body>
</html>


--Highlighting table rows and columns--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/jquery.colorize-2.0.0.js" ></script>
<script type="text/javascript">
$(document).ready(function(){

 $("table").colorize( );


});
</script>
</head>
<body>
<table border=1>
	<tr><td>A</td><td>B</td><td>C</td><td>D</td></tr>
	<tr><td>E</td><td>F</td><td>G</td><td>H</td></tr>
	<tr><td>I</td><td>J</td><td>K</td><td>L</td></tr>
	<tr><td>M</td><td>N</td><td>O</td><td>P</td></tr>
	<tr><td>Q</td><td>R</td><td>S</td><td>T</td></tr>
</table>
</body>
</html>


--Adding a tooltip--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/jquery.hovertip.min.js" ></script>
<link rel=StyleSheet href="css/jquery.hovertip.css" TYPE="text/css">

<script type="text/javascript">
$(document).ready(function(){

$("#mylink").hovertip();


});
</script>
</head>
<body>
<a href="" id="mylink">Move your mouse over me</a>
<div class="hovertipContent">You are hovering over a link.</div>
</body>
</html>

--Second Exercise--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/jquery.hovertip.min.js" ></script>
<link rel=StyleSheet href="css/jquery.hovertip.css" TYPE="text/css">

<script type="text/javascript">
$(document).ready(function(){

$("#mylink").hovertip();


});
</script>
</head>
<body>
<a href="" id="mylink">Move your mouse over me</a>
<div class="hovertipContent">Here is an image of a house: <img src="images/home.gif /></div>
</body>
</html>
