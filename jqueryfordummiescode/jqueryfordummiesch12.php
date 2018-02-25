
-------------------
Chapter 12:

--Displaying Default Values--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/jquery.clearfield.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$(function($) {$("input").clearField(); });

});
</script>
</head>
<body>

<form>
First Name: <input type="text" class="hint" value="Enter your first name" />
<br />
Last Name: <input type="text" value="Enter your last name" />
<br />
Comment: <input type="text" value="Comments" />
</form>

</body>
</html>


--Validating Form Fields--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/ jquery.validate.pack.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$("#commentForm").validate();	

});
</script>
</head>
<body>

<form  id="commentForm" >
First Name: <input  name="name" size="25" class="required" minlength="2" />
<br />
E-Mail: <input  name="email" size="25"  class="required email" />
<br />
URL: <input  name="url" size="25"  class="url" value="" />
<br />
Comment: <textarea id="ccomment" name="comment" cols="22"  class="required"></textarea>
<br />
<input class="submit" type="submit" value="Submit"/>
 </form>

</body>
</html>


--Creating a Date Picker--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/jquery.date_input.pack.js"></script>
<link type="text/css" media="screen" rel="stylesheet" href="css/date_input.css" />

<script type="text/javascript">
$(document).ready(function(){

$(function($) { $("#datefield").date_input(); });

});
</script>
</head>
<body>
<input type="text" id="datefield" />

</body>
</html>



