<?php 

$pageName="Contact";
$pageDescription="MEDIAFRIKA uses digital marketing to enhance your reach and engage customers. info@mediafrika.co.za | 087 195 0976";
$pageShortSummary="We Are Your Online Marketing Solution";

?><!DOCTYPE html>
<html lang="en-us">
    <?php

        include "../snippets/head.php";
        
    ?>

 <body>
    <div class="wrapper">
        <div class="overlay">
            <div class="column-two header-nav">
                <?php
        
                        include "../snippets/navigation.php";
                ?>
                </div>
                <div class="columns-one">
                    <div class="hero-text">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>



            <main>

                <div class="column columns-three">
                    <div></div>
            
                    <form role=" form" method="post" action="/views/sendmail.php" id="form">
                    
                        <input class="form-inputs no-outline" type="text" name="name" id="name" placeholder="Full Name" value="<?php echo isset($fields['name'])? _htmler($fields['name']):''; ?>" required>         
                        <div class="fmsg" id="name-message"><?php if(!empty($errors)){echo $nameError ;} ?></div>

                        <input class="form-inputs no-outline" type="tel" name="phone" id="phone" placeholder="Phone" value="<?php echo isset($fields['phone'])? _htmler($fields['phone']):''; ?>" required>
                        <div class="fmsg" id="phone-message"><?php if(!empty($errors)){echo $phoneError ;} ?></div>

                        <input class="form-inputs no-outline" type="email" name="email" id="email" placeholder="Email" value="<?php echo isset($fields['email'])? _htmler($fields['email']):''; ?>" required>
                        <div class="fmsg" id="email-message"><?php if(!empty($errors)){echo $emailError ;} ?></div>

                        <textarea class="form-inputs no-outline" rows="5" name="message" id="message" placeholder="Write Us" ><?php echo isset($fields['message'])? _htmler($fields['message']):''; ?></textarea>
                        <div class="fmsg" id="email-message"><?php if(isset($message)){echo $message;} ?></div>
                        <div class="div-button">
                        <div class="div-div-button services-button"><a href="/?action=contact" class="button">button</a></div>
                    </div>
                    </form>

                </div>
            

                <div class="column color-gradient columns-one">
                    <h3 class="color-gradient-font font-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                    <p class="color-gradient-font font-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
.</p>
                    <div class="div-button">
                        <div class="div-div-button services-button"><a href="/?action=contact" class="button">button</a></div>
                    </div>
                </div>
            </main>
            <?php include "../snippets/footer.php"; ?> 
        </div>
    </body>
</html>