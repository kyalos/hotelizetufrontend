<?php
require('templates/homeheader.php');
?>
<script>
  $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
</script>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center " id="home">
    <div class="w3-col l12 m12 s12">
      <img src="images/undraw_eating_together_tjhx.svg" alt="boy" class="w3-image elem" width="992" height="1108">
    </div>
  </header>

  <div class="w3-row-padding w3-margin-bottom" id="about">
    <div class="se-pre-con"></div>
    
    <div class="w3-col l7 12">
      <h3>Who we are</h3>
      <h6>HoteliZetu is a product birthed during a global pandemic ravaging the world and literally changing
        almost all aspects of the human life. Using the power of imagination, we envisioned how different the
      culture in eateries and restaurants would be during and post Covid 19.</h6>
      <h6>We are that culture.</h6>
      <h6>HoteliZetu is a bold platform for eateries and restaurants to conveniently meet the dynamic needs of
      their customers in the new normal birthed post Covid 19.</h6>

    </div>
    <div class="w3-col l5 12">
      <!-- Image of location/map -->
      <img src="images/undraw_resume_folder_2_arse.svg" class="w3-image" style="width:100%;">
    </div>
    <div id="container" class="box">

    </div>
  </div> 

  <script>

    function openRightMenu() {
      document.getElementById("rightMenu").style.display = "block";
    }

    function closeRightMenu() {
      document.getElementById("rightMenu").style.display = "none";
    }
  </script>


<script src="js/speed.js"></script>

<script src="js/loader.js"></script>


<script src="js/js-snackbar.js?v=1.1.0"></script>

<!-- track activities -->
<script src="js/syslogs.js"></script>
<?php
require('templates/footer.php');
?>