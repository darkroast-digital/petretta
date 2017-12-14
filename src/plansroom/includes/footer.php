<script src="js/jquery.tipTip.js"></script>
<script>
    jQuery(function () {
        jQuery(".tipTip").tipTip({maxWidth: "auto", edgeOffset: 10, defaultPosition: "top"});
    });
</script>
<?php
    if($demo){
        echo "<div class='loginMessage loginError demoWarning'>! DEMO RESETS EVERY 15 MINUTES !</div>";
    }
?>

<script>
      var menuTrigger = $('.sidebar-trigger');
      var menuTriggerPosition = $('.sidebar-trigger').position();
      var nav = $('.sidebar-nav');
      var navWidth = nav.outerWidth();
      
      nav.css({'top' : menuTriggerPosition.top});

      if (!nav.hasClass('is--active')) {
          menuTrigger.click(function() {
            nav.toggleClass('is--active');
          });
      } else {
        $('body').click(function() {
            nav.removeClass('is--active');
          });
      }
</script>

</body>
</html>