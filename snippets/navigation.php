<nav class="nav desktop-nav">
    <a href='/fullsuite/' class='brand-link'>
        <img src="/fullsuite/images/logo.jpg" alt="image image" class='logo'>
    </a>
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

<nav class="nav mobile-nav mobile">
    <div class='brand-link-container'>
        <a href='/fullsuite/' class='brand-link'>
            <img src="/fullsuite/images/logo.jpg" alt="image image" class='nav-logo'>
        </a>
    </div>
    <div class='fa-bars-container'>
        <i class="nav-hamburger-menu fa fa-bars" id='openMenu'></i>
    </div>
</nav>
<nav  class="nav-hamburger-navigation mobile" id='hidden'>
    <div class="nav-hamburger-top">
      <div class='brand-link-container'>
          <a href='/fullsuite/' class='brand-link'>
              <img src="/fullsuite/images/logo.jpg" alt="image image" class='nav-logo'>
          </a>
      </div>
      <div class='fa-bars-container'>
        <i class='nav-hamburger-close fa fa-times' id='closeMenu'></i>
      </div>
    </div>
    <ul class="nav-mobile-items">
        <li class="nav-item">
        <a class="nav-link <?php if($pageName=="Home"){ echo 'active'; }?>" href="/fullsuite/" title="Home Page" >Home</a>
        </li>
        <li class="nav-item ">
        <a class="nav-link <?php if($pageName=="About"){ echo 'active';} ?>" href='/fullsuite/about' title="About Page">About</a>
        </li>
        <li class="nav-item ">
        <a class="nav-link <?php if($pageName=="Our Team"){ echo 'active';} ?>" href='/fullsuite/our-team' title="Our Team Page">Our Team</a>
        </li>
        <li class="nav-item ">
        <a class="nav-link <?php if($pageName=="Solutions" ){ echo 'active';} ?>" href='/fullsuite/solutions' title="Solutions Page">Solutions</a>
        </li>
        <li class="nav-item ">
        <a class="nav-link <?php if($pageName=="Contact Us"){ echo 'active';} ?>" href='/fullsuite/contact-us' title="Contact Page">Contact Us</a>
        </li>
    </ul>
</nav>