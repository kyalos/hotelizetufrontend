<html>
  <head>
   <title></title>
  <script type="text/javascript">
    window.onload = setupRefresh;
    function setupRefresh()
    {
        setInterval("refreshBlock();",3000);
    }
    
    function refreshBlock()
    {
       $('#block1').load("index.html");
    }
  </script>

  <body>  
            <div id="block1">HAHAHAHA</div>
            <div id="block2"></div>
  </body>
</html>