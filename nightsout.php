<!-- import header and navigations -->
<?php require("templates/header.php") ?>

<script>
  $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
</script>


<!-- Page content -->
  <div class="w3-content" style="max-width:1100px;">

    <!-- Good offers -->
    <div class="w3-container w3-margin-top">
    </div>
    <div class="w3-row-padding w3-text-white w3-medium">
      <div class="se-pre-con"></div>

      <div class="w3-row-padding" style="margin:0 -16px" id="nights">
        <!-- home content here -->
      </div>
    </div>

    <!-- End page content -->
  </div>

<!-- import footer and links -->
<?php require("templates/footer.php") ?>

<!-- data entry -->
<script src="js/nightsout.js"></script>

<script src="js/loader.js"></script>

</body>
</html>
