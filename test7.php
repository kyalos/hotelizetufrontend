<html>
  <head>
   <script type="text/javascript">
      window.onload = setupRefresh;

      function setupRefresh() {
          setInterval("refreshFrame();", 3000);
      }
      function refreshFrame() {
         parent.right_frame.location.reload();
      }
  </script>
  </head>
  <frameset id="cntfrm">
	<frame  name="right_frame" scrolling="auto" src="index.php" />
  </frameset>
</html>