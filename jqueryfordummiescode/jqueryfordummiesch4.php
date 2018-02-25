-------------------
Chapter 4:

--Using jQuery When the Page Loads--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<script src="js/jquery-1.4.min.js"></script>
<script>
$(document).ready(function(){
var myImage= $('img').attr('src');
$('div').text(myImage);
});
</script>
</head>
<body>
<img src= "images/home.gif" height="28" width="28" alt="Little house">
<div></div>
</body>
</html>

--Clicking and double-clicking--
--Exercise 1--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$('.clickme').click(function() {
alert('You clicked on something.');
});


});
</script>
</head>
<body>
<div class="clickme">Do something</div>
</body>
</html>

--Exercise 2--


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$('.clickme').dblclick(function() {
alert('You double-clicked on something.');
});


});
</script>
</head>
<body>
<div class="clickme"><img src="images/home.gif"></div>
</body>
</html>

--Giving focus--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$('#textbox2').focus(function() {
alert('textbox2 has focus');
});


});
</script>
</head>
<body>
First Name: <input type="text" id="textbox1" />
<br />
Last Name: <input type="text" id="textbox2" />
</body>
</html>

--Detecting a keyboard event--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('input').keypress(function (e) {
      if (e.which == 90) alert ('Z was typed.')
  });


});
</script>
</head>
<body>
Type the letter Z: <input type="text" id="textbox1" />
</body>
</html>

--Detecting a mouse event--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$('#mouseoverme').mouseover(function() {
$('#outputdiv').text('You moused over the image.'); });
$('#mouseoverme').mouseout(function() {
$('#outputdiv').text('You moused out of the image.'); });


});
</script>
</head>
<body>
<img src="images/home.gif" id="mouseoverme">
<div id="outputdiv">This text will change.</div>
</body>
</html>

--Hovering--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$('#mouseoverme').hover(
function() {
$('#outputdiv').text('You moused over the image.');
},
function(){
$('#outputdiv').text('You moused out of the image.');
});


});
</script>


--Toggling functions--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$('#toggleme').toggle(
function() {
$('#outputdiv').text('You clicked the image once.');
},
function(){
$('#outputdiv').text('You clicked the image twice.');
},
function(){
$('#outputdiv').text('You clicked the image three times.');
});


});
</script>
</head>
<body>
<img src="images/home.gif" id="toggleme">
<div id="outputdiv">This text will change.</div>
</body>
</html>

</head>
<body>
<img src="images/home.gif" id="mouseoverme">
<div id="outputdiv">This text will change.</div>
</body>
</html>

