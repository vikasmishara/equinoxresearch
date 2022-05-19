<header class="header">
    <div class="header-menu header-menu-4" id="sticky">
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <a class="navbar-brand sticky_logo" href="{{route('live.index')}}">
                    <img class="main" src="{{asset('dist/img/logo/Logo.png')}}" srcset="img/logo/Logo@2x.png 2x" alt="logo">
                    <img class="sticky" src="{{asset('dist/img/logo/Logo-2.png')}}" srcset="img/logo/Logo-2@2x.png 2x" alt="logo">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_toggle">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="hamburger-cross">
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav menu ms-auto">
                        <li class="nav-item dropdown submenu ">
                            <a href="{{route('live.index')}}" class="nav-link dropdown-toggle active" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="{{route('live.pages.about_us')}}" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                About
                            </a>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="{{route('live.pages.services')}}" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="{{route('live.pages.contact-us')}}" role="button" data-bs-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Contact
                            </a>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="{{route('live.pages.error')}}" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Blog
                            </a>

                        </li>
                    </ul>
                    <a class="theme-btn theme-btn-rounded-2 theme-btn-alt" href="https://wa.me/918308266666?text=Hello%2C+How+can+we+help+you">WhatsApp</a>
                </div>
            </div>
        </nav>
    </div>
</header>