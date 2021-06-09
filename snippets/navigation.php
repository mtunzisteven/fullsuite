<nav class="nav desktop-nav">
    <div class="nav-right-block">
        <img src="/images/image.png" alt="image image">
    </div>
    <ul class="nav-desktop-items">
        <li class="nav-item <?php if($pageName=="Home"){ echo 'active'; }?>">
        <a class="nav-link " href="/?action=home" title="Home Page" >Home</a>
        </li>
        <li class="nav-item <?php if($pageName=="About"){ echo 'active';} ?>">
        <a class="nav-link " href='/?action=about' title="About Page">About</a>
        </li>
        <li class="nav-item <?php if($pageName=="Our Team"){ echo 'active';} ?>">
        <a class="nav-link" href='/?action=Our Team' title="Our Team Page">Our Team</a>
        </li>
        <li class="nav-item <?php if($pageName=="Solutions" ){ echo 'active';} ?>">
        <a class="nav-link" href='/?action=Solutions' title="Solutions Page">Solutions</a>
        </li>
        <li class="nav-item <?php if($pageName=="Contact"){ echo 'active';} ?>">
        <a class="nav-link" href='/?action=contact' title="Contact Page">Contact</a>
        </li>
    </ul>
</nav>

<nav class="nav mobile-nav">

    <img src="/images/image.png" alt="image image">
    <i class="nav-hamburger-menu fa fa-bars"></i>

    <div class="nav-hamburger-container hidden">

        <div class="nav-hamburger-top">
            <img src="/images/image.png" alt="image image">
            <i class="nav-hamburger-close fa fa-times"></i>
        </div>
        <ul class="nav-mobile-items">
            <li class="nav-item <?php if($pageName=="Home"){ echo 'active'; }?>">
            <a class="nav-link " href="/?action=home" title="Home Page" >Home</a>
            </li>
            <li class="nav-item <?php if($pageName=="About"){ echo 'active';} ?>">
            <a class="nav-link " href='/?action=about' title="About Page">About</a>
            </li>
            <li class="nav-item <?php if($pageName=="Our Team"){ echo 'active';} ?>">
            <a class="nav-link" href='/?action=Our Team' title="Our Team Page">Our Team</a>
            </li>
            <li class="nav-item <?php if($pageName=="Solutions" ){ echo 'active';} ?>">
            <a class="nav-link" href='/?action=Solutions' title="Solutions Page">Solutions</a>
            </li>
            <li class="nav-item <?php if($pageName=="Contact"){ echo 'active';} ?>">
            <a class="nav-link" href='/?action=contact' title="Contact Page">Contact Us</a>
            </li>
        </ul>
    
    </div>

</nav>