<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BrookWood</title>
    <link rel="icon" href="assets/images/favicon/icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media-query.css">
</head>

<body>
    <div class="site_content">
        <!-- Preloader Start -->
        <div class="loader-mask">
            <div class="loader">
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- Preloader End -->
        <!-- Header Section Start -->
        <header id="top-navbar" class="top-navbar">
            <div class="container">
                <div class="top-navbar_full">
                    <div class="menu-btn d-flex align-items-center">
                        <a href="#offcanvasExample" data-bs-toggle="offcanvas"><img
                                src="assets/images/homepage2/setting-icon.svg" alt="menu-icon"></a>
                    </div>
                    <div class="brookwood-txt d-flex align-items-center">
                        <p class="brookwood-txt">Brookwood</p>
                    </div>
                    <div>
                        <ul class="homepage-cart-sec">
                            <li><a href="search-page.html"><img src="assets/images/homepage/search-icon.svg"
                                        alt="search-icon"></a></li>
                            <li class="pf-16"><a href="shopping-cart.html"><img
                                        src="assets/images/homepage/cart-icon.svg" alt="cart-icon"><span
                                        class="cart-item">2</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="navbar-boder"></div>
        </header>
        <!-- Header Section End -->
        <!-- Homepage2 Details Section Start -->
        <section id=homepage2-sec>
            <div class="container">
                <div class="serachbar-homepage2 mt-24">
                    <div class="input-group ">
                        <span class="input-group-text search-iconn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.9395 1.9313C5.98074 1.9313 1.94141 5.97063 1.94141 10.9294C1.94141 15.8881 5.98074 19.9353 10.9395 19.9353C13.0575 19.9353 15.0054 19.193 16.5449 17.9606L20.293 21.7067C20.4821 21.888 20.7347 21.988 20.9967 21.9854C21.2587 21.9827 21.5093 21.8775 21.6947 21.6924C21.8801 21.5073 21.9856 21.2569 21.9886 20.9949C21.9917 20.7329 21.892 20.4802 21.7109 20.2908L17.9629 16.5427C19.1963 15.0008 19.9395 13.0498 19.9395 10.9294C19.9395 5.97063 15.8982 1.9313 10.9395 1.9313ZM10.9395 3.93134C14.8173 3.93134 17.9375 7.05153 17.9375 10.9294C17.9375 14.8072 14.8173 17.9352 10.9395 17.9352C7.06162 17.9352 3.94141 14.8072 3.94141 10.9294C3.94141 7.05153 7.06162 3.93134 10.9395 3.93134Z"
                                    fill="#7D8FAB"></path>
                            </svg>
                        </span>
                        <input type="text" placeholder="Search Products" class="form-control search-text">
                    </div>
                </div>
            </div>
            <div class="homepage2-second-sec mt-24">
                <div class="container">
                    <div class="product-details">
                        <h1 class="d-none">Homepage</h1>
                        <h2 class="d-none">Homepage Details</h2>
                        <div class="product-sec">
                            <div class="product-img-sec">
                                <img src="assets/images/homepage2/sofas.svg" alt="furniture-img">
                            </div>
                            <h3 class="proct-title-hp-2">Sofa</h3>
                        </div>
                        <div class="product-sec">
                            <div class="product-img-sec">
                                <img src="assets/images/homepage2/chairs.svg" alt="furniture-img">
                            </div>
                            <h3 class="proct-title-hp-2">Chairs</h3>
                        </div>
                        <div class="product-sec">
                            <div class="product-img-sec">
                                <img src="assets/images/homepage2/dining.svg" alt="furniture-img">
                            </div>
                            <h3 class="proct-title-hp-2">Dining</h3>
                        </div>
                        <div class="product-sec">
                            <div class="product-img-sec">
                                <img src="assets/images/homepage2/storage.svg" alt="furniture-img">
                            </div>
                            <h3 class="proct-title-hp-2">Storage</h3>
                        </div>
                        <div class="product-sec">
                            <div class="product-img-sec">
                                <img src="assets/images/homepage2/lighting.svg" alt="furniture-img">
                            </div>
                            <h3 class="proct-title-hp-2">Lighting</h3>
                        </div>
                        <div class="product-sec">
                            <div class="product-img-sec">
                                <img src="assets/images/homepage2/lamps.svg" alt="furniture-img">
                            </div>
                            <h3 class="proct-title-hp-2">Lamps</h3>
                        </div>
                        <div class="product-sec">
                            <div class="product-img-sec">
                                <img src="assets/images/homepage2/decor.svg" alt="furniture-img">
                            </div>
                            <h3 class="proct-title-hp-2">Decor</h3>
                        </div>
                        <div class="product-sec">
                            <div class="product-img-sec">
                                <img src="assets/images/homepage2/mirror.svg" alt="furniture-img">
                            </div>
                            <h3 class="proct-title-hp-2">Mirrors</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="homepage2-third-sec mt-24">
                <div class="container">
                    <div class="prodcut-sec-slide">
                        <div class="prodcut-sec-slide-full">
                            <div class="slider-img-sec">
                            </div>
                            <div class="slider-content-sec">
                                <div class="slider-content-sec-full">
                                    <p class="slider-pro-title">UP TO 20% OFF</p>
                                    <h3 class="slider-pro-subtitle">Table With Hutch Cabinet</h3>
                                    <div class="slider-btn">
                                        <a href="javascript:void(0)">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prodcut-sec-slide-full">
                            <div class="slider-img-sec">
                            </div>
                            <div class="slider-content-sec">
                                <div class="slider-content-sec-full">
                                    <p class="slider-pro-title">UP TO 20% OFF</p>
                                    <h3 class="slider-pro-subtitle">Table With Hutch Cabinet</h3>
                                    <div class="slider-btn">
                                        <a href="javascript:void(0)">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prodcut-sec-slide-full">
                            <div class="slider-img-sec">
                            </div>
                            <div class="slider-content-sec">
                                <div class="slider-content-sec-full">
                                    <p class="slider-pro-title">UP TO 20% OFF</p>
                                    <h3 class="slider-pro-subtitle">Table With Hutch Cabinet</h3>
                                    <div class="slider-btn">
                                        <a href="javascript:void(0)">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="homepage2-fourth-sec mt-24">
                <div class="container">
                    <div class="tranding-item-sec">
                        <div class="home-tranding-first">
                            <h2 class="home-cate-title">Featured Items</h2>
                        </div>
                        <div class="home-tranding-second">
                            <a href="tranding-page.html">
                                <p class="see-all-txt">See all<span><img src="assets/images/homepage/see-all-icon.svg"
                                            alt="right-arrow"></span></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="featured-description mt-16">
                    <div class="featured-description-full">
                        <div class="featured-img-sec">
                            <img src="assets/images/homepage2/featured-1.png" alt="furniture-img" class="img-fluid">
                            <div class="tra-fav-sec">
                                <div class="home-page-favourite">
                                    <a href="javascript:void(0);" class="item-bookmark active ">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                                width="20" height="20">
                                                <rect width="20" height="20" fill="white"></rect>
                                            </mask>
                                            <g mask="url(#mask0_1_2980)">
                                                <path
                                                    d="M13.4259 2.5C16.3611 2.5 18.3333 5.29375 18.3333 7.9C18.3333 13.1781 10.1481 17.5 9.99996 17.5C9.85181 17.5 1.66663 13.1781 1.66663 7.9C1.66663 5.29375 3.63885 2.5 6.57403 2.5C8.25922 2.5 9.36107 3.35312 9.99996 4.10312C10.6388 3.35312 11.7407 2.5 13.4259 2.5Z"
                                                    fill="#666666"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-content1">
                                <div class="feat-details1">
                                    <p class="feat-txt1">Dining Set</p>
                                </div>
                                <div class="feat-details2">
                                    <ul class="homepage-rating-sec1">
                                        <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star"></li>
                                        <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star"></li>
                                        <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star"></li>
                                        <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star"></li>
                                        <li><img src="assets/images/homepage/light-yellow-star.svg"
                                                alt="light-yellow-img"></li>
                                    </ul>
                                </div>
                            </div>
                            <h3 class="feat-txt2">Dining table and chairs Set</h3>
                            <h4 class="feat-txt3">$220</h4>
                        </div>
                    </div>
                    <div class="featured-description-full">
                        <div class="featured-img-sec">
                            <img src="assets/images/homepage2/featured-2.png" alt="furniture-img" class="img-fluid">
                            <div class="tra-fav-sec">
                                <div class="home-page-favourite">
                                    <a href="javascript:void(0);" class="item-bookmark active ">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                                width="20" height="20">
                                                <rect width="20" height="20" fill="white"></rect>
                                            </mask>
                                            <g mask="url(#mask0_1_2980)">
                                                <path
                                                    d="M13.4259 2.5C16.3611 2.5 18.3333 5.29375 18.3333 7.9C18.3333 13.1781 10.1481 17.5 9.99996 17.5C9.85181 17.5 1.66663 13.1781 1.66663 7.9C1.66663 5.29375 3.63885 2.5 6.57403 2.5C8.25922 2.5 9.36107 3.35312 9.99996 4.10312C10.6388 3.35312 11.7407 2.5 13.4259 2.5Z"
                                                    fill="#666666"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-content1">
                                <div class="feat-details1">
                                    <p class="feat-txt1">Sofas</p>
                                </div>
                                <div class="feat-details2">
                                    <ul class="homepage-rating-sec1">
                                        <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star"></li>
                                        <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star"></li>
                                        <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star"></li>
                                        <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star"></li>
                                        <li><img src="assets/images/homepage/light-yellow-star.svg"
                                                alt="light-yellow-img"></li>
                                    </ul>
                                </div>
                            </div>
                            <h3 class="feat-txt2">Modern Green Sofa</h3>
                            <h4 class="feat-txt3">$140</h4>
                        </div>
                    </div>
                    <div class="featured-description-full">
                        <div class="featured-img-sec">
                            <img src="assets/images/homepage2/featured-1.png" alt="furniture-img" class="img-fluid">
                            <div class="tra-fav-sec">
                                <div class="home-page-favourite">
                                    <a href="javascript:void(0);" class="item-bookmark active ">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                                width="20" height="20">
                                                <rect width="20" height="20" fill="white"></rect>
                                            </mask>
                                            <g mask="url(#mask0_1_2980)">
                                                <path
                                                    d="M13.4259 2.5C16.3611 2.5 18.3333 5.29375 18.3333 7.9C18.3333 13.1781 10.1481 17.5 9.99996 17.5C9.85181 17.5 1.66663 13.1781 1.66663 7.9C1.66663 5.29375 3.63885 2.5 6.57403 2.5C8.25922 2.5 9.36107 3.35312 9.99996 4.10312C10.6388 3.35312 11.7407 2.5 13.4259 2.5Z"
                                                    fill="#666666"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-content1">
                                <div class="feat-details1">
                                    <p class="feat-txt1">Dining Set</p>
                                </div>
                                <div class="feat-details2">
                                    <ul class="homepage-rating-sec1">
                                        <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star"></li>
                                        <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star"></li>
                                        <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star"></li>
                                        <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star"></li>
                                        <li><img src="assets/images/homepage/light-yellow-star.svg"
                                                alt="light-yellow-img"></li>
                                    </ul>
                                </div>
                            </div>
                            <h3 class="feat-txt2">Dining table and chairs Set</h3>
                            <h4 class="feat-txt3">$220</h4>
                        </div>
                    </div>
                    <div class="featured-description-full">
                        <div class="featured-img-sec">
                            <img src="assets/images/homepage2/featured-2.png" alt="furniture-img" class="img-fluid">
                            <div class="tra-fav-sec">
                                <div class="home-page-favourite">
                                    <a href="javascript:void(0);" class="item-bookmark active ">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                                width="20" height="20">
                                                <rect width="20" height="20" fill="white"></rect>
                                            </mask>
                                            <g mask="url(#mask0_1_2980)">
                                                <path
                                                    d="M13.4259 2.5C16.3611 2.5 18.3333 5.29375 18.3333 7.9C18.3333 13.1781 10.1481 17.5 9.99996 17.5C9.85181 17.5 1.66663 13.1781 1.66663 7.9C1.66663 5.29375 3.63885 2.5 6.57403 2.5C8.25922 2.5 9.36107 3.35312 9.99996 4.10312C10.6388 3.35312 11.7407 2.5 13.4259 2.5Z"
                                                    fill="#666666"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-content1">
                                <div class="feat-details1">
                                    <p class="feat-txt1">Sofas</p>
                                </div>
                                <div class="feat-details2">
                                    <ul class="homepage-rating-sec1">
                                        <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star"></li>
                                        <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star"></li>
                                        <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star"></li>
                                        <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star"></li>
                                        <li><img src="assets/images/homepage/light-yellow-star.svg"
                                                alt="light-yellow-img"></li>
                                    </ul>
                                </div>
                            </div>
                            <h3 class="feat-txt2">Modern Green Sofa</h3>
                            <h4 class="feat-txt3">$140</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="homepage2-fifth-sec mt-24">
                <div class="container">
                    <div class="tranding-item-sec">
                        <div class="home-tranding-first">
                            <h2 class="home-cate-title">Official Partner</h2>
                        </div>
                        <div class="home-tranding-second">
                            <a href="parterner-page.html">
                                <p class="see-all-txt">See all<span><img src="assets/images/homepage/see-all-icon.svg"
                                            alt="right-arrow"></span></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="offcial-partner-home2-featured mt-16">
                    <div class="offcial-partner-home2">
                        <div class="round-shape-home2 bg-green">
                            <div>
                                <h3 class="round-txt-home2">WL</h3>
                            </div>
                        </div>
                        <div>
                            <h4 class="offcial-title-home2">Wood Land</h4>
                            <h5 class="offcial-subtitle-home2">New York, USA</h5>
                        </div>
                    </div>
                    <div class="offcial-partner-home2">
                        <div class="round-shape-home2 bg-red">
                            <div>
                                <h3 class="round-txt-home2">H</h3>
                            </div>
                        </div>
                        <div>
                            <h4 class="offcial-title-home2">Home Decor</h4>
                            <h5 class="offcial-subtitle-home2">London, UK</h5>
                        </div>
                    </div>
                    <div class="offcial-partner-home2">
                        <div class="round-shape-home2 bg-black">
                            <div>
                                <h3 class="round-txt-home2">Fni.</h3>
                            </div>
                        </div>
                        <div>
                            <h4 class="offcial-title-home2">Furnito</h4>
                            <h5 class="offcial-subtitle-home2">Auckland, NZ</h5>
                        </div>
                    </div>
                    <div class="offcial-partner-home2">
                        <div class="round-shape-home2 bg-green">
                            <div>
                                <h3 class="round-txt-home2">WL</h3>
                            </div>
                        </div>
                        <div>
                            <h4 class="offcial-title-home2">Wood Land</h4>
                            <h5 class="offcial-subtitle-home2">New York, USA</h5>
                        </div>
                    </div>
                    <div class="offcial-partner-home2">
                        <div class="round-shape-home2 bg-red">
                            <div>
                                <h3 class="round-txt-home2">H</h3>
                            </div>
                        </div>
                        <div>
                            <h4 class="offcial-title-home2">Home Decor</h4>
                            <h5 class="offcial-subtitle-home2">London, UK</h5>
                        </div>
                    </div>
                    <div class="offcial-partner-home2">
                        <div class="round-shape-home2 bg-black">
                            <div>
                                <h3 class="round-txt-home2">Fni.</h3>
                            </div>
                        </div>
                        <div>
                            <h4 class="offcial-title-home2">Furnito</h4>
                            <h5 class="offcial-subtitle-home2">Auckland, NZ</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="homepage2-sixth-sec mt-24">
                <div class="container">
                    <div class="tranding-item-sec">
                        <div class="home-tranding-first">
                            <h2 class="home-cate-title">Inspiration & Ideas</h2>
                        </div>
                    </div>
                </div>
                <div class="home2-inspiration mt-16">
                    <div class="inspiration-sec-bottom-home2">
                        <div class="home2-insp-img">
                            <div class="inspiration-overlay"></div>
                            <img src="assets/images/homepage2/inspiration-1.png" alt="furniture-img" class="img-fluid">
                            <div class="home2-insp-content">
                                <h3 class="inspiration-title-home2">Farmhouse</h3>
                                <h4 class="inspiration-subtitle-home2">250 items</h4>
                            </div>
                        </div>
                    </div>
                    <div class="inspiration-sec-bottom-home2">
                        <div class="home2-insp-img">
                            <div class="inspiration-overlay"></div>
                            <img src="assets/images/homepage2/inspiration-2.png" alt="furniture-img" class="img-fluid">
                            <div class="home2-insp-content">
                                <h3 class="inspiration-title-home2">Office</h3>
                                <h4 class="inspiration-subtitle-home2">356 items</h4>
                            </div>
                        </div>
                    </div>
                    <div class="inspiration-sec-bottom-home2">
                        <div class="home2-insp-img">
                            <div class="inspiration-overlay"></div>
                            <img src="assets/images/homepage2/inspiration-1.png" alt="furniture-img" class="img-fluid">
                            <div class="home2-insp-content">
                                <h3 class="inspiration-title-home2">Farmhouse</h3>
                                <h4 class="inspiration-subtitle-home2">250 items</h4>
                            </div>
                        </div>
                    </div>
                    <div class="inspiration-sec-bottom-home2">
                        <div class="home2-insp-img">
                            <div class="inspiration-overlay"></div>
                            <img src="assets/images/homepage2/inspiration-2.png" alt="furniture-img" class="img-fluid">
                            <div class="home2-insp-content">
                                <h3 class="inspiration-title-home2">Office</h3>
                                <h4 class="inspiration-subtitle-home2">356 items</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="homepage2-seventh-sec mt-24">
                <div class="container">
                    <div class="favourite-top-sec">
                        <div class="fav-first-button">
                            <div class="fav-first-button-wrapper">
                                <div class="abc">
                                    <div class="sort-btn-favoutite">
                                        <a href="javascript:void(0)">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_1_4608" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_1_4608)">
                                                    <path d="M8.51023 20.5L3.49023 15.49" stroke="white"
                                                        stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M8.50977 3.5V20.5" stroke="white" stroke-width="2"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M14.4902 3.5L19.5102 8.51" stroke="white" stroke-width="2"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M14.4902 20.5V3.5" stroke="white" stroke-width="2"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                            sort
                                        </a>
                                    </div>
                                    <div class="sort-btn-favoutite1">
                                        <a href="javascript:void(0)">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_1_1112" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_1_1112)">
                                                    <path
                                                        d="M13.8201 19.07C13.8201 19.68 13.42 20.48 12.91 20.79L11.5001 21.7C10.1901 22.51 8.37006 21.6 8.37006 19.98V14.63C8.37006 13.92 7.97006 13.01 7.56006 12.51L3.72003 8.47C3.21003 7.96 2.81006 7.06001 2.81006 6.45001V4.13C2.81006 2.92 3.72008 2.01001 4.83008 2.01001H18.17C19.28 2.01001 20.1901 2.92 20.1901 4.03V6.25C20.1901 7.06 19.6801 8.07001 19.1801 8.57001"
                                                        stroke="#666666" stroke-width="2" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M15.5701 16.52C17.3374 16.52 18.7701 15.0873 18.7701 13.32C18.7701 11.5527 17.3374 10.12 15.5701 10.12C13.8028 10.12 12.3701 11.5527 12.3701 13.32C12.3701 15.0873 13.8028 16.52 15.5701 16.52Z"
                                                        stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M19.3701 17.12L18.3701 16.12" stroke="#666666"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                            Filter
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fav-second-button">
                            <div class="fav-second-button-wrapper">
                                <div>
                                    <a href="javascript:void(0)">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <mask id="mask0_1_4590" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                                x="0" y="0" width="24" height="24">
                                                <rect width="24" height="24" fill="white" />
                                            </mask>
                                            <g mask="url(#mask0_1_4590)">
                                                <path
                                                    d="M22 8.52V3.98C22 2.57 21.36 2 19.77 2H15.73C14.14 2 13.5 2.57 13.5 3.98V8.51C13.5 9.93 14.14 10.49 15.73 10.49H19.77C21.36 10.5 22 9.93 22 8.52Z"
                                                    stroke="#0EA5E9" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M22 19.77V15.73C22 14.14 21.36 13.5 19.77 13.5H15.73C14.14 13.5 13.5 14.14 13.5 15.73V19.77C13.5 21.36 14.14 22 15.73 22H19.77C21.36 22 22 21.36 22 19.77Z"
                                                    stroke="#0EA5E9" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M10.5 8.52V3.98C10.5 2.57 9.86 2 8.27 2H4.23C2.64 2 2 2.57 2 3.98V8.51C2 9.93 2.64 10.49 4.23 10.49H8.27C9.86 10.5 10.5 9.93 10.5 8.52Z"
                                                    stroke="#0EA5E9" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M10.5 19.77V15.73C10.5 14.14 9.86 13.5 8.27 13.5H4.23C2.64 13.5 2 14.14 2 15.73V19.77C2 21.36 2.64 22 4.23 22H8.27C9.86 22 10.5 21.36 10.5 19.77Z"
                                                    stroke="#0EA5E9" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <mask id="mask0_1_4585" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                                x="0" y="0" width="24" height="24">
                                                <rect width="24" height="24" fill="white" />
                                            </mask>
                                            <g mask="url(#mask0_1_4585)">
                                                <path
                                                    d="M19.9 13.5H4.1C2.6 13.5 2 14.14 2 15.73V19.77C2 21.36 2.6 22 4.1 22H19.9C21.4 22 22 21.36 22 19.77V15.73C22 14.14 21.4 13.5 19.9 13.5Z"
                                                    stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M19.9 2H4.1C2.6 2 2 2.64 2 4.23V8.27C2 9.86 2.6 10.5 4.1 10.5H19.9C21.4 10.5 22 9.86 22 8.27V4.23C22 2.64 21.4 2 19.9 2Z"
                                                    stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="favourite-bottom-sec mt-24">
                        <div class="favourite-bottom-sec-wrapper">
                            <div class="related-item">
                                <div class="related-item-img related-item-img1 ">
                                    <a href="single-product-page.html">
                                        <img src="assets/images/homepage/sort-1.png" class="img-fluid" alt="chair-img">
                                    </a>
                                    <div class="img-bottom-content">
                                        <div class="img-first-content">
                                            <p>Chairs</p>
                                        </div>
                                        <div class="favourite-sec">
                                            <div class="product-page-favourite">
                                                <a href="javascript:void(0);" class="item-bookmark">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                                            y="0" width="20" height="20">
                                                            <rect width="20" height="20" fill="white"></rect>
                                                        </mask>
                                                        <g mask="url(#mask0_1_2980)">
                                                            <path
                                                                d="M13.4259 2.5C16.3611 2.5 18.3333 5.29375 18.3333 7.9C18.3333 13.1781 10.1481 17.5 9.99996 17.5C9.85181 17.5 1.66663 13.1781 1.66663 7.9C1.66663 5.29375 3.63885 2.5 6.57403 2.5C8.25922 2.5 9.36107 3.35312 9.99996 4.10312C10.6388 3.35312 11.7407 2.5 13.4259 2.5Z"
                                                                fill="#666666"></path>
                                                        </g>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="related-item-content">
                                    <h5 class="rel-txt1">Yellow Chair</h5>
                                    <div class="related-item-content-rating-sec">
                                        <div class="related-item-first">
                                            <h6 class="rel-txt2">$60</h6>
                                        </div>
                                        <div class="related-item-second">
                                            <ul>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/light-yellow-star.svg"
                                                        alt="light-yellow-img"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="related-item">
                                <div class="related-item-img related-item-img1 ">
                                    <a href="single-product-page.html">
                                        <img src="assets/images/homepage/sort-2.png" class="img-fluid"
                                            alt="cabinets-img">
                                    </a>
                                    <div class="img-bottom-content">
                                        <div class="img-first-content">
                                            <p>Cabinets</p>
                                        </div>
                                        <div class="favourite-sec">
                                            <div class="product-page-favourite">
                                                <a href="javascript:void(0);" class="item-bookmark">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                                            y="0" width="20" height="20">
                                                            <rect width="20" height="20" fill="white"></rect>
                                                        </mask>
                                                        <g mask="url(#mask0_1_2980)">
                                                            <path
                                                                d="M13.4259 2.5C16.3611 2.5 18.3333 5.29375 18.3333 7.9C18.3333 13.1781 10.1481 17.5 9.99996 17.5C9.85181 17.5 1.66663 13.1781 1.66663 7.9C1.66663 5.29375 3.63885 2.5 6.57403 2.5C8.25922 2.5 9.36107 3.35312 9.99996 4.10312C10.6388 3.35312 11.7407 2.5 13.4259 2.5Z"
                                                                fill="#666666"></path>
                                                        </g>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="related-item-content">
                                    <h5 class="rel-txt1">Scandinavian Style </h5>
                                    <div class="related-item-content-rating-sec">
                                        <div class="related-item-first">
                                            <h6 class="rel-txt2">$60</h6>
                                        </div>
                                        <div class="related-item-second">
                                            <ul>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/light-yellow-star.svg"
                                                        alt="light-yellow-img"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="related-item">
                                <div class="related-item-img related-item-img1">
                                    <a href="single-product-page.html">
                                        <img src="assets/images/homepage/sort-3.png" class="img-fluid"
                                            alt="cabinets-img">
                                    </a>
                                    <div class="img-bottom-content">
                                        <div class="img-first-content">
                                            <p>Dining Set</p>
                                        </div>
                                        <div class="favourite-sec">
                                            <div class="product-page-favourite">
                                                <a href="javascript:void(0);" class="item-bookmark active">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                                            y="0" width="20" height="20">
                                                            <rect width="20" height="20" fill="white"></rect>
                                                        </mask>
                                                        <g mask="url(#mask0_1_2980)">
                                                            <path
                                                                d="M13.4259 2.5C16.3611 2.5 18.3333 5.29375 18.3333 7.9C18.3333 13.1781 10.1481 17.5 9.99996 17.5C9.85181 17.5 1.66663 13.1781 1.66663 7.9C1.66663 5.29375 3.63885 2.5 6.57403 2.5C8.25922 2.5 9.36107 3.35312 9.99996 4.10312C10.6388 3.35312 11.7407 2.5 13.4259 2.5Z"
                                                                fill="#666666"></path>
                                                        </g>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="related-item-content">
                                    <h5 class="rel-txt1">Round Premium Set </h5>
                                    <div class="related-item-content-rating-sec">
                                        <div class="related-item-first">
                                            <h6 class="rel-txt2">$140</h6>
                                        </div>
                                        <div class="related-item-second">
                                            <ul>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/light-yellow-star.svg"
                                                        alt="light-yellow-img"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="related-item">
                                <div class="related-item-img related-item-img1">
                                    <a href="single-product-page.html">
                                        <img src="assets/images/homepage/sort-4.png" class="img-fluid"
                                            alt="cabinets-img">
                                    </a>
                                    <div class="img-bottom-content">
                                        <div class="img-first-content">
                                            <p>Bed</p>
                                        </div>
                                        <div class="favourite-sec">
                                            <div class="product-page-favourite">
                                                <a href="javascript:void(0);" class="item-bookmark">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                                            y="0" width="20" height="20">
                                                            <rect width="20" height="20" fill="white"></rect>
                                                        </mask>
                                                        <g mask="url(#mask0_1_2980)">
                                                            <path
                                                                d="M13.4259 2.5C16.3611 2.5 18.3333 5.29375 18.3333 7.9C18.3333 13.1781 10.1481 17.5 9.99996 17.5C9.85181 17.5 1.66663 13.1781 1.66663 7.9C1.66663 5.29375 3.63885 2.5 6.57403 2.5C8.25922 2.5 9.36107 3.35312 9.99996 4.10312C10.6388 3.35312 11.7407 2.5 13.4259 2.5Z"
                                                                fill="#666666"></path>
                                                        </g>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="related-item-content">
                                    <h5 class="rel-txt1">Scandinavian Bed </h5>
                                    <div class="related-item-content-rating-sec">
                                        <div class="related-item-first">
                                            <h6 class="rel-txt2">$99</h6>
                                        </div>
                                        <div class="related-item-second">
                                            <ul>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/light-yellow-star.svg"
                                                        alt="light-yellow-img"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="related-item">
                                <div class="related-item-img related-item-img1">
                                    <a href="single-product-page.html">
                                        <img src="assets/images/homepage/sort-5.png" class="img-fluid"
                                            alt="cabinets-img">
                                    </a>
                                    <div class="img-bottom-content">
                                        <div class="img-first-content">
                                            <p>Table</p>
                                        </div>
                                        <div class="favourite-sec">
                                            <div class="product-page-favourite">
                                                <a href="javascript:void(0);" class="item-bookmark">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                                            y="0" width="20" height="20">
                                                            <rect width="20" height="20" fill="white"></rect>
                                                        </mask>
                                                        <g mask="url(#mask0_1_2980)">
                                                            <path
                                                                d="M13.4259 2.5C16.3611 2.5 18.3333 5.29375 18.3333 7.9C18.3333 13.1781 10.1481 17.5 9.99996 17.5C9.85181 17.5 1.66663 13.1781 1.66663 7.9C1.66663 5.29375 3.63885 2.5 6.57403 2.5C8.25922 2.5 9.36107 3.35312 9.99996 4.10312C10.6388 3.35312 11.7407 2.5 13.4259 2.5Z"
                                                                fill="#666666"></path>
                                                        </g>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="related-item-content">
                                    <h5 class="rel-txt1">Yellow Chair</h5>
                                    <div class="related-item-content-rating-sec">
                                        <div class="related-item-first">
                                            <h6 class="rel-txt2">$60</h6>
                                        </div>
                                        <div class="related-item-second">
                                            <ul>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/light-yellow-star.svg"
                                                        alt="light-yellow-img"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="related-item">
                                <div class="related-item-img related-item-img1">
                                    <a href="single-product-page.html">
                                        <img src="assets/images/homepage/sort-6.png" class="img-fluid"
                                            alt="cabinets-img">
                                    </a>
                                    <div class="img-bottom-content">
                                        <div class="img-first-content">
                                            <p>Sofas</p>
                                        </div>
                                        <div class="favourite-sec">
                                            <div class="product-page-favourite">
                                                <a href="javascript:void(0);" class="item-bookmark active">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                                            y="0" width="20" height="20">
                                                            <rect width="20" height="20" fill="white"></rect>
                                                        </mask>
                                                        <g mask="url(#mask0_1_2980)">
                                                            <path
                                                                d="M13.4259 2.5C16.3611 2.5 18.3333 5.29375 18.3333 7.9C18.3333 13.1781 10.1481 17.5 9.99996 17.5C9.85181 17.5 1.66663 13.1781 1.66663 7.9C1.66663 5.29375 3.63885 2.5 6.57403 2.5C8.25922 2.5 9.36107 3.35312 9.99996 4.10312C10.6388 3.35312 11.7407 2.5 13.4259 2.5Z"
                                                                fill="#666666"></path>
                                                        </g>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="related-item-content">
                                    <h5 class="rel-txt1">Sofa Scandinavian </h5>
                                    <div class="related-item-content-rating-sec">
                                        <div class="related-item-first">
                                            <h6 class="rel-txt2">$120</h6>
                                        </div>
                                        <div class="related-item-second">
                                            <ul>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/yellow-star.svg" alt="yellow-star">
                                                </li>
                                                <li><img src="assets/images/homepage/light-yellow-star.svg"
                                                        alt="light-yellow-img"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Homepage2 Details Section End -->
        <!-- Setting Menu Section Start -->
        <div class="menu-sidebar details">
            <div class="offcanvas offcanvas-start custom-offcanvas-noti" id="offcanvasExample">
                <div class="offcanvas-header custom-header-offcanva">
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="dropdown mt-3">
                        <h2 class="app-setting-title">Account</h2>
                        <div class="app-setting-page-full mt-24">
                            <div class="app-setting-top">
                                <a href="home-page2.html">
                                    <div class="app-setting-menu-start mt-16">
                                        <div class="menu-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_1_4844" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_1_4844)">
                                                    <path
                                                        d="M8.12602 14C8.57006 15.7252 10.1362 17 12 17C13.8638 17 15.4299 15.7252 15.874 14M11.0177 2.764L4.23539 8.03912C3.78202 8.39175 3.55534 8.56806 3.39203 8.78886C3.24737 8.98444 3.1396 9.20478 3.07403 9.43905C3 9.70352 3 9.9907 3 10.5651V17.8C3 18.9201 3 19.4801 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4801 21 18.9201 21 17.8V10.5651C21 9.9907 21 9.70352 20.926 9.43905C20.8604 9.20478 20.7526 8.98444 20.608 8.78886C20.4447 8.56806 20.218 8.39175 19.7646 8.03913L12.9823 2.764C12.631 2.49075 12.4553 2.35412 12.2613 2.3016C12.0902 2.25526 11.9098 2.25526 11.7387 2.3016C11.5447 2.35412 11.369 2.49075 11.0177 2.764Z"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="menu-txt-app">
                                            <h3 class="app-txt-title">Homepage2</h3>
                                        </div>
                                    </div>
                                    <div class="border-bottom-app mt-8"></div>
                                </a>
                                <a href="new-password-screen.html">
                                    <div class="app-setting-menu-start mt-16">
                                        <div class="menu-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_1_412" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_1_412)">
                                                    <path
                                                        d="M22 11V8.2C22 7.0799 22 6.51984 21.782 6.09202C21.5903 5.71569 21.2843 5.40973 20.908 5.21799C20.4802 5 19.9201 5 18.8 5H5.2C4.0799 5 3.51984 5 3.09202 5.21799C2.71569 5.40973 2.40973 5.71569 2.21799 6.09202C2 6.51984 2 7.0799 2 8.2V11.8C2 12.9201 2 13.4802 2.21799 13.908C2.40973 14.2843 2.71569 14.5903 3.09202 14.782C3.51984 15 4.0799 15 5.2 15H11M12 10H12.005M17 10H17.005M7 10H7.005M19.25 17V15.25C19.25 14.2835 18.4665 13.5 17.5 13.5C16.5335 13.5 15.75 14.2835 15.75 15.25V17M12.25 10C12.25 10.1381 12.1381 10.25 12 10.25C11.8619 10.25 11.75 10.1381 11.75 10C11.75 9.86193 11.8619 9.75 12 9.75C12.1381 9.75 12.25 9.86193 12.25 10ZM17.25 10C17.25 10.1381 17.1381 10.25 17 10.25C16.8619 10.25 16.75 10.1381 16.75 10C16.75 9.86193 16.8619 9.75 17 9.75C17.1381 9.75 17.25 9.86193 17.25 10ZM7.25 10C7.25 10.1381 7.13807 10.25 7 10.25C6.86193 10.25 6.75 10.1381 6.75 10C6.75 9.86193 6.86193 9.75 7 9.75C7.13807 9.75 7.25 9.86193 7.25 10ZM15.6 21H19.4C19.9601 21 20.2401 21 20.454 20.891C20.6422 20.7951 20.7951 20.6422 20.891 20.454C21 20.2401 21 19.9601 21 19.4V18.6C21 18.0399 21 17.7599 20.891 17.546C20.7951 17.3578 20.6422 17.2049 20.454 17.109C20.2401 17 19.9601 17 19.4 17H15.6C15.0399 17 14.7599 17 14.546 17.109C14.3578 17.2049 14.2049 17.3578 14.109 17.546C14 17.7599 14 18.0399 14 18.6V19.4C14 19.9601 14 20.2401 14.109 20.454C14.2049 20.6422 14.3578 20.7951 14.546 20.891C14.7599 21 15.0399 21 15.6 21Z"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="menu-txt-app">
                                            <h3 class="app-txt-title">Change Password</h3>
                                        </div>
                                    </div>
                                    <div class="border-bottom-app mt-8"></div>
                                </a>
                                <a href="currency.html">
                                    <div class="app-setting-menu-start mt-16">
                                        <div class="menu-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_1_403" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_1_403)">
                                                    <path
                                                        d="M8.5 14.6667C8.5 15.9553 9.54467 17 10.8333 17H13C14.3807 17 15.5 15.8807 15.5 14.5C15.5 13.1193 14.3807 12 13 12H11C9.61929 12 8.5 10.8807 8.5 9.5C8.5 8.11929 9.61929 7 11 7H13.1667C14.4553 7 15.5 8.04467 15.5 9.33333M12 5.5V7M12 17V18.5M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="menu-txt-app">
                                            <h3 class="app-txt-title">Currency</h3>
                                        </div>
                                    </div>
                                    <div class="border-bottom-app mt-8"></div>
                                </a>
                                <a href="change-language.html">
                                    <div class="app-setting-menu-start mt-16">
                                        <div class="menu-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_1_394" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_1_394)">
                                                    <path
                                                        d="M4 7C4 6.06812 4 5.60218 4.15224 5.23463C4.35523 4.74458 4.74458 4.35523 5.23463 4.15224C5.60218 4 6.06812 4 7 4H17C17.9319 4 18.3978 4 18.7654 4.15224C19.2554 4.35523 19.6448 4.74458 19.8478 5.23463C20 5.60218 20 6.06812 20 7M9 20H15M12 4V20"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="menu-txt-app">
                                            <h3 class="app-txt-title">Change Language</h3>
                                        </div>
                                    </div>
                                    <div class="border-bottom-app mt-8"></div>
                                </a>
                                <a href="about-us.html">
                                    <div class="app-setting-menu-start mt-16">
                                        <div class="menu-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_1_385" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_1_385)">
                                                    <path
                                                        d="M12 16V12M12 8H12.01M2 8.52274V15.4773C2 15.7218 2 15.8441 2.02763 15.9592C2.05213 16.0613 2.09253 16.1588 2.14736 16.2483C2.2092 16.3492 2.29568 16.4357 2.46863 16.6086L7.39137 21.5314C7.56432 21.7043 7.6508 21.7908 7.75172 21.8526C7.84119 21.9075 7.93873 21.9479 8.04077 21.9724C8.15586 22 8.27815 22 8.52274 22H15.4773C15.7218 22 15.8441 22 15.9592 21.9724C16.0613 21.9479 16.1588 21.9075 16.2483 21.8526C16.3492 21.7908 16.4357 21.7043 16.6086 21.5314L21.5314 16.6086C21.7043 16.4357 21.7908 16.3492 21.8526 16.2483C21.9075 16.1588 21.9479 16.0613 21.9724 15.9592C22 15.8441 22 15.7218 22 15.4773V8.52274C22 8.27815 22 8.15586 21.9724 8.04077C21.9479 7.93873 21.9075 7.84119 21.8526 7.75172C21.7908 7.6508 21.7043 7.56432 21.5314 7.39137L16.6086 2.46863C16.4357 2.29568 16.3492 2.2092 16.2483 2.14736C16.1588 2.09253 16.0613 2.05213 15.9592 2.02763C15.8441 2 15.7218 2 15.4773 2H8.52274C8.27815 2 8.15586 2 8.04077 2.02763C7.93873 2.05213 7.84119 2.09253 7.75172 2.14736C7.6508 2.2092 7.56432 2.29568 7.39137 2.46863L2.46863 7.39137C2.29568 7.56432 2.2092 7.6508 2.14736 7.75172C2.09253 7.84119 2.05213 7.93873 2.02763 8.04077C2 8.15586 2 8.27815 2 8.52274Z"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="menu-txt-app">
                                            <h3 class="app-txt-title">About Us</h3>
                                        </div>
                                    </div>
                                    <div class="border-bottom-app mt-8"></div>
                                </a>
                                <a href="faq.html">
                                    <div class="app-setting-menu-start mt-16">
                                        <div class="menu-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_1_376" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_1_376)">
                                                    <path
                                                        d="M9.08997 8.99999C9.32507 8.33166 9.78912 7.7681 10.3999 7.40912C11.0107 7.05015 11.7289 6.91893 12.4271 7.0387C13.1254 7.15848 13.7588 7.52151 14.215 8.06352C14.6713 8.60552 14.921 9.29151 14.92 9.99999C14.92 12 11.92 13 11.92 13M12 17H12.01M2 8.52274V15.4773C2 15.7218 2 15.8441 2.02763 15.9592C2.05213 16.0613 2.09253 16.1588 2.14736 16.2483C2.2092 16.3492 2.29568 16.4357 2.46863 16.6086L7.39137 21.5314C7.56432 21.7043 7.6508 21.7908 7.75172 21.8526C7.84119 21.9075 7.93873 21.9479 8.04077 21.9724C8.15586 22 8.27815 22 8.52274 22H15.4773C15.7218 22 15.8441 22 15.9592 21.9724C16.0613 21.9479 16.1588 21.9075 16.2483 21.8526C16.3492 21.7908 16.4357 21.7043 16.6086 21.5314L21.5314 16.6086C21.7043 16.4357 21.7908 16.3492 21.8526 16.2483C21.9075 16.1588 21.9479 16.0613 21.9724 15.9592C22 15.8441 22 15.7218 22 15.4773V8.52274C22 8.27815 22 8.15586 21.9724 8.04077C21.9479 7.93873 21.9075 7.84119 21.8526 7.75172C21.7908 7.6508 21.7043 7.56432 21.5314 7.39137L16.6086 2.46863C16.4357 2.29568 16.3492 2.2092 16.2483 2.14736C16.1588 2.09253 16.0613 2.05213 15.9592 2.02763C15.8441 2 15.7218 2 15.4773 2H8.52274C8.27815 2 8.15586 2 8.04077 2.02763C7.93873 2.05213 7.84119 2.09253 7.75172 2.14736C7.6508 2.2092 7.56432 2.29568 7.39137 2.46863L2.46863 7.39137C2.29568 7.56432 2.2092 7.6508 2.14736 7.75172C2.09253 7.84119 2.05213 7.93873 2.02763 8.04077C2 8.15586 2 8.27815 2 8.52274Z"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="menu-txt-app">
                                            <h3 class="app-txt-title">FAQs</h3>
                                        </div>
                                    </div>
                                    <div class="border-bottom-app mt-8"></div>
                                </a>
                                <a href="index.html">
                                    <div class="app-setting-menu-start mt-16">
                                        <div class="menu-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_1_367" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_1_367)">
                                                    <path
                                                        d="M16 17L21 12M21 12L16 7M21 12H9M12 17C12 17.93 12 18.395 11.8978 18.7765C11.6204 19.8117 10.8117 20.6204 9.77646 20.8978C9.39496 21 8.92997 21 8 21H7.5C6.10218 21 5.40326 21 4.85195 20.7716C4.11687 20.4672 3.53284 19.8831 3.22836 19.1481C3 18.5967 3 17.8978 3 16.5V7.5C3 6.10217 3 5.40326 3.22836 4.85195C3.53284 4.11687 4.11687 3.53284 4.85195 3.22836C5.40326 3 6.10218 3 7.5 3H8C8.92997 3 9.39496 3 9.77646 3.10222C10.8117 3.37962 11.6204 4.18827 11.8978 5.22354C12 5.60504 12 6.07003 12 7"
                                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="menu-txt-app">
                                            <h3 class="app-txt-title">Sign Out</h3>
                                        </div>
                                    </div>
                                    <div class="border-bottom-app mt-8"></div>
                                </a>
                            </div>
                            <div class="app-setting-bottom mt-24">
                                <div class="app-setting-bottom-full">
                                    <h2 class="app-bottom-txt">More Options</h2>
                                    <div class="switch-sec mt-16">
                                        <div>
                                            <h3 class="app-switch-txt1">Email Newsletter</h3>
                                        </div>
                                        <div class="app-setting-switch">
                                            <label class="switch app-switch">
                                                <input type="checkbox" checked="">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="switch-sec mt-16">
                                        <div>
                                            <h3 class="app-switch-txt1">Text Messages</h3>
                                        </div>
                                        <div class="app-setting-switch">
                                            <label class="switch app-switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dark-overlay"></div>
        </div>
        <!-- Setting Menu Section End -->
        <!-- Bottom Navigation Section End -->
        <div id="bottom-navigation">
            <div class="container">
                <div class="home-navigation-menu">
                    <div class="row">
                        <div class="col-12">
                            <div class="bottom-panel nagivation-menu-wrap">
                                <ul class="sc-bottom-bar furniture-bottom-nav" id="furniture_navbar">
                                    <li class="nav-menu-icon active">
                                        <a href="home-page2.html" class="home-icon navigation-icons active">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_1_798" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_1_798)">
                                                    <path
                                                        d="M8.12602 14C8.57006 15.7252 10.1362 17 12 17C13.8638 17 15.4299 15.7252 15.874 14M11.0177 2.764L4.23539 8.03912C3.78202 8.39175 3.55534 8.56806 3.39203 8.78886C3.24737 8.98444 3.1396 9.20478 3.07403 9.43905C3 9.70352 3 9.9907 3 10.5651V17.8C3 18.9201 3 19.4801 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4801 21 18.9201 21 17.8V10.5651C21 9.9907 21 9.70352 20.926 9.43905C20.8604 9.20478 20.7526 8.98444 20.608 8.78886C20.4447 8.56806 20.218 8.39175 19.7646 8.03913L12.9823 2.764C12.631 2.49075 12.4553 2.35412 12.2613 2.3016C12.0902 2.25526 11.9098 2.25526 11.7387 2.3016C11.5447 2.35412 11.369 2.49075 11.0177 2.764Z"
                                                        stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="nav-menu-icon">
                                        <a href="favourite.html" class="event-icon navigation-icons">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_1_793" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_1_793)">
                                                    <path
                                                        d="M16.1111 3C19.6333 3 22 6.3525 22 9.48C22 15.8138 12.1778 21 12 21C11.8222 21 2 15.8138 2 9.48C2 6.3525 4.36667 3 7.88889 3C9.91111 3 11.2333 4.02375 12 4.92375C12.7667 4.02375 14.0889 3 16.1111 3Z"
                                                        stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="nav-menu-icon nav-account-icon">
                                        <a href="notification.html"
                                            class="notification-icon navigation-icons left-icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_1_778" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_1_778)">
                                                    <path d="M12 6.43994V9.76994" stroke="#666666" stroke-width="2"
                                                        stroke-miterlimit="10" stroke-linecap="round" />
                                                    <path
                                                        d="M12.0199 2C8.3399 2 5.3599 4.98 5.3599 8.66V10.76C5.3599 11.44 5.0799 12.46 4.7299 13.04L3.4599 15.16C2.6799 16.47 3.2199 17.93 4.6599 18.41C9.4399 20 14.6099 20 19.3899 18.41C20.7399 17.96 21.3199 16.38 20.5899 15.16L19.3199 13.04C18.9699 12.46 18.6899 11.43 18.6899 10.76V8.66C18.6799 5 15.6799 2 12.0199 2Z"
                                                        stroke="#666666" stroke-width="2" stroke-miterlimit="10"
                                                        stroke-linecap="round" />
                                                    <path
                                                        d="M15.3299 18.8201C15.3299 20.6501 13.8299 22.1501 11.9999 22.1501C11.0899 22.1501 10.2499 21.7701 9.64992 21.1701C9.04992 20.5701 8.66992 19.7301 8.66992 18.8201"
                                                        stroke="#666666" stroke-width="2" stroke-miterlimit="10" />
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="nav-menu-icon nav-notifi-icon">
                                        <a href="profile.html" class="account-icon navigation-icons">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_1_772" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect width="24" height="24" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_1_772)">
                                                    <path
                                                        d="M20 21C20 19.6044 20 18.9067 19.8278 18.3389C19.44 17.0605 18.4395 16.06 17.1611 15.6722C16.5933 15.5 15.8956 15.5 14.5 15.5H9.5C8.10444 15.5 7.40665 15.5 6.83886 15.6722C5.56045 16.06 4.56004 17.0605 4.17224 18.3389C4 18.9067 4 19.6044 4 21M16.5 7.5C16.5 9.98528 14.4853 12 12 12C9.51472 12 7.5 9.98528 7.5 7.5C7.5 5.01472 9.51472 3 12 3C14.4853 3 16.5 5.01472 16.5 7.5Z"
                                                        stroke="#666666" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                                <a class="sc-nav-indicator" href="#">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_1_786" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                            y="0" width="24" height="24">
                                            <rect width="24" height="24" fill="white" />
                                        </mask>
                                        <g mask="url(#mask0_1_786)">
                                            <path
                                                d="M2 2H3.74001C4.82001 2 5.67 2.93 5.58 4L4.75 13.96C4.61 15.59 5.89999 16.99 7.53999 16.99H18.19C19.63 16.99 20.89 15.81 21 14.38L21.54 6.88C21.66 5.22 20.4 3.87 18.73 3.87H5.82001"
                                                stroke="white" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M16.25 22C16.9404 22 17.5 21.4404 17.5 20.75C17.5 20.0596 16.9404 19.5 16.25 19.5C15.5596 19.5 15 20.0596 15 20.75C15 21.4404 15.5596 22 16.25 22Z"
                                                stroke="white" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M8.25 22C8.94036 22 9.5 21.4404 9.5 20.75C9.5 20.0596 8.94036 19.5 8.25 19.5C7.55964 19.5 7 20.0596 7 20.75C7 21.4404 7.55964 22 8.25 22Z"
                                                stroke="white" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9 8H21" stroke="white" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Navigation Section End -->
    </div>
    <script src="assets/js/jquery-min-3.6.0.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>