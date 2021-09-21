<?php

$this->view("zac/adminheader",$data);

?>




<!-- Products section starts here-->
<section class="mt-5 p-4 bg-light" id="display-area">
<h3>products</h3>


</section> 
<!-- End products section-->







<!-- Admin assets and scripts are called by this line -->
<?php $this->view("zac/adminassets",$data); 

$this->view("zac/adminfooter",$data);

?>
