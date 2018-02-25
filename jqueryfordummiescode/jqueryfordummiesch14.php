-------------------
Chapter 14:

--Using jQuery UI Widgets--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<link type="text/css" href="css/ui-darkness/jquery-ui-1.7.2.custom.css" rel="stylesheet" /><script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

//Your code goes here.

});
</script>
</head>
<body>
</body>
</html>

--Adding an accordion--


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<link type="text/css" href="css/ui-darkness/jquery-ui-1.7.2.custom.css" rel="stylesheet" /><script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$('#accordion').accordion({ header: 'h3' }); 

});
</script>
</head>
<body>
<div id="accordion">
 <div><h3><a href="#">A</a></h3>
   <div>Text about A</div>
 </div>
 <div><h3><a href="#">B</a></h3>
   <div>Text about B.</div>
 </div>
 <div><h3><a href="#">C</a></h3>
   <div>Text about C.</div>
 </div>
</div>

</body>
</html>

--Creating a datepicker--


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<link type="text/css" href="css/ui-darkness/jquery-ui-1.7.2.custom.css" rel="stylesheet" /><script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$('#datepicker').datepicker({ inline: true
});	


});
</script>
</head>
<body>

<div id="datepicker"></div>
</body>
</html>

--Displaying tabs--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<link type="text/css" href="css/ui-darkness/jquery-ui-1.7.2.custom.css" rel="stylesheet" /><script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$('#tabs').tabs();

});
</script>
</head>
<body>
<div id="tabs">
<ul>
<li><a href="#tab-a">A tab</a></li>
<li><a href="#tab-b">Another tab</a></li>
<li><a href="#tab-c">A third tab</a></li>
</ul><div id="tab-a">This is the first tab</div>
<div id="tab-b">This is the second tab</div>
<div id="tab-c">This is the third tab</div>
</div>

</body>
</html>
