<?php include "includes/header.php";?>
     <!--Main Content-->
     <div id="mainContent">
            <!--Left Column-->
            <article>
                <div class="panel sectionTwo">
                    <p>Our customers are our priority. We try our best to be available to you druing business hours if you have questions, concerns or just want to say hello. Don't hesitate to text us at <a href="tel:123-456-7890">123-456-7890</a>, it's usually the quickest way to get a response.</p>
                </div>
                <div class="panel sectionOne">
                <?php
                    /*
                    * Below are 2 different forms to be re-used       
                    * 
                    * Only use one at a time, comment out the other!       
                    *
                    */
                    include 'includes/contact_include.php'; #site keys & code here
                
                    $toAddress = "ted.miller92@gmail.com";  //place your/your client's email address here
                    $toName = "Ted Miller"; //place your client's name here
                    $website = "Contact form test";  //place NAME of your client's website

                    echo loadContact('simple.php');#demonstrates a simple contact form
                    //echo loadContact('multiple.php');#demonstrates multiple form elements
                ?>  
                </div>
            </article>
            <!--End Left Column-->
            <!--Right Column-->
            <aside>
                <div class="panel sectionTwo">
                    <div class="address">
                        <h3>Where to Find Us</h3>
                        <p>1220 E Jefferson</p>
                        <p>Seattle, WA</p>  
                        <p>98102</p>
                        <p><a href="tel:123-456-7890">123-456-7890</a></p>
                    </div>
                    <br><br>
                    <div class="hours">
                        <h3>Hours</h3>
                        <p>Tue - Sun</p>
                        <p>9AM - 2PM</p>
                    </div>
                    <br>
                    <div class="iframeContainer">
                        <iframe class="iframeResponsive" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2690.0170576635423!2d-122.31793788426599!3d47.60635799598763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906ac645c0007f%3A0x40cd35e06f7d90ed!2sPeloton%20Cafe!5e0!3m2!1sen!2sus!4v1622864467619!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </aside>
            <!--End Right Column-->
        </div>
        <!--end Main Content-->
<?php include "includes/footer.php";?>