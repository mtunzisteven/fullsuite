
<?php 

$pageName="Contact Us";
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
                <div class="hero-text contact">
                    <span class="h11">Contact </span>
                    <span class="h13">Us</span>
                </div>
            </div>

            <div class="content">
                <div class="blue-block">

                    <form>

                        <label>Your Name(required)</label><input type="text" name="name" required />
                        <label>Your Email(required)</label><input type="email" name="email" required />
                        <label>Subject</label><input type="text" name="subject" required />
                        <label>Your Message</label><textarea name="message" rows="12" required ></textarea>

                        <input type="submit" class="send-button" value="SEND" />

                        <div id="response-div"></div>

                    </form>
                </div>
            </div>

            <?php 
                
                include "../snippets/footer.php"; 
                
            ?> 
        </div>
    </body>
</html>