
<?php 

$pageName="Contact Us";
$pageDescription="";
$pageShortSummary="";

?><!DOCTYPE html>
<html lang="en-us">
    <?php

        require $_SERVER['DOCUMENT_ROOT'] .  "/fullsuite/snippets/head.php";
        
    ?>

    <body>
        <div class="wrapper">
            <?php

                    require $_SERVER['DOCUMENT_ROOT'] .  "/fullsuite/snippets/navigation.php";

            ?>
            
            <div class="hero other-hero block">
                <div class="block-text-container hero-block-text-container">
                    <div class="block-text">
                        <div class="h11 about">Contact Us</div>
                    </div>
                </div>
            </div>

            <div class="content">

                <div class="block">
   
                    <form class="row">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full name</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" class="form-control" id="message" rows="6" required></textarea>
                        </div>
                        <div class="block-buttons">
                            <button class="buttons solid-button" >Submit</button>
                        </div>
                        <div class="m-5" id="responseText">
                        </div>
                    </form>
                    <div class="block-text-container">
                        <div class="block-text">
                            <div class="h11 dark border-bottom">Get in Touch </div>
                            <div class="h13 dark"> <i class="bi bi-envelope-fill"></i> &nbsp; info@fullsuitetelecoms.com </div>
                            <div class="h13 dark"> <i class="bi bi-telephone-fill"></i> &nbsp; 079 484 6374 </div>


                        </div>
                    </div>
                </div>

            <?php 
                
                require $_SERVER['DOCUMENT_ROOT'] .  "/fullsuite/snippets/footer.php"; 
                
            ?> 
        </div>
    </body>
</html>