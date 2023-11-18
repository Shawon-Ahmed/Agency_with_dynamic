@extends('frontend.layout.template')
@section('page-title')
<title>FAQ Page | Manufacturing Company</title>
@endsection
@section('body-content')
<div role="main" class="main">
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url({{asset('image/custom/'.$image56->image)}});">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold">FAQ</h1>
                    <span class="sub-title">{{$Fcontent64->content1}}</span>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="#">Home</a></li>
                        <li class="active">FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">

        <div class="row">
            <div class="col">

                <h2 class="font-weight-normal text-7 mb-2">{{$Fcontent64->content2}}</h2>
                <p class="lead">{{$Fcontent64->content3}}</p>

                <hr class="solid my-5">

                <div class="toggle toggle-primary" data-plugin-toggle>
                    <section class="toggle active">
                        <a class="toggle-title">{{$Fcontent65->content1}}</a>
                        <div class="toggle-content">
                            <p>{{$Fcontent65->content2}}</p>
                        </div>
                    </section>

                    <section class="toggle">
                        <a class="toggle-title">{{$Fcontent66->content1}}</a>
                        <div class="toggle-content">
                            <p>{{$Fcontent66->content2}}</p>
                        </div>
                    </section>

                    <section class="toggle">
                        <a class="toggle-title">{{$Fcontent67->content1}}</a>
                        <div class="toggle-content">
                            <p>{{$Fcontent67->content2}}</p>
                        </div>
                    </section>

                    <section class="toggle">
                        <a class="toggle-title">{{$Fcontent68->content1}}</a>
                        <div class="toggle-content">
                            <p>{{$Fcontent68->content2}}</p>
                        </div>
                    </section>

                    <section class="toggle">
                        <a class="toggle-title">{{$Fcontent69->content1}}</a>
                        <div class="toggle-content">
                            <p>{{$Fcontent69->content2}}</p>
                        </div>
                    </section>

                    <section class="toggle">
                        <a class="toggle-title">{{$Fcontent70->content1}}</a>
                        <div class="toggle-content">
                            <p>{{$Fcontent70->content2}}</p>
                        </div>
                    </section>

                    <section class="toggle">
                        <a class="toggle-title">{{$Fcontent71->content1}}</a>
                        <div class="toggle-content">
                            <p>{{$Fcontent71->content2}}</p>
                        </div>
                    </section>

                    <section class="toggle">
                        <a class="toggle-title">{{$Fcontent72->content1}}</a>
                        <div class="toggle-content">
                            <p>{{$Fcontent72->content2}}</p>
                        </div>
                    </section>

                    <section class="toggle">
                        <a class="toggle-title">{{$Fcontent73->content1}}</a>
                        <div class="toggle-content">
                            <p>{{$Fcontent73->content2}}</p>
                        </div>
                    </section>
                </div>

            </div>

        </div>

    </div>

</div>
@endsection