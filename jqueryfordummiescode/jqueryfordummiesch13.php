-------------------
Chapter 13:

--Creating an Accordion Menu--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script src="js/jquery.accordion.source.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function(){

$("ul").accordion();

});
</script>
</head>
<body>
<ul class="accordion">
  <li><a href="#a">First set</a>
    <ul>	
      <li>
      <a href="#a"><a href="test.html">sublink 1</a></a></li>
      <li><a href="#a"><a href="test.html">sublink 2</a></a></li>
      <li><a href="#a"><a href="test.html">sublink 3</a></a></li>
      </li>
   </ul>
  </li>
  <li><a href="#b">Second set</a>
    <ul>	
      <li>
      <a href="#b"><a href="test.html">sublink 1</a></a></li>
      <li><a href="#b"><a href="test.html">sublink 2</a></a></li>
      <li><a href="#b"><a href="test.html">sublink 3</a></a></li>
      </li>
   </ul>
  </li>
</ul>

--Paginating Content--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script src="js/paginator.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$(function(){ $("div").pagination(); });

});
</script>
</head>
<body>
<div>
<p>A</p>
<p>B</p>
<p>C</p>
<p>D</p>
<p>E</p>
<p>F</p>
<p>G</p>
<p>H</p>
<p>I</p>
<p>J</p>
<p>K</p>
<p>L</p>
</div>

</body>
</html>

</body>
</html>


--Creating a Floating <div> Element--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script src="js/jquery.floatobject-1.4.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$("#mydiv").makeFloat({x:"current",y:"current"});

});
</script>
</head>
<body>

<div style="float:right;" id="mydiv">I'm floating</div>
</body>
</html>

