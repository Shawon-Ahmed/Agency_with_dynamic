@extends('frontend.layout.template')
@section('page-title')
<title>Homepage | Manufacturing Company</title>
@endsection
@section('body-content')
    <div role="main" class="main">
        <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 700, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }}">
                <ul>
                    <li class="slide-overlay" data-transition="fade">
                        <img src="{{asset('image/custom/'.$image->image)}}"   
                            alt=""
                            data-bgposition="center center" 
                            data-bgfit="cover" 
                            data-bgrepeat="no-repeat" 
                            class="rev-slidebg">
                        
                        <div class="tp-caption"
                            data-x="center" data-hoffset="['-165','-165','-165','-215']"
                            data-y="center" data-voffset="['-110','-110','-110','-135']"
                            data-start="1000"
                            data-transform_in="x:[-300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="{{asset('frontend/img/slides/slide-title-border.png')}}" alt=""></div>

                        <div class="tp-caption text-color-light font-weight-normal"
                            data-x="center"
                            data-y="center" data-voffset="['-110','-110','-110','-135']"
                            data-start="700"
                            data-fontsize="['22','22','22','40']"
                            data-lineheight="['25','25','25','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;">{{$Fcontent->content1}}</div>

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['165','165','165','215']"
                            data-y="center" data-voffset="['-110','-110','-110','-135']"
                            data-start="1000"
                            data-transform_in="x:[300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="{{asset('frontend/img/slides/slide-title-border.png')}}" alt=""></div>

                        <h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center"
                            data-y="center" data-voffset="['-60','-60','-60','-85']"
                            data-fontsize="['50','50','50','90']"
                            data-lineheight="['55','55','55','95']">{{$Fcontent->content2}}</h1>

                        <div class="tp-caption font-weight-light text-center"
                            data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            data-x="center"
                            data-y="center" data-voffset="['-10','-10','-10','-25']"
                            data-fontsize="['18','18','18','50']"
                            data-lineheight="['29','29','29','40']"
                            style="color: #b5b5b5;">{{$Fcontent->content3}}</div>

                        <a class="tp-caption btn btn-light font-weight-bold text-color-primary"
                            href="{{route('about')}}"
                            data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center" data-hoffset="['-120','-120','-120','-195']"
                            data-y="center" data-voffset="['65','65','65','210']"
                            data-paddingtop="['15','15','15','30']"
                            data-paddingbottom="['15','15','15','30']"
                            data-paddingleft="['33','33','33','50']"
                            data-paddingright="['33','33','33','50']"
                            data-fontsize="['13','13','13','25']"
                            data-lineheight="['20','20','20','25']">LEARN MORE</a>

                        <a class="tp-caption btn btn-primary font-weight-bold"
                            href="{{route('contact')}}"
                            data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center" data-hoffset="['90','90','90','165']"
                            data-y="center" data-voffset="['65','65','65','210']"
                            data-paddingtop="['15','15','15','30']"
                            data-paddingbottom="['15','15','15','30']"
                            data-paddingleft="['33','33','33','50']"
                            data-paddingright="['33','33','33','50']"
                            data-fontsize="['13','13','13','25']"
                            data-lineheight="['20','20','20','25']">CONTACT US<i class="fas fa-arrow-right ml-1"></i></a>
                        
                    </li>
                    <li class="slide-overlay" data-transition="fade">
                        <img src="{{asset('image/custom/'.$image1->image)}}"  
                            alt=""
                            data-bgposition="center center" 
                            data-bgfit="cover" 
                            data-bgrepeat="no-repeat" 
                            class="rev-slidebg">
                        
                        <div class="tp-caption"
                            data-x="center" data-hoffset="['-115','-115','-115','-185']"
                            data-y="center" data-voffset="['-110','-110','-110','-135']"
                            data-start="1000"
                            data-transform_in="x:[-300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="{{asset('frontend/img/slides/slide-title-border.png')}}" alt=""></div>

                        <div class="tp-caption text-color-light font-weight-normal"
                            data-x="center"
                            data-y="center" data-voffset="['-110','-110','-110','-135']"
                            data-start="700"
                            data-fontsize="['22','22','22','40']"
                            data-lineheight="['25','25','25','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;">{{$Fcontent2->content1}}</div>

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['115','115','115','185']"
                            data-y="center" data-voffset="['-110','-110','-110','-135']"
                            data-start="1000"
                            data-transform_in="x:[300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="{{asset('frontend/img/slides/slide-title-border.png')}}" alt=""></div>

                        <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center"
                            data-y="center" data-voffset="['-60','-60','-60','-85']"
                            data-fontsize="['50','50','50','90']"
                            data-lineheight="['55','55','55','95']">{{$Fcontent2->content2}}</div>

                        <div class="tp-caption font-weight-light text-center"
                            data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            data-x="center"
                            data-y="center" data-voffset="['-10','-10','-10','-25']"
                            data-fontsize="['18','18','18','50']"
                            data-lineheight="['29','29','29','40']"
                            style="color: #b5b5b5;">{{$Fcontent2->content3}}</div>

                        <a class="tp-caption btn btn-primary font-weight-bold"
                            href="{{route('contact')}}"
                            data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center"
                            data-y="center" data-voffset="['65','65','65','210']"
                            data-paddingtop="['15','15','15','30']"
                            data-paddingbottom="['15','15','15','30']"
                            data-paddingleft="['33','33','33','50']"
                            data-paddingright="['33','33','33','50']"
                            data-fontsize="['13','13','13','25']"
                            data-lineheight="['20','20','20','25']">CONTACT NOW <i class="fas fa-arrow-right ml-1"></i></a>
                        
                    </li>
                </ul>
            </div>
        </div>
        <!-- services section -->
        <div class="container">
            <div class="row">
                <div class="col">
                <div class="col text-center appear-animation pt-5" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <h2 class="font-weight-bold text-color-dark mb-2">{{$Fcontent3->content1}}</h2>
                <p class="text-color-dark opacity-7">{{$Fcontent3->content2}}</p>
                </div>                    
                    <div class="my-4 lightbox appear-animation" data-appear-animation="fadeInUpShorter" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                        <div class="owl-carousel owl-theme pb-3" data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}">
            

                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="{{asset('image/custom/'.$image17->image)}}" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">{{$Fcontent4->content1}}</span>
                                            <span class="thumb-info-type">{{$Fcontent4->content2}}</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <a href="{{asset('image/custom/'.$image17->image)}}" class="lightbox-portfolio">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </div>

                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="{{asset('image/custom/'.$image18->image)}}"class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">{{$Fcontent5->content1}}</span>
                                            <span class="thumb-info-type">{{$Fcontent5->content2}}</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <a href="{{asset('image/custom/'.$image18->image)}}" class="lightbox-portfolio">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </div>

                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="{{asset('image/custom/'.$image19->image)}}" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">{{$Fcontent6->content1}}</span>
                                            <span class="thumb-info-type">{{$Fcontent6->content2}}</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <a href="{{asset('image/custom/'.$image19->image)}}" class="lightbox-portfolio">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </div>

                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="{{asset('image/custom/'.$image20->image)}}" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">{{$Fcontent7->content1}}</span>
                                            <span class="thumb-info-type">{{$Fcontent7->content2}}</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <a href="{{asset('image/custom/'.$image20->image)}}" class="lightbox-portfolio">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </div>

                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="{{asset('image/custom/'.$image22->image)}}" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">{{$Fcontent8->content1}}</span>
                                            <span class="thumb-info-type">{{$Fcontent8->content2}}</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <a href="{{asset('image/custom/'.$image22->image)}}" class="lightbox-portfolio">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </div>

                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="{{asset('image/custom/'.$image23->image)}}" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">{{$Fcontent9->content1}}</span>
                                            <span class="thumb-info-type">{{$Fcontent9->content2}}</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <a href="{{asset('image/custom/'.$image23->image)}}" class="lightbox-portfolio">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </div>

                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="{{asset('image/custom/'.$image24->image)}}" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">{{$Fcontent10->content1}}</span>
                                            <span class="thumb-info-type">{{$Fcontent10->content2}}</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <a href="{{asset('image/custom/'.$image24->image)}}" class="lightbox-portfolio">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </div>

                            <div class="portfolio-item">
                                <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="{{asset('image/custom/'.$image25->image)}}" class="img-fluid border-radius-0" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">{{$Fcontent11->content1}}</span>
                                            <span class="thumb-info-type">{{$Fcontent11->content2}}</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <a href="portfolio-single-wide-slider.html">
                                            <a href="{{asset('image/custom/'.$image25->image)}}" class="lightbox-portfolio">
                                                <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                            </a>
                                        </span>
                                    </span>
                                </span>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <hr class="solid my-5">		
            </div>
        </div>
        <!-- progress bar -->
        <div class="container">
            <div class="row">
                <div class="col">                   
                <div class="row counters">
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="counter counter-primary appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="300">
                        <i class="fas fa-user"></i>
                        <strong data-to="{{$Fcontent16->content1}}" data-append="+"></strong>
                        <label>{{$Fcontent16->content2}}</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="counter counter-primary appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="600">
                        <i class="fas fa-star"></i>
                        <strong data-to="{{$Fcontent17->content1}}"></strong>
                        <label>{{$Fcontent17->content2}}</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                    <div class="counter counter-primary appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="900">
                        <i class="fas fa-coffee"></i>
                        <strong data-to="{{$Fcontent18->content1}}"></strong>
                        <label>{{$Fcontent19->content2}}</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter counter-primary appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="1200">
                        <i class="far fa-chart-bar"></i>
                        <strong data-to="{{$Fcontent19->content1}}">0</strong>
                        <label>{{$Fcontent19->content2}}</label>
                    </div>
                </div>
            </div>
                </div>
                <hr class="solid my-5">		
            </div>
        </div>
        <!-- Why Chose Us -->
        <div class="container pt-5 py-3">
            <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <h2 class="font-weight-bold text-color-dark mb-2">{{$Fcontent20->content1}}</h2>
                <p class="text-color-dark opacity-7">{{$Fcontent20->content2}}</p>
            </div>
            <div class="row pt-4 mt-5">
                <div class="col">
                    <div class="row pt-2 clearfix">
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter">
                                <div class="feature-box-icon">
                                    <i class="icon-user-following icons text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2">{{$Fcontent21->content1}}</h4>
                                    <p class="mb-4">{{$Fcontent21->content2}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter">
                                <div class="feature-box-icon">
                                    <i class="icon-layers icons text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2">{{$Fcontent22->content1}}</h4>
                                    <p class="mb-4">{{$Fcontent22->content2}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                                <div class="feature-box-icon">
                                    <i class="icon-calculator icons text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2">{{$Fcontent23->content1}}</h4>
                                    <p class="mb-4">{{$Fcontent23->content2}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                                <div class="feature-box-icon">
                                    <i class="icon-star icons text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2">{{$Fcontent24->content1}}</h4>
                                    <p class="mb-4">{{$Fcontent24->content2}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                                <div class="feature-box-icon">
                                    <i class="icon-drop icons text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2">{{$Fcontent25->content1}}</h4>
                                    <p class="mb-4">{{$Fcontent25->content2}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                                <div class="feature-box-icon">
                                    <i class="icon-mouse icons text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2">{{$Fcontent26->content1}}</h4>
                                    <p class="mb-4">{{$Fcontent26->content2}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-5 mb-5 mt-3">
                <div class="col text-center">
                    <a href="{{route('about')}}" class="btn btn-primary btn-px-5 py-3 font-weight-semibold text-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">LEARN MORE</a>
                </div>
            </div>
        </div>
        <!-- Who we are -->
        <section class="section section-secondary border-0 py-0 m-0 appear-animation" data-appear-animation="fadeIn">
            <div class="container">
                <div class="row align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                    <div class="col-lg-5 order-2 order-lg-1 pt-4 pt-lg-0 pb-5 pb-lg-0 mt-5 mt-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                        <h2 class="font-weight-bold text-color-light text-7 mb-2">{{$Fcontent27->content1}}</h2>
                        <p class="lead font-weight-light text-color-light text-4">{{$Fcontent27->content2}}</p>
                        <p class="font-weight-light text-color-light text-2 mb-4 opacity-7">{{$Fcontent27->content3}}</p>
                        <a href="{{route('about')}}" class="btn btn-dark-scale-2 btn-px-5 btn-py-2 text-2">LEARN MORE</a>
                    </div>
                    <div class="col-9 offset-lg-1 col-lg-5 order-1 order-lg-2 scale-2">
                        <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{asset('image/custom/'.$image21->image)}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- Project -->
        <div id="projects" class="container">
            <div class="row justify-content-center pt-5 mt-5">
                <div class="col-lg-9 text-center">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter">
                        <h2 class="font-weight-bold mb-2">{{$Fcontent28->content1}}</h2>
                        <p class="mb-4">{{$Fcontent28->content2}}</p>
                    </div>
                    <p class="pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">{{$Fcontent28->content3}}</p>
                </div>
            </div>
            <div class="row pb-5 mb-5">
                <div class="col">
                    
                    <div class="appear-animation popup-gallery-ajax" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <div class="owl-carousel owl-theme mb-0" data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}">
        

                            <div class="portfolio-item">
                                <a href="ajax/portfolio-ajax-project.html" data-ajax-on-modal>
                                    <span class="thumb-info thumb-info-lighten">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{asset('image/custom/'.$image26->image)}}" class="img-fluid border-radius-0" alt="">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">{{$Fcontent29->content1}}</span>
                                                <span class="thumb-info-type">{{$Fcontent29->content2}}</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>

                            <div class="portfolio-item">
                                <a href="ajax/portfolio-ajax-project-1.html" data-ajax-on-modal>
                                    <span class="thumb-info thumb-info-lighten">
                                        <span class="thumb-info-wrapper">
                                            <span class="owl-carousel owl-theme dots-inside m-0" data-plugin-options="{'items': 1, 'margin': 20, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}"><span><img src="{{asset('image/custom/'.$image27->image)}}" class="img-fluid border-radius-0" alt=""></span><span><img src="{{asset('image/custom/'.$image28->image)}}" class="img-fluid border-radius-0" alt=""></span></span>
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">{{$Fcontent30->content1}}</span>
                                                <span class="thumb-info-type">{{$Fcontent30->content2}}</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>

                            <div class="portfolio-item">
                                <a href="ajax/portfolio-ajax-project-2.html" data-ajax-on-modal>
                                    <span class="thumb-info thumb-info-lighten">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{asset('image/custom/'.$image29->image)}}" class="img-fluid border-radius-0" alt="">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">{{$Fcontent31->content1}}</span>
                                                <span class="thumb-info-type">{{$Fcontent31->content2}}</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>

                            <div class="portfolio-item">
                                <a href="ajax/portfolio-ajax-project-3.html" data-ajax-on-modal>
                                    <span class="thumb-info thumb-info-lighten">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{asset('image/custom/'.$image30->image)}}" class="img-fluid border-radius-0" alt="">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">{{$Fcontent32->content1}}</span>
                                                <span class="thumb-info-type">{{$Fcontent32->content2}}</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>

                            <div class="portfolio-item">
                                <a href="ajax/portfolio-ajax-project-4.html" data-ajax-on-modal>
                                    <span class="thumb-info thumb-info-lighten">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{asset('image/custom/'.$image31->image)}}"
                                                class="img-fluid border-radius-0')}}" alt="">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">{{$Fcontent33->content1}}</span>
                                                <span class="thumb-info-type">{{$Fcontent33->content2}}</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>

                            <div class="portfolio-item">
                                <a href="ajax/portfolio-ajax-project-5.html" data-ajax-on-modal>
                                    <span class="thumb-info thumb-info-lighten">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{asset('image/custom/'.$image32->image)}}" class="img-fluid border-radius-0" alt="">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">{{$Fcontent34->content1}}</span>
                                                <span class="thumb-info-type">{{$Fcontent34->content2}}</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>

                            <div class="portfolio-item">
                                <a href="ajax/portfolio-ajax-project-6.html" data-ajax-on-modal>
                                    <span class="thumb-info thumb-info-lighten">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{asset('image/custom/'.$image33->image)}}" class="img-fluid border-radius-0" alt="">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">{{$Fcontent35->content1}}</span>
                                                <span class="thumb-info-type">{{$Fcontent35->content2}}</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="portfolio-item">
                                <a href="" data-ajax-on-modal>
                                    <span class="thumb-info thumb-info-lighten">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{asset('image/custom/'.$image34->image)}}" class="img-fluid border-radius-0" alt="">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">{{$Fcontent36->content1}}</span>
                                                <span class="thumb-info-type">{{$Fcontent36->content2}}</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
        
                        </div>
                    </div>
        
                </div>
            </div>
        </div>

        <section class="section section-height-4 bg-color-grey-scale-1 border-0 m-0 pb-5">
            <div class="container">
                <div class="row justify-content-center my-4">
                    <div class="col appear-animation" data-appear-animation="fadeInUpShorter">
                        <div class="owl-carousel owl-theme nav-bottom rounded-nav" data-plugin-options="{'items': 1, 'loop': true, 'autoHeight': true}">
                            <div>
                                <div class="col">
                                    <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark mb-0">
                                        <div class="testimonial-author">
                                            <img src="{{asset('image/custom/'.$image35->image)}}" class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <blockquote>
                                            <p class="text-color-dark text-5 line-height-5">{{$Fcontent37->content1}}</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p class="opacity-10"><strong class="font-weight-extra-bold text-2">{{$Fcontent37->content2}}</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="col">
                                    <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark mb-0">
                                        <div class="testimonial-author">
                                            <img src="{{asset('image/custom/'.$image36->image)}}" class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <blockquote>
                                            <p class="text-color-dark text-5 line-height-5">{{$Fcontent38->content1}}</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p class="opacity-10"><strong class="font-weight-extra-bold text-2">{{$Fcontent38->content2}}</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="col">
                                    <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark mb-0">
                                        <div class="testimonial-author">
                                            <img src="{{asset('image/custom/'.$image37->image)}}" class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <blockquote>
                                            <p class="text-color-dark text-5 line-height-5">{{$Fcontent39->content1}}</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p class="opacity-10"><strong class="font-weight-extra-bold text-2">{{$Fcontent39->content2}}</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="team" class="container pb-4">
            <div class="row pt-5 mt-5 mb-4">
                <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter">
                    <h2 class="font-weight-bold mb-1">{{$Fcontent40->content1}}</h2>
                    <p>{{$Fcontent40->content2}}</p>
                </div>
            </div>
            <div class="row pb-5 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
                        <span class="thumb-info-wrapper">
                            <a href="about-me.html">
                                <img src="{{asset('image/custom/'.$image38->image)}}" class="img-fluid" alt="">
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <h3 class="font-weight-extra-bold text-color-dark text-4 line-height-1 mt-3 mb-0">{{$Fcontent41->content1}}</h3>
                            <span class="text-2 mb-0">{{$Fcontent41->content2}}</span>
                            <span class="thumb-info-caption-text pt-1">{{$Fcontent41->content3}}</span>
                            <span class="thumb-info-social-icons">
                                <a target="_blank" href="{{$Fcontent42->content1}}"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                <a href="{{$Fcontent42->content2}}"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                                <a href="{{$Fcontent42->content3}}"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </span>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
                        <span class="thumb-info-wrapper">
                            <a href="about-me.html">
                                <img src="{{asset('image/custom/'.$image39->image)}}" class="img-fluid" alt="">
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <h3 class="font-weight-extra-bold text-color-dark text-4 line-height-1 mt-3 mb-0">{{$Fcontent43->content1}}</h3>
                            <span class="text-2 mb-0">{{$Fcontent43->content2}}</span>
                            <span class="thumb-info-caption-text pt-1">{{$Fcontent43->content3}}</span>
                            <span class="thumb-info-social-icons">
                                <a target="_blank" href="{{$Fcontent44->content1}}"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                <a href="{{$Fcontent44->content2}}"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                                <a href="{{$Fcontent43->content3}}"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </span>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                    <span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
                        <span class="thumb-info-wrapper">
                            <a href="about-me.html">
                                <img src="{{asset('image/custom/'.$image40->image)}}" class="img-fluid" alt="">
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <h3 class="font-weight-extra-bold text-color-dark text-4 line-height-1 mt-3 mb-0">{{$Fcontent45->content1}}</h3>
                            <span class="text-2 mb-0">{{$Fcontent45->content2}}</span>
                            <span class="thumb-info-caption-text pt-1">{{$Fcontent45->content3}}</span>
                            <span class="thumb-info-social-icons">
                                <a target="_blank" href="{{$Fcontent46->content1}}"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                <a href="{{$Fcontent46->content2}}"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                                <a href="{{$Fcontent46->content3}}"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </span>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
                        <span class="thumb-info-wrapper">
                            <a href="about-me.html">
                                <img src="{{asset('image/custom/'.$image41->image)}}" class="img-fluid" alt="">
                            </a>
                        </span>
                        <span class="thumb-info-caption">
                            <h3 class="font-weight-extra-bold text-color-dark text-4 line-height-1 mt-3 mb-0">{{$Fcontent47->content1}}</h3>
                            <span class="text-2 mb-0">{{$Fcontent47->content2}}</span>
                            <span class="thumb-info-caption-text pt-1">{{$Fcontent47->content3}}</span>
                            <span class="thumb-info-social-icons">
                                <a target="_blank" href="{{$Fcontent48->content1}}"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                                <a href="{{$Fcontent48->content2}}"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                                <a href="{{$Fcontent48->content3}}"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
                            </span>
                        </span>
                    </span>
                </div>
            </div>
        </div>


    </div>
@endsection