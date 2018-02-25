-------------------
Chapter 18:

--Accessing jQuery from Joomla--

jQuery(function($) {   
//Your jQuery code goes here.
});

-------

This is a jQuery test.
<p>If you click on this paragraph you'll see it just fade away.</p>
<script type="text/javascript">

 jQuery(function($) {  

 $('p').click(function () {
  $('p').fadeOut('slow');
  });

});
</script>

