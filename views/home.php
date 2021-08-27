
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

            <main>

                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
                </div>
                <div class="carousel-inner"> 
                    <div class="carousel-item">
                        <div class="container hero block">
                            <div class="block-text-container hero-block-text-container">
                                <div class="block-text hero-text">
                                    <div class="h11 heroh11">Your Communications Partner </div>
                                    <div class="h13 heroh11">A comprehensive suite of telecommunication solutions.</div>
                                </div>
                                <div class="block-buttons">
                                    <a href='#' class="buttons solid-button buttons-2">Learn more </a>
                                </div>
                            </div>
                            <img class='block-top-image' src='/fullsuite/images/switchboard.png' alt='hero image' />
                        </div>
                    </div>
                    <div class="carousel-item active" >
                        <div class="container hero block">
                            <div class="block-text-container hero-block-text-container">
                                <div class="block-text hero-text">
                                    <div class="h11 heroh11 ">Your Solution Provider </div>
                                    <div class="h13 heroh11">Seamless, fully intergrated telecommunications technology partner</div>
                                </div>
                                <div class="block-buttons">
                                    <a href='#' class="buttons solid-button buttons-2">About Us </a>
                                    <a href='#' class="buttons border-button buttons-2">Contact Us</a>
                                </div>
                            </div>
                            <img class='block-top-image img2' src='/fullsuite/images/handheld.png' alt='hero image' />
                        </div>
                    </div>
                </div>

            </main>

            <div class="content">
                <div class="block block-margin">
                    <div class="block-text-container">
                        <div class="block-text">
                            <div class="h11 dark border-bottom">About Us </div>
                            <div class="h13 dark">We are a telecommunications company that provides fixed location and wireless communication services. We deliver fibre connections to different organizations in Africa</div>
                        </div>
                        <div class="block-buttons">
                            <a href='/fullsuite/about/' class="buttons solid-button">Learn more</a>
                        </div>
                    </div>
                    <div class='block-image-container'>
                        <div class='block-imgback-shape shape1'>&nbsp;</div>
                        <img class='block-top-image' src='/fullsuite/images/internet.jpg' alt='hero image' />
                    </div>
                </div>

                <div class="blue-strap">
                    <h2 class="pb-2 border-bottom">OUR SOLUTIONS</h2>
                    <p class="blue-p solutions-blue-p"> We're a business communication solutions company that is tailored for your success!</p>
                    <div class="blue-block block-margin">
                        
                        <div class="card-container">      

                            <div class="card-content">
                                <i class="bi bi-telephone-fill"></i>

                                <h5 class="card-title">Tailor Made PBX/PABX Systems</h5>
                                <div class='card-item-container'><i class="bi bi-play"></i><p class="card-item"> Multiple lines</p ></div>
                                <div class='card-item-container'><i class="bi bi-play"></i><p class="card-item"> Multiple extensions</p ></div>
                                <div class='card-item-container'><i class="bi bi-play"></i><p class="card-item"> Management system</p ></div>

                                <a href='#' class="card-link">Learn More</a >
                            </div >

                            <div class="card-content">
                                <i class="bi bi-sim-fill"></i>
                                
                                <h5 class="card-title">Voice and Data Solutions</h5>
                                <div class='card-item-container'><i class="bi bi-play"></i><p class="card-item"> Wide area network</p ></div>
                                <div class='card-item-container'><i class="bi bi-play"></i><p class="card-item"> Local area network</p ></div>
                                <div class='card-item-container'><i class="bi bi-play"></i><p class="card-item"> Wifi Solution</p ></div>

                                <a href='#' class="card-link">Learn More</a >
                            </div >

                            <div class="card-content">
                                <i class="bi bi-briefcase-fill"></i>
                                
                                <h5 class="card-title">Small Business Solutions</h5>
                                <div class='card-item-container'><i class="bi bi-play"></i><p class="card-item"> Easy setup</p ></div>
                                <div class='card-item-container'><i class="bi bi-play"></i><p class="card-item"> Keep your number</p ></div>
                                <div class='card-item-container'><i class="bi bi-play"></i><p class="card-item"> Free minutes</p ></div>
    
                                <a href='#' class="card-link">Learn More</a >
                            </div >
                        </div>
                    </div >
                </div>

                <div class="block block-margin">
                    <div class='block-image-container'>
                        <div class='block-imgback-shape shape2'>&nbsp;</div>
                        <img class='block-top-image' src='/fullsuite/images/teammember.jpg' alt='hero image' />
                    </div>
                    <div class="block-text-container">
                        <div class="block-text">
                            <div class="h11 dark border-bottom">Our Team </div>
                            <div class="h13 dark">The calibre of the personnel on our team has been of utmost importance to achieving our goals and objectives.</div>
                        </div>
                        <div class="block-buttons">
                            <a href='/fullsuite/our-team/' class="buttons solid-button">Our Team</a>
                        </div>
                    </div>
                </div>

                <div class="container  blue-strap" id="hanging-icons">
                    <h2 class="pb-2 border-bottom">OUR EXPERIENCE</h2>
                    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    <div class="col d-flex align-items-start">
                        <div class="icon-square text-dark flex-shrink-0 me-3">
                            <i class="bi bi-tools"></i>                        
                        </div>
                        <div>
                        <h3>Work </h3>
                        <p>We cover a wide range of services and product offerings that we have worked with for many years. We assure that our work is always efficient and cost effective.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div class="icon-square text-dark flex-shrink-0 me-3">
                            <i class="bi bi-puzzle-fill"></i>                        
                        </div>
                        <div>
                        <h3>Partners</h3>
                        <p>Our partners are industry leaders in each of the technology they provide. Our service and product is delivered to you with industry standard quality assurance.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div class="icon-square text-dark flex-shrink-0 me-3">
                            <i class="bi bi-award"></i>                        
                        </div>
                        <div>
                        <h3>Quality</h3>
                        <p> All our technicians are qualified and trained extensively for the work they do. We offer you a combination of skilled personnel and well established partners.</p>
                        </div>
                    </div>
                    </div>
                </div>

                <div class='headings'>
                    <span class="partners">OUR PARTNERS</span>
                </div>
                <div class="partners-block light-block block-margin">
                    
                
                    <img src="/fullsuite/images/hugetelecom.jpg" alt="Huge Telecom logo" />
                    <img src="/fullsuite/images/telkom.png" alt="telkom logo" />
                    <img src="/fullsuite/images/ecn.png" alt="ecn logo" />
                    <img src="/fullsuite/images/nec.png" alt="nec logo" />
                    <img src="/fullsuite/images/yealink.png" alt="yealink logo" />
                    <img src="/fullsuite/images/huawei.png" alt="huawei logo" />
                    <img src="/fullsuite/images/panasonics.png" alt="panasonic logo" />


                
                </div>

            <?php 
                
                require $_SERVER['DOCUMENT_ROOT'] .  "/fullsuite/snippets/footer.php"; 
                
            ?> 
        </div>
    </body>
</html>