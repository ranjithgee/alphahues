<div class="main-header js-main-header auto-hide-header full-width menu-center header--sticky" data-blur="off">
    <div class="main-header__layout">
        <div class="main-header__inner">
            <div class="main-header__logo">
                <div class="logo-dark">
                    <a href="index.php">
                        <img src="assets/images/head_logo.png" alt="Most">
                    </a>
                </div>
                <div class="logo-light">
                    <a href="index.php">
                        <img src="assets/images/head_logo.png" alt="Most">
                    </a>
                </div>
            </div>

            <nav class="main-header__nav js-main-header__nav main-header__default" id="main-header-nav" aria-labelledby="primary-menu">
                <ul id="primary-menu" class="navbar-nav">
                    <li class="menu-item">
                        <a href="index.php" title="Home"><span>Home</span></a>
                    </li>
                    <li class="menu-item">
                        <a href="services.php" title="Stories"><span>Services</span></a>
                    </li>
                    <li class="menu-item">
                        <a href="portfolio.php" title="Pages"><span>Portfolio</span></a>
                    </li>
                    <li class="menu-item">
                        <a href="about.php" title="Works"><span>About</span></a>
                    </li>
                    <li class="menu-item">
                        <a href="blog.php" title="Works"><span>Blogs</span></a>
                    </li>
                    <li class="menu-item">
                        <a href="contact-us.php" title="Contact"><span>Contact us</span></a>
                    </li>
                    <li class="menu-item d-lg-none">
                        <a href="contact.html" title="talk"><span>Talk with us</span></a>
                    </li>
                </ul>
            </nav>
            <div class="menuTrigger"></div>
            <div class="main-header--widgets">
                <div class="ms_theme_mode">
                    <div class="ms_tm--inner">
                        <div class="theme-toggle" id="theme-toggle">
                            <input type="checkbox" id="switcher" class="check" checked="">
                            <svg class="sun-and-moon" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24">
                                <mask class="moon" id="moon-mask">
                                    <rect x="0" y="0" width="100%" height="100%" fill="white"></rect>
                                    <circle cx="24" cy="10" r="6" fill="black"></circle>
                                </mask>
                                <circle class="sun" cx="12" cy="12" r="6" mask="url(#moon-mask)" fill="currentColor">
                                </circle>
                                <g class="sun-beams" stroke="currentColor">
                                    <line x1="12" y1="1" x2="12" y2="3"></line>
                                    <line x1="12" y1="21" x2="12" y2="23"></line>
                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                    <line x1="1" y1="12" x2="3" y2="12"></line>
                                    <line x1="21" y1="12" x2="23" y2="12"></line>
                                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="btn-wrap headerTalkBtn d-none d-lg-block">
                    <a class="btn btn-circle btn--md" role="button" href="">
                        <div class="ms-btn--circle">
                            <div class="circle">
                                <div class="circle-fill"></div>
                                <svg viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" class="circle-outline">
                                    <circle cx="25" cy="25" r="23"></circle>
                                </svg>
                                <div class="circle-icon">
                                    <svg viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-arrow">
                                        <path d="M0 5.65612V4.30388L8.41874 4.31842L5.05997 0.95965L5.99054 0L10.9923 4.97273L6.00508 9.96L5.07451 9.00035L8.43328 5.64158L0 5.65612Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="ms-btn--label">
                            <div class="ms-btn__text">Talk with us</div>
                            <div class="ms-btn__border"></div>
                        </div>
                    </a>
                </div>

                <div class="header__search-modal">

                    <button class="header__search--close-btn">
                        <svg class="icon icon--sm" viewBox="0 0 24 24">
                            <title>Close modal window</title>
                            <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="3" y1="3" x2="21" y2="21"></line>
                                <line x1="21" y1="3" x2="3" y2="21"></line>
                            </g>
                        </svg>
                    </button>

                    <div class="header__search--inner">

                        <form role="search" method="get" class="searchform" action="https://theme.madsparrow.me/most/">
                            <div class="ms-search-widget">
                                <input type="search" placeholder="Search..." value="" name="s" class="search-field">
                                <div class="ms-search--btn">
                                    <span class="ms-sb--icon">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.57,16.15A9,9,0,1,0,15,17.46h0l6.25,6.25,1.42-1.42Zm-3-.14a7.07,7.07,0,1,1,1.56-1.28A6.88,6.88,0,0,1,13.59,16Z">
                                        </path>
                                    </svg>
                                </span>
                                    <input type="submit" class="search-submit" value="">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <button class="main-header__nav-trigger js-main-header__nav-trigger menu-default" aria-label="Toggle menu" aria-expanded="false" aria-controls="main-header-nav">
                <span>Menu</span>
                <i class="main-header__nav-trigger-icon" aria-hidden="true"></i>
            </button>

        </div>
    </div>

</div>