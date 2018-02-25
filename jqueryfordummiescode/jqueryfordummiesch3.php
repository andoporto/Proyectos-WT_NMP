
-------------------
Chapter 3:

--Selecting specific element types--

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


--Exercise--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

var strongContent = 'jQuery For Dummies';
$('strong').text(strongContent);

});
</script>
</head>
<body>
<strong>some name</strong>
<p>Some text<p>
<strong>another name</strong>
<p>More text<p>
<strong>another name</strong>
<p>Even more text<p>
<strong>your name</strong>
<p>Last bit of text<p>
</body>
</html>

--Selecting an id--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

alert ($('#moreTxt').text());

});
</script>
</head>
<body>
<p id='someTxt'>Some text<p>
<p id='moreTxt'>More text<p>
</body>
</html>

--Selecting classes--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$('.changemytext').text('This is new text.');

});
</script>
</head>
<body>
<strong class="changemytext">some name</strong>
<p class="changemytext">Some text<p>
<strong>another name</strong>
<p>More text<p>
<strong>another name</strong>
<p>Even more text<p>
<strong class="changemytext">your name</strong>
<p class="changemytext">Last bit of text<p>
</body>
</html>

--Selecting by order--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

// Your code goes here.

});
</script>
</head>
<body>
<strong>Element, first strong tag</strong>
<p>Element, first p tag<p>
<strong>Element, second strong tag</strong>
<p>Element, second p tag<p>
<strong>Element, third strong tag</strong>
<p>Element, third p tag<p>
<img src="images/cover1.jpg" alt="Element"/>
<strong>Element, fourth strong tag</strong>
<img src="images/cover1.jpg" alt="Element" />
<p>Element, fourth p tag<p>
<img src="images/cover2.jpg" alt="Element" />
</body>
</html>

--Selecting from forms--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

// Your code goes here.

});
</script>
</head>
<body>
<form action="" method="post">
Your name<input type="text" />
<input type="checkbox" />
<input type = "radio" />
<select><option>First Choice</option></select>
<input type="submit" />

</form>
</body>
</html>

--Selecting Parents and Children--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

// Your code goes here.

});
</script>
</head>
<body>
<div id="myfirstdiv">
<strong class="changemytext">some name</strong>
<p class="changemytext">Some text<p>
<strong>another name</strong>
<p>More text<p>
</div>
<div id="myseconddiv">
<strong class="changemytext">some name</strong>
<p class="changemytext">Some text<p>
<strong>another name</strong>
<p>More text<p>
</div>
</body>
</html>


