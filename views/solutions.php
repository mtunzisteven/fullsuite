
<?php 

$pageName="Solutions";
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
                        <div class="h11 about">Our Solutions</div>
                    </div>
                </div>
            </div>

            <div class="content">

                <div class="container  solutions-blue-strap">
                    <h2 class="pb-2 border-bottom">IP PBX, Switchboard System, and Internet Connectivity</h2>
                    <div class="row g-4 py-5 row-cols-1 ">
                        <div class="col d-flex align-items-start">
                            <div class="solutions-text-div">
                                <h3 class="solutions-text"><img src="/fullsuite/images/lan.jpg" class="rounded float-start left" alt="LAN cable">Suited for small to large business organizations. Everything her is the future, digital! Runs on the internet cables. May require new infrastructure if there is no existing network cables. This may be for both Voice and Data solution.<br/>
                                    <br/><strong>This Solution is delivered through the internet infrastructure:</strong>
                                    <br/><i class="bi bi-play"></i> Fibre - Highly recommended, it a fixed connection.
                                    <br/><i class="bi bi-play"></i> LTE 
                                    <br/><i class="bi bi-play"></i> ADSL lines - not recommended, copper lines are soon becoming reductant.
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="container  solutions-blue-strap">
                    <h2 class="pb-2 border-bottom">Hybrid PABX/PBX Switchboard System</h2>
                    <div class="row g-4 py-5 row-cols-1 ">
                        <div class="col d-flex align-items-start">
                            <div class="solutions-text-div">
                                <h3 class="solutions-text"> <img src="/fullsuite/images/switchboard.png" class="rounded float-end" alt="switchboard">This is an affordable solution for a small and medium size business. Commonly referred as analog and digital, hence Hybrid. Here we provide you the solution by moving you from the old Telkom copper lines. Keep your existing internal instrastructure which uses the anolog cables and phones. We connect this infrustructure to our PABX/PBX and route all your call through our reliable and 100% uptime, fixed location wireless connection (GSM network).</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container  solutions-blue-strap">
                    <h2 class="pb-2 border-bottom">SOHO</h2>
                    <div class="row g-4 py-5 row-cols-1 ">
                        <div class="col d-flex align-items-start">
                            <div class="solutions-text-div">
                                <h3 class="solutions-text"><img src="/fullsuite/images/soho.jpg" class="rounded float-start left" alt="SOHO">
                                A GSM telephone line can be allocated a landline number and grouped together to operate as a single hunt group. <br/><br/>
                                    <i class="bi bi-play"></i> Plug, play & walk away solution <br/>
                                    <i class="bi bi-play"></i> Keep your existing numbers or get a new geographic number <br/>
                                    <i class="bi bi-play"></i> Single number for incoming and outgoing calls which can hunt between all your lines <br/>
                                    <i class="bi bi-play"></i> No data connection required <br/>
                                    <i class="bi bi-play"></i> No risk of cable theft <br/>
                                    <i class="bi bi-play"></i> No PABX required
                                </h3>                            
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