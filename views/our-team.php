
<?php 

$pageName="Our Team";
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
                        <div class="h11 about">Our Team </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="block">
                    <div class="block-text-container">
                        <div class="block-text">
                            <div class="h11 dark border-bottom">Our Experience </div>
                            <div class="h13 dark">FULL SUITE
                                TELECOMS is founded on the knowledge, skills
                                and experience of committed professionals who
                                have a combined knowledge and experience of
                                the ICT sector of over ten years.
                            </div>
                        </div>
                    </div>
                    <div class='block-image-container'>
                        <div class='block-imgback-shape shape1'>&nbsp;</div>
                        <img class='block-top-image' src='/fullsuite/images/phone.jpg' alt='hero image' />
                    </div>
                </div>

                <div class="container  blue-strap" id="hanging-icons">
                    <h2 class="pb-2 border-bottom">OUR COMMITMENT</h2>
                    <div class="row g-4 py-5 row-cols-1">
                        <div class="col d-flex align-items-start">
                            <div>
                                <p class="largep"> All our technicians are qualified and trained extensively for the work they do. We offer you a combination of skilled personnel and well established partners.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container marketing">
                    <h2 class="pb-2 border-bottom">MEET OUR TEAM</h2>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="bd-placeholder-img rounded-circle" width="140" height="140"><img src="/fullsuite/images/sfiso.jpg" alt="Sifiso Mkhize" /></div>

                            <h2>Sifiso J.H. Mkhize</h2>
                            <p>Marketing and Sales Director.</p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="bd-placeholder-img rounded-circle" width="140" height="140"><img src="/fullsuite/images/nompilo.jpg" alt="Sifiso Mkhize" /></div>

                            <h2>Nompilo Z. Khuboni</h2>
                            <p>Network and System engineer Technician</p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="bd-placeholder-img rounded-circle" width="140" height="140"><img src="/fullsuite/images/wamkelwe.jpg" alt="Sifiso Mkhize" /></div>

                            <h2>Wamkelwe Msali</h2>
                            <p>Senior Sales Rep</p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <div class="bd-placeholder-img rounded-circle" width="140" height="140"><img src="/fullsuite/images/artwell.jpg" alt="Sifiso Mkhize" /></div>

                            <h2>Artwel M. Mtolo</h2>
                            <p>Sales rep and Assistant Technician.</p>
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </div>

            </div>

            <?php 
                
                require $_SERVER['DOCUMENT_ROOT'] .  "/fullsuite/snippets/footer.php"; 
                
            ?> 
        </div>
    </body>
</html>