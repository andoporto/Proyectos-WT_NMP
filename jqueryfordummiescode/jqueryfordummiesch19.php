-------------------
Chapter 19:

--Making jQuery Work with WordPress--

<head profile="http://gmpg.org/xfn/11">

<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>  

---------
<p>
  This text will fade out if you click it.
</p>
<script>
  jQuery("p").click(function () {
  jQuery("p").fadeOut("slow");
  });
</script>
});
</script>
