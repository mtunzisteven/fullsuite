
<?php 

$pageName="Home";
$pageDescription="";
$pageShortSummary="";

?><!DOCTYPE html>
<html lang="en-us">
    <?php

        include "snippets/head.php";
        
    ?>

    <body>
        <div class="wrapper">
            <?php

                    include "snippets/navigation.php";

            ?>
            
            <div class="hero block">
                <div class="block-text-container hero-block-text-container">
                    <div class="block-text hero-text">
                        <div class="h11 heroh11">Title Text </div>
                        <div class="h13 heroh11">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                    </div>
                    <div class="block-buttons">
                        <a href='#' class="buttons solid-button buttons-2">About Us </a>
                        <a href='#' class="buttons border-button buttons-2">Contact Us</a>
                    </div>
                </div>
                <img class='block-top-image' src='/fullsuite/images/cordphone.png' alt='hero image' />
            </div>

            <div class="content">
                <div class="block">
                    <div class="block-text-container">
                        <div class="block-text">
                            <div class="h11 dark">Title Text </div>
                            <div class="h13 dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                        </div>
                        <div class="block-buttons">
                            <a href='#' class="buttons solid-button">Our Services</a>
                        </div>
                    </div>
                    <div class='block-image-container'>
                        <div class='block-imgback-shape shape1'>&nbsp;</div>
                        <img class='block-top-image' src='/fullsuite/images/phone.jpg' alt='hero image' />
                    </div>
                </div>

                <div class="blue-block ">
                    <div class='headings blues'>
                        <span class="blue-span solutions-bluespan">OUR SOLUTIONS</span>
                        <p class="blue-p solutions-blue-p"> We're a business communication solutions company that was established for your success!</p>
                    </div>
                    
                    <div class="card-container">      

                        <div class="card-content">
                            <i class="fa fa-phone-square"></i>

                            <h5 class="card-title">Tailor Made PBX/PABX Systems</h5>
                            <div class='card-item-container'><i class="fa fa-check"></i><p class="card-item"> Multiple lines</p ></div>
                            <div class='card-item-container'><i class="fa fa-check"></i><p class="card-item"> Multiple extensions</p ></div>
                            <div class='card-item-container'><i class="fa fa-check"></i><p class="card-item"> Management system</p ></div>

                            <a href='#' class="card-link">Learn More</a >
                        </div >

                        <div class="card-content">
                            <i class="fa fa-wifi"></i>

                            <h5 class="card-title">Voice and Data Solutions</h5>
                            <div class='card-item-container'><i class="fa fa-check"></i><p class="card-item"> Wide area network</p ></div>
                            <div class='card-item-container'><i class="fa fa-check"></i><p class="card-item"> Local area network</p ></div>
                            <div class='card-item-container'><i class="fa fa-check"></i><p class="card-item"> Wifi Solution</p ></div>

                            <a href='#' class="card-link">Learn More</a >
                        </div >

                        <div class="card-content">
                            <i class="fa fa-briefcase"></i>
                            
                            <h5 class="card-title">Small Business Solutions</h5>
                            <div class='card-item-container'><i class="fa fa-check"></i><p class="card-item"> Easy setup</p ></div>
                            <div class='card-item-container'><i class="fa fa-check"></i><p class="card-item"> Keep your number</p ></div>
                            <div class='card-item-container'><i class="fa fa-check"></i><p class="card-item"> Free minutes</p ></div>
   
                            <a href='#' class="card-link">Learn More</a >
                        </div >
                    </div>
                </div >

                <div class="block">
                    <div class='block-image-container'>
                        <div class='block-imgback-shape shape2'>&nbsp;</div>
                        <img class='block-top-image' src='/fullsuite/images/phonebook.jpg' alt='hero image' />
                    </div>
                    <div class="block-text-container">
                        <div class="block-text">
                            <div class="h11 dark">Title Text </div>
                            <div class="h13 dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        </div>
                        <div class="block-buttons">
                            <a href='#' class="buttons solid-button">Our Services</a>
                        </div>
                    </div>
                </div>


                <div class='headings blues blues2'>
                    <span class="blue-span">Title Text</span>
                    <p class="blue-p"> We're a business communication solutions company that was established for your success!</p>
                </div>

                <div class='headings'>
                    <span class="partners">OUR PARTNERS</span>
                </div>
                <div class="partners-block light-block">
                    
                
                    <img src="/fullsuite/images/hugetelecom.jpg" alt="Huge Telecom logo" />
                    <img src="/fullsuite/images/telkom.png" alt="telkom logo" />
                    <img src="/fullsuite/images/ecn.png" alt="telkom logo" />
                    <img src="/fullsuite/images/nec.png" alt="telkom logo" />
                    <img src="/fullsuite/images/yealink.png" alt="telkom logo" />

                
                </div>


                <div class="blue-block">
                    
                    <div class="contact-info">
                        <p class="contact-details">
                            info@fullsuitetelecoms.com<br/>
                            Mosley Park<br />
                            Pinetown<br />
                            3610<br />
                            Kwa-Zulu Natal<br />About Us
                            South Africa
                        </p>
                    </div>
                    <div class="contact-info">
                        <p class="contact-details">
                            info@fullsuitetelecoms.com<br/>
                            Mosley Park<br />
                            Pinetown<br />
                            3610<br />
                            Kwa-Zulu Natal<br />
                            South Africa
                        </p>
                    </div>
                    <div class="contact-info">
                        <p class="contact-details">
                            info@fullsuitetelecoms.com<br/>
                            Mosley Park<br />
                            Pinetown<br />
                            3610<br />
                            Kwa-Zulu Natal<br />
                            South Africa
                        </p>
                    </div>

                    <form>

                        <label>Your Name(required)</label><input type="text" name="name" required />
                        <label>Your Email(required)</label><input type="email" name="email" required />
                        <label>Your Message</label><textarea name="message" rows="12" required ></textarea>

                        <input type="submit" class="send-button" value="SEND" />

                        <div id="response-div"></div>

                    </form>

                </div>
            </div>

            <?php 
                
                include "snippets/footer.php"; 
                
            ?> 
        </div>
    </body>
</html>