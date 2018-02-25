-------------------
Chapter 16:

--Using Ajax File Uploader--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/ajaxupload.js"></script>
<script type="text/javascript">
$(document).ready(function(){

new AjaxUpload('#upload_button', {action: 'upload.php'});


});
</script>
</head>
<body>
<input type="button" id="upload_button" value="Upload">
</body>
</html>


--Rotating Dynamic Content--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/richhtmlticker.js">
/***********************************************
* Rich HTML Ticker- by JavaScript Kit (www.javascriptkit.com)
* This notice must stay intact for usage
* Visit JavaScript Kit at http://www.javascriptkit.com/ for full source code
***********************************************/
</script>

<script type="text/javascript">
$(document).ready(function(){
});
</script>
</head>
<body>
<div id="myhtmlticker" class="tickerstyle">
</div>
</body>
</html> 

----------

msgsource: "mycontent.html",  
----------

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<body>
<div class="messagediv">
First content
</div>
<div class="messagediv">
Second content
</div>
<div class="messagediv">
Third content
</div>
</body>
</html>


--Creating AJAX Pop-Up Windows--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>My Test Page</title>
<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
<script type="text/javascript" src="js/jquery.jmpopups-0.5.1.js"></script>
<script type="text/javascript">
$.setupJMPopups({
screenLockerBackground: "#000000",
screenLockerOpacity: "0.5"
});

function ajaxPopup() {
$.openPopupLayer({
name: "myPopup",
width: 300,
url: "mypopup.html"
});
}


</script>
</head>
<body>
<a href="javascript:;" onclick="ajaxPopup()">Open popup</a>

</body>
</html>

