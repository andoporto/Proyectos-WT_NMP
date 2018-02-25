-------------------
Chapter 11:


--Creating a basic image Colorbox--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/ jquery.colorbox-min.js"></script>
<link type="text/css" media="screen" rel="stylesheet" href="css/colorbox.css" />

<script type="text/javascript">
$(document).ready(function(){

$('a').colorbox();

});
</script>
</head>
<body>
<a href="content/paris1.jpg">Click me</a>
</body>
</html>

--Adding a title to a lightbox--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/ jquery.colorbox-min.js"></script>
<link type="text/css" media="screen" rel="stylesheet" href="css/colorbox.css" />

<script type="text/javascript">
$(document).ready(function(){

$('a').colorbox();

});
</script>
</head>
<body>
<a href="content/paris1.jpg" title="Paris Rain Spout" >Click me</a>
</body>
</html>

--Displaying a set of images in a lightbox--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<link type="text/css" media="screen" rel="stylesheet" href="css/colorbox.css" />
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/ jquery.colorbox-min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$('a').colorbox();
});
</script>
</head>
<body>
<a rel="mygroup" href="content/paris1.jpg" title="Paris Rain Spout">Click me</a>
<a rel="mygroup" href="content/paris2.jpg" title="Montmarte"></a>
<a rel="mygroup" href="content/paris3.jpg" title="Statue"></a>
<a rel="mygroup" href="content/paris4.jpg" title="Gargoyles"></a>
<a rel="mygroup" href="content/paris5.jpg" title="Blocks"></a>

</body>
</html>

--Displaying a slideshow--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<link type="text/css" media="screen" rel="stylesheet" href="css/colorbox.css" />
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/ jquery.colorbox-min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$('a').colorbox({slideshow:true});

});
</script>
</head>
<body>
<a rel="mygroup" href="content/paris1.jpg" title="Paris Rain Spout">Click me</a>
<a rel="mygroup" href="content/paris2.jpg" title="Montmarte"></a>
<a rel="mygroup" href="content/paris3.jpg" title="Statue"></a>
<a rel="mygroup" href="content/paris4.jpg" title="Gargoyles"></a>
<a rel="mygroup" href="content/paris5.jpg" title="Blocks"></a>

</body>
</html>


--Creating a basic image gallery--


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/jquery.galleria.js"></script>
<link type="text/css" media="screen" rel="stylesheet" href="css/galleria.css" />

<script type="text/javascript">
$(document).ready(function(){

$(function($) { $('ul.gallery').galleria(); });

});
</script>
</head>
<body>

<ul class="gallery">
<li><img src="content/paris1.jpg" title="Paris Water Spout"></li>
<li><img src="content/paris2.jpg" title="Montmarte" ></li>
<li><img src="content/paris3.jpg" title="Statue"></li>
<li><img src="content/paris4.jpg" title="Gargoyles"></li>
<li><img src="content/paris5.jpg" title="Blocks"></li>
</ul>

</body>
</html>
