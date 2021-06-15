
<?php 

$pageName="Solutions";
$pageDescription="";
$pageShortSummary="";

?><!DOCTYPE html>
<html lang="en-us">
    <?php

        include "../snippets/head.php";
        
    ?>

    <body>
        <div class="wrapper">
            <?php

                    include "../snippets/navigation.php";

            ?>
            
            <div class="hero">
                <div class="hero-text about">
                    <span class="h11">Solutions </span>
                </div>
            </div>

            <div class="content">
                <div class="hero-bottom">
                    <span class="h14"> &nbsp;</span>
                </div>
                <div class="inner-content">
                    &nbsp;
                    <h3 class="inner-title">FULL SUITE TELECOMS</h3>
                    <p class="inner-p">is a business communication solutions company that was established as a direct response to the dynamic needs of our customers. The company is founded on the principles of honour and integrity. Our growth strategy hinges on the provision of quality service to our customers, respect for our employees and transparency with our partners.</p>

                </div>
                <div class="partners-header">
                    <span class="partners">OUR PARTNERS</span>
                </div>
                <div class="partners-block">

                    <img src="/fullsuite/images/hugetelecom.jpg" alt="Huge Telecom logo" />
                    <img src="/fullsuite/images/telkom.png" alt="telkom logo" />
                
                </div>
                <div class="contact-header">
                    <span class="contact">CONTACT US</span>
                </div>
                <div class="contact-block">
                    <div class="contact-info">
                        <p class="contact-details">
                            info@fullsuitetelecoms.com<br/>
                            Mosley Park<br />
                            Pinetown<br />
                            3610<br />
                            Kwa-Zulu Natal<br />
                            South Africa
                        </p>
                        <img src="/fullsuite/images/map.png" />
                    </div>

                    <form>

                        <label>Your Name(required)</label><input type="text" name="name" required />
                        <label>Your Email(required)</label><input type="email" name="email" required />
                        <label>Subject</label><input type="text" name="subject" required />
                        <label>Your Message</label><textarea name="message" rows="12" required ></textarea>

                        <input type="submit" class="send-button" value="SEND" />

                    </form>
                </div>
            </div>

            <?php 
                
                include "../snippets/footer.php"; 
                
            ?> 
        </div>
    </body>
</html>