<?php

if($pagename == 'home') {
    echo "
    <div class='container-fluid header bg_primary position-fixed d-none d-lg-block'>
        <div class='row h-100'>
            <div class='container h-100'>
                <div class='row justify-content-center h-100'>
                    <div class='col-11 align-self-center'>
                        <div class='row'>
                            <div class='col-4 align-self-center '>
                                <a href='index.php'><img src='img/logo.png' class='w-100 h-auto'></a>
                            </div>
                            <div class='col-5 align-self-center min-font text-center'>
                                <ul class='font_white horz_list m-0'>
                                      <a href='pricing.php'><li class='transition mr-lg-2 mx-xl-3 weight_700'>PRICING</li></a>
                                      <a href='features.php'><li class='transition mx-lg-2 mx-xl-3 weight_700'>FEATURES</li></a>
                                      <a href='about.php'><li class='transition mx-lg-2 mx-xl-3 weight_700'>ABOUT</li></a>
                                      <a href='contact.php'><li class='transition ml-lg-2 mx-xl-3 weight_700'>CONTACT US</li></a>
                                </ul>
                            </div>
                            <div class='col-3 align-self-center min-font text-right'>
                                <ul class='font_white horz_list m-0'>
                                      <a href='' class='button secondary text-center'>CREATE EVENT</a>
                                      <a href='signin.php'><li class='transition ml-lg-2 ml-xl-3'>SIGN IN</li></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src='img/header_slide1.png' class='w-100 header-slide-img transition'></img>
        </div>
    </div>
    <div class='container-fluid header bg_primary position-fixed d-block d-lg-none'>
        <div class='row h-100 justify-content-center'>

            <div class='col-6 align-self-center'>
                <a href='index.php'><img src='img/logo.png' class='w-100 h-auto'></a>
            </div>
            <div class='position-absolute center-top-absolute' style='right:10px;'>
                <button class='hamburger hamburger--slider header-dropdown-btn p-0 transition' type='button'>
                    <span class='hamburger-box'>
                          <span class='hamburger-inner'></span>
                    </span>
                </button>
            </div>
            <div class='bg_white position-absolute r_n1000 dropdown-menu-header dropdown-header-top transition vh-100 w-100' >
                <ul class='header-dropdown-links font_black h-100 vert_list px-4'>
                    <a href='pricing.php'><li class='transition weight_700 py-3 weight_700'>PRICING</li></a>
                    <a href='features.php'><li class='transition weight_700 py-3 weight_700'>FEATURES</li></a>
                    <a href='about.php'><li class='transition weight_700 py-3 weight_700 '>ABOUT</li></a>
                    <a href='contact.php'><li class='transition weight_700 py-3 weight_700'>CONTACT US</li></a>
                    <a href='signin.php'><li class='transition weight_700 py-3'>SIGN IN</li></a>
                </ul>
            </div>
        </div>
    </div>
    ";
}
if($pagename == 'features') {
    echo "
    <div class='container-fluid header bg_primary position-fixed d-none d-lg-block'>
        <div class='row h-100'>
            <div class='container h-100'>
                <div class='row justify-content-center h-100'>
                    <div class='col-11 align-self-center'>
                        <div class='row'>
                            <div class='col-4 align-self-center '>
                                <a href='index.php'><img src='img/logo.png' class='w-100 h-auto'></a>
                            </div>
                            <div class='col-5 align-self-center min-font text-center'>
                                <ul class='font_white horz_list m-0'>
                                      <a href='index.php'><li class='transition mr-lg-2 mx-xl-3 weight_700'>HOME</li></a>
                                      <a href='pricing.php'><li class='transition mx-lg-2 mx-xl-3 weight_700'>PRICING</li></a>
                                      <a href='about.php'><li class='transition mx-lg-2 mx-xl-3 weight_700'>ABOUT</li></a>
                                      <a href='contact.php'><li class='transition ml-lg-2 mx-xl-3 weight_700'>CONTACT US</li></a>
                                </ul>
                            </div>
                            <div class='col-3 align-self-center min-font text-right'>
                                <ul class='font_white horz_list m-0'>
                                      <a href='' class='button secondary text-center'>CREATE EVENT</a>
                                      <a href='signin.php'><li class='transition ml-lg-2 ml-xl-3'>SIGN IN</li></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src='img/header_slide1.png' class='w-100 header-slide-img transition'></img>
        </div>
    </div>
    <div class='container-fluid header bg_primary position-fixed d-block d-lg-none'>
        <div class='row h-100 justify-content-center'>
            <div class='col-6 align-self-center'>
                <a href='index.php'><img src='img/logo.png' class='w-100 h-auto'></a>
            </div>
            <div class='position-absolute center-top-absolute' style='right:10px;'>
                <button class='hamburger hamburger--slider header-dropdown-btn p-0 transition' type='button'>
                    <span class='hamburger-box'>
                          <span class='hamburger-inner'></span>
                    </span>
                </button>
            </div>
            <div class='bg_white position-absolute r_n1000 dropdown-menu-header dropdown-header-top transition vh-100 w-100' >
                <ul class='header-dropdown-links font_black h-100 vert_list px-4'>
                    <a href='index.php'><li class='transition weight_700 my-3 weight_700'>HOME</li></a>
                    <li class='bb_grey_1'></li>
                    <a href='pricing.php'><li class='transition weight_700 my-3 weight_700'>PRICING</li></a>
                    <li class='bb_grey_1'></li>
                    <a href='about.php'><li class='transition weight_700 my-3 weight_700 '>ABOUT</li></a>
                    <li class='bb_grey_1'></li>
                    <a href='contact.php'><li class='transition weight_700 my-3 weight_700'>CONTACT US</li></a>
                    <li class='bb_grey_1'></li>
                    <a href='signin.php'><li class='transition weight_700 my-3'>SIGN IN</li></a>
                    <li class='bb_grey_1'></li>
                </ul>
            </div>
        </div>
    </div>
    ";
}
if($pagename == 'pricing') {
    echo "
    <div class='container-fluid header bg_primary position-fixed d-none d-lg-block'>
        <div class='row h-100'>
            <div class='container h-100'>
                <div class='row justify-content-center h-100'>
                    <div class='col-11 align-self-center'>
                        <div class='row'>
                            <div class='col-4 align-self-center '>
                                <a href='index.php'><img src='img/logo.png' class='w-100 h-auto'></a>
                            </div>
                            <div class='col-5 align-self-center min-font text-center'>
                                <ul class='font_white horz_list m-0'>
                                      <a href='index.php'><li class='transition mr-lg-2 mx-xl-3 weight_700'>HOME</li></a>
                                      <a href='features.php'><li class='transition mx-lg-2 mx-xl-3 weight_700'>FEATURES</li></a>
                                      <a href='about.php'><li class='transition mx-lg-2 mx-xl-3 weight_700'>ABOUT</li></a>
                                      <a href='contact.php'><li class='transition ml-lg-2 mx-xl-3 weight_700'>CONTACT US</li></a>
                                </ul>
                            </div>
                            <div class='col-3 align-self-center min-font text-right'>
                                <ul class='font_white horz_list m-0'>
                                      <a href='' class='button secondary text-center'>CREATE EVENT</a>
                                      <a href='signin.php'><li class='transition ml-lg-2 ml-xl-3'>SIGN IN</li></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src='img/header_slide1.png' class='w-100 header-slide-img transition'></img>
        </div>
    </div>
    <div class='container-fluid header bg_primary position-fixed d-block d-lg-none'>
        <div class='row h-100 justify-content-center'>
            <div class='col-6 align-self-center'>
                <a href='index.php'><img src='img/logo.png' class='w-100 h-auto'></a>
            </div>
            <div class='position-absolute center-top-absolute' style='right:10px;'>
                <button class='hamburger hamburger--slider header-dropdown-btn p-0 transition' type='button'>
                    <span class='hamburger-box'>
                          <span class='hamburger-inner'></span>
                    </span>
                </button>
            </div>
            <div class='bg_white position-absolute r_n1000 dropdown-menu-header dropdown-header-top transition vh-100 w-100' >
                <ul class='header-dropdown-links font_black h-100 vert_list px-4'>
                    <a href='index.php'><li class='transition weight_700 my-3 weight_700'>HOME</li></a>
                    <li class='bb_grey_1'></li>
                    <a href='features.php'><li class='transition weight_700 my-3 weight_700'>FEATURES</li></a>
                    <li class='bb_grey_1'></li>
                    <a href='about.php'><li class='transition weight_700 my-3 weight_700 '>ABOUT</li></a>
                    <li class='bb_grey_1'></li>
                    <a href='contact.php'><li class='transition weight_700 my-3 weight_700'>CONTACT US</li></a>
                    <li class='bb_grey_1'></li>
                    <a href='signin.php'><li class='transition weight_700 my-3'>SIGN IN</li></a>
                    <li class='bb_grey_1'></li>
                </ul>
            </div>
        </div>
    </div>
    ";
}
if($pagename == 'contact') {
    echo "
    <div class='container-fluid header bg_primary position-fixed d-none d-lg-block'>
        <div class='row h-100'>
            <div class='container h-100'>
                <div class='row justify-content-center h-100'>
                    <div class='col-11 align-self-center'>
                        <div class='row'>
                            <div class='col-4 align-self-center '>
                                <a href='index.php'><img src='img/logo.png' class='w-100 h-auto'></a>
                            </div>
                            <div class='col-5 align-self-center min-font text-center'>
                                <ul class='font_white horz_list m-0'>
                                      <a href='index.php'><li class='transition mr-lg-2 mx-xl-3 weight_700'>HOME</li></a>
                                      <a href='features.php'><li class='transition mx-lg-2 mx-xl-3 weight_700'>FEATURES</li></a>
                                      <a href='pricing.php'><li class='transition mx-lg-2 mx-xl-3 weight_700'>PRICING</li></a>
                                      <a href='about.php'><li class='transition ml-lg-2 mx-xl-3 weight_700'>ABOUT</li></a>
                                </ul>
                            </div>
                            <div class='col-3 align-self-center min-font text-right'>
                                <ul class='font_white horz_list m-0'>
                                      <a href='' class='button secondary text-center'>CREATE EVENT</a>
                                      <a href='signin.php'><li class='transition ml-lg-2 ml-xl-3'>SIGN IN</li></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src='img/header_slide1.png' class='w-100 header-slide-img transition'></img>
        </div>
    </div>
    <div class='container-fluid header bg_primary position-fixed d-block d-lg-none'>
        <div class='row h-100 justify-content-center'>
            <div class='col-6 align-self-center'>
                <a href='index.php'><img src='img/logo.png' class='w-100 h-auto'></a>
            </div>
            <div class='position-absolute center-top-absolute' style='right:10px;'>
                <button class='hamburger hamburger--slider header-dropdown-btn p-0 transition' type='button'>
                    <span class='hamburger-box'>
                          <span class='hamburger-inner'></span>
                    </span>
                </button>
            </div>
            <div class='bg_white position-absolute r_n1000 dropdown-menu-header dropdown-header-top transition vh-100 w-100' >
                <ul class='header-dropdown-links font_black h-100 vert_list px-4'>
                    <a href='index.php'><li class='transition weight_700 my-3 weight_700'>HOME</li></a>
                    <li class='bb_grey_1'></li>
                    <a href='features.php'><li class='transition weight_700 my-3 weight_700'>FEATURES</li></a>
                    <li class='bb_grey_1'></li>
                    <a href='pricing.php'><li class='transition weight_700 my-3 weight_700 '>PRICING</li></a>
                    <li class='bb_grey_1'></li>
                    <a href='about.php'><li class='transition weight_700 my-3 weight_700'>ABOUT</li></a>
                    <li class='bb_grey_1'></li>
                    <a href='signin.php'><li class='transition weight_700 my-3'>SIGN IN</li></a>
                    <li class='bb_grey_1'></li>
                </ul>
            </div>
        </div>
    </div>
    ";
}
?>
