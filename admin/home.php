<?php
require('../templates/adminheader.php');
?>

<!-- Page Content -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div>
  <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>

  <a href="#" class="w3-bar-item w3-button w3-text-red w3-hover-red" id="llogo"><b><i class="fa fa-map-marker w3-margin-right" style="font-size: 40px"></i>Hoteli zetu</b></a>
  
  <div class="w3-container">

    <div class="w3-row">
      <div class="w3-half">
        <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSFKosjvXWDdarht9nEJdJY7YBwVqp56x9iAcZE22YgBw21u6TkBdNDag7gnvDlkTDU--pLVotwnpft/pubchart?oid=1265281678&amp;format=interactive"></iframe>
      </div>
      
      <div class="w3-half">
        <iframe width="635.9808743169399" height="393.2441666666667" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSFKosjvXWDdarht9nEJdJY7YBwVqp56x9iAcZE22YgBw21u6TkBdNDag7gnvDlkTDU--pLVotwnpft/pubchart?oid=1033277333&amp;format=interactive"></iframe>
      </div>
      
      <div class="w3-half">
        <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSFKosjvXWDdarht9nEJdJY7YBwVqp56x9iAcZE22YgBw21u6TkBdNDag7gnvDlkTDU--pLVotwnpft/pubchart?oid=374077490&amp;format=interactive"></iframe>
      </div>

      <div class="w3-half">
        <label>Countries</label>
        <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSFKosjvXWDdarht9nEJdJY7YBwVqp56x9iAcZE22YgBw21u6TkBdNDag7gnvDlkTDU--pLVotwnpft/pubchart?oid=1192778672&amp;format=interactive"></iframe>
      </div>

    </div>
  </div>
</div>

<script>
  function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
  }

  function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
  }
</script>

<?php
require('../templates/footer.php');
?>   
</body>
</html>
