-------------------
Chapter 17:

--Including the jQuery library in Drupal content--

scripts[] = jquery.js

-----

<p>
  This text will fade out if you click it.
</p>
<script>
  $('p').click(function () {
  $('p').fadeOut('slow');
  });
</script>

