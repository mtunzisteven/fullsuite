
<?php 

$pageName="About";
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
                        <div class="h11 about">About Us </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="block about-block">
                    <div class="block-text-container about-block-text-container">
                        <div class="block-text about-block-text">
                            <div class="h11 dark border-bottom">Our Story </div>
                            <div class="h13 dark">
                                <div class='block-image-container'>
                                    <div class='block-imgback-shape shape1'>&nbsp;</div>
                                    <img class='block-top-image' src='/fullsuite/images/phone.jpg' alt='hero image' />
                                </div>
                                    FULL SUITE TELECOMS is a 100 black owned telecommunications company that was
                                    established in the year 2020 as a direct response to the dynamic needs of our 
                                    customers. We established the company to bring about business communication solutions
                                    from voice to data, network infrastructure, equipment and maintenance service that is
                                    tailored to our customers’ individual operations.
                                </div>
                        </div>
                    </div>
                </div>

                
                <div class="container  blue-strap" id="hanging-icons">
                    <h2 class="pb-2 border-bottom">FULL SUITE TELECOMS</h2>
                    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    <div class="col d-flex align-items-start">
                        <div class="icon-square text-dark flex-shrink-0 me-3">
                            <i class="bi bi-tools"></i>                        
                        </div>
                        <div>
                        <h3>Our Mission</h3>
                        <p>To become a seamless, full integrated technology partner that offers our customers more choice and superior experience.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div class="icon-square text-dark flex-shrink-0 me-3">
                            <i class="bi bi-puzzle-fill"></i>                        
                        </div>
                        <div>
                        <h3>Our Vision</h3>
                        <p>Full Suite Telecoms’ mission is become a leading alternative and independent telecoms service provider, providing voice, data and collaboration services in Africa</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div class="icon-square text-dark flex-shrink-0 me-3">
                            <i class="bi bi-award"></i>                        
                        </div>
                        <div>
                        <h3>Our Strategy</h3>
                        <p>Leverage technology to enhance customer experience, drive value and most importantly offer unparallel customer service</p>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="block about-block">
                    <div class="block-text-container about-block-text-container">
                        <div class="block-text about-block-text">
                            <div class="h11 dark border-bottom">Our Principles </div>
                            <div class="h13 h132 dark">
                                <div class='block-image-container'>
                                    <div class='block-imgback-shape shape1'>&nbsp;</div>
                                    <img class='block-top-image' src='/fullsuite/images/internet.jpg' alt='hero image' />
                                    </div>
                                        FULL SUITE TELECOMS is founded on the principles of honour and integrity Our growth
                                        strategy hinges on the provision of quality service to our customers, respect for our
                                        employees and transparency with our partners. The expansion of the company is expected 
                                        to be gradual, yet ambitious enough to vertically integrate as we reach more areas into 
                                        the African continent and beyond.

                                    </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php 
                
                require $_SERVER['DOCUMENT_ROOT'] .  "/fullsuite/snippets/footer.php"; 
                
            ?> 
        </div>
    </body>
</html>