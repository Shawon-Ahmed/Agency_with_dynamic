@extends('frontend.layout.template')
@section('page-title')
<title>About US Page | Manufacturing Company</title>
@endsection
@section('body-content')
    <div role="main" class="main">
        <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url({{asset('image/custom/'.$image42->image)}});">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-9 font-weight-bold">About Us</h1>
                        <span class="sub-title">{{$Fcontent49->content1}}</span>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb breadcrumb-light d-block text-center">
                            <li><a href="{{route('homepage')}}">Home</a></li>
                            <li class="active">Pages</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row pt-5">
                <div class="col">

                    <div class="row text-center pb-5">
                        <div class="col-md-9 mx-md-auto">
                            <div class="overflow-hidden mb-3">
                                <h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
                                    <span>{{$Fcontent49->content2}}</span>
                                    <span class="word-rotator-words bg-primary">
                                        <b class="is-visible">{{$Fcontent50->content1}}</b>
                                        <b>{{$Fcontent50->content1}}</b>
                                        <b>{{$Fcontent50->content1}}</b>
                                    </span>
                                    <span> {{$Fcontent50->content3}}</span>
                                </h1>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
                                {{$Fcontent51->content1}}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3 mb-5">
                        <div class="col-md-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
                            <h3 class="font-weight-bold text-4 mb-2">{{$Fcontent52->content1}}</h3>
                            <p>{{$Fcontent52->content2}}</p>
                        </div>
                        <div class="col-md-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                            <h3 class="font-weight-bold text-4 mb-2">{{$Fcontent53->content1}}</h3>
                            <p>{{$Fcontent53->content2}}</p>
                        </div>
                        <div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                            <h3 class="font-weight-bold text-4 mb-2">{{$Fcontent54->content1}}</h3>
                            <p>{{$Fcontent54->content2}}</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <section class="section section-primary border-0 mb-0 appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': -150}">
            <div class="container">
                <div class="row counters counters-sm pb-4 pt-3">
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <i class="icons icon-user text-color-light"></i>
                            <strong class="text-color-light font-weight-extra-bold" data-to="{{$Fcontent16->content1}}" data-append="+">0</strong>
                            <label class="text-4 mt-1 text-color-light">{{$Fcontent16->content2}}</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <i class="icons icon-badge text-color-light"></i>
                            <strong class="text-color-light font-weight-extra-bold" data-to="{{$Fcontent17->content1}}">0</strong>
                            <label class="text-4 mt-1 text-color-light">{{$Fcontent17->content2}}</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                        <div class="counter">
                            <i class="icons icon-cup text-color-light"></i>
                            <strong class="text-color-light font-weight-extra-bold" data-to="{{$Fcontent18->content1}}">0</strong>
                            <label class="text-4 mt-1 text-color-light">{{$Fcontent18->content2}}</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter">
                            <i class="icons icon-graph text-color-light"></i>
                            <strong class="text-color-light font-weight-extra-bold" data-to="{{$Fcontent19->content1}}">0</strong>
                            <label class="text-4 mt-1 text-color-light">{{$Fcontent19->content2}}</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
                        <h2 class="text-color-dark font-weight-normal text-6 mb-2">
                            {{$Fcontent27->content1}}</h2>
                        <p class="lead">{{$Fcontent27->content2}} </p>
                        <p class="pr-5 mr-5">{{$Fcontent27->content3}}</p>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 mt-sm-5" style="top: 1.7rem;">
                        <img src="{{asset('image/custom/'.$image45->image)}}" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%;" alt="" />
                        <img src="{{asset('image/custom/'.$image43->image)}}" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="" />
                        <img src="{{asset('image/custom/'.$image44->image)}}" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
                    </div>
                </div>
            </div>
        </section>

        <div class="container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="row pt-5 pb-4 my-5">
                <div class="col-md-6 order-2 order-md-1 text-center text-md-left">
                    <div class="owl-carousel owl-theme nav-style-1 nav-center-images-only stage-margin mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
                        <div>
                            <img class="img-fluid rounded-0 mb-4" src="{{asset('image/custom/'.$image46->image)}}" alt="" />
                            <h3 class="font-weight-bold text-color-dark text-4 mb-0">{{$Fcontent55->content1}}</h3>
                            <p class="text-2 mb-0">{{$Fcontent55->content2}}</p>
                        </div>
                        <div>
                            <img class="img-fluid rounded-0 mb-4" src="{{asset('image/custom/'.$image47->image)}}" alt="" />
                            <h3 class="font-weight-bold text-color-dark text-4 mb-0">{{$Fcontent56->content1}}</h3>
                            <p class="text-2 mb-0">{{$Fcontent56->content2}}</p>
                        </div>
                        <div>
                            <img class="img-fluid rounded-0 mb-4" src="{{asset('image/custom/'.$image48->image)}}" alt="" />
                            <h3 class="font-weight-bold text-color-dark text-4 mb-0">{{$Fcontent57->content1}}</h3>
                            <p class="text-2 mb-0">{{$Fcontent57->content2}}</p>
                        </div>
                        <div>
                            <img class="img-fluid rounded-0 mb-4" src="{{asset('image/custom/'.$image49->image)}}" alt="" />
                            <h3 class="font-weight-bold text-color-dark text-4 mb-0">{{$Fcontent58->content1}}</h3>
                            <p class="text-2 mb-0">{{$Fcontent58->content2}}</p>
                        </div>
                        <div>
                            <img class="img-fluid rounded-0 mb-4" src="{{asset('image/custom/'.$image50->image)}}" alt="" />
                            <h3 class="font-weight-bold text-color-dark text-4 mb-0">{{$Fcontent59->content1}}</h3>
                            <p class="text-2 mb-0">{{$Fcontent59->content2}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2 text-center text-md-left mb-5 mb-md-0">
                    <h2 class="text-color-dark font-weight-normal text-6 mb-2 pb-1">{{$Fcontent60->content1}}</h2>
                    <p class="lead">{{$Fcontent60->content2}}</p>
                    <p class="mb-4">{{$Fcontent60->content3}}</p>
                </div>
            </div>
        </div>

        <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
            <div class="container pb-2">
                <div class="row">
                    <div class="col-lg-6 text-center text-md-left mb-5 mb-lg-0">
                        <h2 class="text-color-dark font-weight-normal text-6 mb-2">{{$Fcontent61->content1}}</h2>
                        <p class="lead">{{$Fcontent61->content2}}</p>
                        <div class="row justify-content-center my-5">
                            <div class="col-8 text-center col-md-4">
                                <img src="{{asset('image/custom/'.$image51->image)}}" class="img-fluid hover-effect-3" alt="" />
                            </div>
                            <div class="col-8 text-center col-md-4 my-3 my-md-0">
                                <img src="{{asset('image/custom/'.$image52->image)}}" class="img-fluid hover-effect-3" alt="" />
                            </div>
                            <div class="col-8 text-center col-md-4">
                                <img src="{{asset('image/custom/'.$image53->image)}}" class="img-fluid hover-effect-3" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="owl-carousel owl-theme nav-style-1 stage-margin" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': false, 'dots': false, 'stagePadding': 40, 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
                            <div>
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote pl-md-4 mb-0">
                                    <div class="testimonial-author">
                                        <img src="{{asset('image/custom/'.$image54->image)}}" class="img-fluid rounded-circle mb-0" alt="">
                                    </div>
                                    <blockquote>
                                        <p class="text-color-dark text-4 line-height-5 mb-0">{{$Fcontent62->content1}}</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="font-weight-extra-bold text-2">{{$Fcontent62->content2}}</strong><span>{{$Fcontent62->content3}}</span></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote pl-md-4 mb-0">
                                    <div class="testimonial-author">
                                        <img src="{{asset('image/custom/'.$image55->image)}}" class="img-fluid rounded-circle mb-0" alt="">
                                    </div>
                                    <blockquote>
                                        <p class="text-color-dark text-4 line-height-5 mb-0">{{$Fcontent63->content1}}</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="font-weight-extra-bold text-2">{{$Fcontent63->content2}}</strong><span>{{$Fcontent63->content3}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection