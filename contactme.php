<!DOCTYPE html>
		<!--this will be header.php-->
		<?php include "includes/header.php";?>
		<!--End header.php-->
		<div id="formWrapper">
		<h2>Contact Ted</h2>
		<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "ted@scriptedmiller.com";  //place your/your client's email address here
        $toName = "Ted"; //place your client's name here
        $website = "www.scriptedmiller.com";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
        </div>
		<!--Start Footer-->
		<?php include "includes/footer.php";?>
		<!--End Footer-->
		<script src="js/nav.js"></script>
	</body>
</html>
