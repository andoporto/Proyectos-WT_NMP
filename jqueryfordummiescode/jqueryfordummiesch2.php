
-------------------
Chapter 2:

--Overview of elements--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
alert(jQuery('img').attr('alt'));
});
</script>
</head>
<body>
<p>This is my test page.</p>
<img src= "images/home.gif" height="28" width="28" alt="This is a test image." />
</body>
</html>


--Getting element attribute values--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

var imageFile = $('img').attr('src');
alert (imageFile);


});
</script>
</head>
<body>
<strong>This is my test page.</strong>
<img src= "images/home.gif" height="28" width="28" alt="This is a test image." />
</body>
</html>


--Getting element content--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

var pContent = $('p').text();
alert (pContent);


});
</script>
</head>
<body>
<strong>This is my test page.</strong>
<p>This is some text.</p>
</body>
</html>


--Setting element attribute values--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$('img').attr({src: 'images/cover2.jpg', alt: 'cover2'});

});
</script>
</head>
<body>
<strong>This is my test page.</strong>
<img src="images/cover1.jpg" alt="cover1" />
</body>
</html>

--Removing element attribute values--

$('img').removeAttr('height');

--Changing HTML Content--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

var strongContent = $('strong').html();
var pContent = $('p').html();
$('strong').html(pContent);
$('p').html(strongContent);


});
</script>
</head>
<body>
<strong>This is the code in the STRONG element.</strong>
<p>This is the code in the P element. 
<img src="images/cover1.jpg" alt="cover1" /></p>
</body>
</html>

--Changing Text Content--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){

var strongContent = $('strong').text();
var pContent = $('p').text();

$('strong').text(pContent);
$('p').text(strongContent);

});
</script>
</head>
<body>
<strong>This is the text in the <em>STRONG</em> element.</strong>
<p>This is the text in the <em>P</em> element.</p>
</body>
</html>
