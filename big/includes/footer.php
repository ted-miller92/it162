</div> <!--closes the "mainWrapper" div-->
        <footer>
            <p>
                &copy; <?=date('Y')?> All Rights Reserved Ted Miller ~ 
		        <a href="https://validator.w3.org/nu/?doc=<?=$currentURL?>" target="_blank" title="Validate HTML">Check HTML</a> ~ 
    	        <a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" rel="nofollow" target="_blank" title="Validate CSS">Check CSS</a>
            </p>
        </footer>
        <script src="js/nav.js"></script>
    </body>
</html>