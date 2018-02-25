Chapter 1:

--Calling jQuery from a Web page--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
</head>
<body>
<p>This is my test page.</p>
</body>
</html>


--Creating Your First jQuery Code--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

alert(jQuery('img').attr('height'));

});
</script>

</head>
<body>
<p>This is my test page.</p>
<img src= "images/home.gif" height="28" width="28" alt="This is a test image.">
</body>
</html>

