<?php
  //  require_once 'header.php';
   /* instead of the above require statement, we can use the functionalities in the  controller
    because all the functionalities are imported when the view is loaded. Thus, we can load the 
    header by using the following statement instead of require_once. The same applies to all pages and 
   */
//    $this->view("zac/header",$data);
?>

<!-- 404 page -->


	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404"></div>
			<h1>404</h1>
			<h2>Oops! Page Not Be Found</h2>
			<p>Sorry but the page you are looking for does not exist, have been removed, name changed or is temporarily unavailable</p>
			<a href="<?=ROOT?>">Back to homepage</a>
		</div>
	</div>

</body>

</html>
