<header id="header" class="header-transparent header-transparent-dark-bottom-border header-transparent-dark-bottom-border-1 header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{route('homepage')}}">
                                <!-- <img alt="Porto" width="82" height="40" src="{{asset('frontend/img/logo-default-slim-dark.png')}}"> -->
                                <h3 class="font-weight-bold text-color-light opacity-7 mb-0" >MISTO</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle active" href="{{route('homepage')}}">
                                                Home
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-mega">
                                            <a class="dropdown-item dropdown-toggle" href="{{route('about')}}">
                                                About Us
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="{{route('product')}}">
                                                Products
                                            </a>
                                            <ul class="dropdown-menu">
                                            <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="{{route('product.sidebag')}}">Side Bag</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="{{route('product.bottombag')}}">Bottom Bag</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="{{route('product.sidegolgbag')}}">Side golf Bag</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="{{route('product.bottomgolfbag')}}">Bottom Golf Bag</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="{{route('product.pettoliumGass')}}">Pettolium Gass <span class="tip tip-dark">hot</span></a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="{{route('product.partspag')}}">Parts Bag</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="{{route('product.polytubing')}}">Poly Tubing Bag</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="{{route('product.wickettledbag')}}">Wickettle Bag</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="{{route('product.foldbag')}}">Fold Bag</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="{{route('faq')}}">
                                                FAQ
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="{{route('contact')}}">
                                                Contac Us
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
                                <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed" id="headerTopSearchDropdown">
                                    <form role="search" action="page-search-results.html" method="get">
                                        <div class="simple-search input-group">
                                            <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                            <span class="input-group-append">
                                                <button class="btn" type="submit">
                                                    <i class="fa fa-search header-nav-top-icon"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="header-nav-feature header-nav-features-cart d-inline-flex ml-2">
                                <a href="#" class="header-nav-features-toggle">
                                    <img src="img/icons/icon-cart-light.svg" width="14" alt="" class="header-nav-top-icon-img">
                                    
                                </a>
                                <div class="header-nav-features-dropdown" id="headerTopCartDropdown">
                                    <ol class="mini-products-list">
                                        <li class="item">
                                            <a href="#" title="Camera X1000" class="product-image"><img src="img/products/product-1.jpg" alt="Camera X1000"></a>
                                            <div class="product-details">
                                                <p class="product-name">
                                                    <a href="#">Camera X1000 </a>
                                                </p>
                                                <p class="qty-price">
                                                        1X <span class="price">$890</span>
                                                </p>
                                                <a href="#" title="Remove This Item" class="btn-remove"><i class="fas fa-times"></i></a>
                                            </div>
                                        </li>
                                    </ol>
                                    <div class="totals">
                                        <span class="label">Total:</span>
                                        <span class="price-total"><span class="price">$890</span></span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-dark" href="#">View Cart</a>
                                        <a class="btn btn-primary" href="#">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>