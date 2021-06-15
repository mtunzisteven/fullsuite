<nav class="nav desktop-nav">
    <img src="/fullsuite/images/logo.jpg" alt="image image">
    <div class="spacer"> &nbsp;</div>
    <ul class="nav-desktop-items">
        <li class="nav-item">
        <a class="nav-link  <?php if($pageName=="Home"){ echo 'active'; }?>" href="/fullsuite/" title="Home Page" >HOME</a>
        </li>
        <li class="nav-item ">
        <a class="nav-link <?php if($pageName=="About"){ echo 'active';} ?>" href='/fullsuite/about/' title="About Page">ABOUT</a>
        </li>
        <li class="nav-item">
        <a class="nav-link <?php if($pageName=="Our Team"){ echo 'active';} ?>" href='/fullsuite/our-team' title="Our Team Page">OUR TEAM</a>
        </li>
        <li class="nav-item">
        <a class="nav-link <?php if($pageName=="Solutions" ){ echo 'active';} ?>" href='/fullsuite/solutions' title="Solutions Page">SOLUTIONS</a>
        </li>
        <li class="nav-item">
        <a class="nav-link <?php if($pageName=="Contact Us"){ echo 'active';} ?>" href='/fullsuite/contact-us' title="Contact Page">CONTACT US</a>
        </li>
    </ul>
</nav>

<nav class="nav mobile-nav">

    <img src="/fullsuite/images/logo.jpg" alt="image image">
    <i class="nav-hamburger-menu fa fa-bars"></i>

    <div class="nav-hamburger-container hidden">

        <div class="nav-hamburger-top">
            <img src="/fullsuite/images/logo.jpg" alt="image image">
            <i class="nav-hamburger-close fa fa-times"></i>
        </div>
        <ul class="nav-mobile-items">
            <li class="nav-item <?php if($pageName=="Home"){ echo 'active'; }?>">
            <a class="nav-link " href="/fullsuite/" title="Home Page" >Home</a>
            </li>
            <li class="nav-item <?php if($pageName=="About"){ echo 'active';} ?>">
            <a class="nav-link " href='/fullsuite/about' title="About Page">About</a>
            </li>
            <li class="nav-item <?php if($pageName=="Our Team"){ echo 'active';} ?>">
            <a class="nav-link" href='/fullsuite/our-team' title="Our Team Page">Our Team</a>
            </li>
            <li class="nav-item <?php if($pageName=="Solutions" ){ echo 'active';} ?>">
            <a class="nav-link" href='/fullsuite/solutions' title="Solutions Page">Solutions</a>
            </li>
            <li class="nav-item <?php if($pageName=="Contact Us"){ echo 'active';} ?>">
            <a class="nav-link" href='/fullsuite/contact-us' title="Contact Page">Contact Us</a>
            </li>
        </ul>
    
    </div>

</nav>