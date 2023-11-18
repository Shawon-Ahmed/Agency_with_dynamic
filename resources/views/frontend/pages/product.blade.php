@extends('frontend.layout.template')
@section('page-title')
<title>Product Page | Manufacturing Company</title>
@endsection
@section('body-content')
<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url({{asset('image/custom/'.$image57->image)}});">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-9 font-weight-bold">Products Page</h1>
                        <span class="sub-title">The perfect choice for your next project</span>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb breadcrumb-light d-block text-center">
                            <li><a href="{{route('homepage')}}">Home</a></li>
                            <li class="active"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    <div role="main" class="main shop py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="masonry-loader masonry-loader-showing">
                        <div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
                            <div class="col-sm-6 col-lg-4 product">
                                <a href="shop-product-sidebar-left.html">
                                    <span class="onsale">Hot!</span>
                                </a>
                                <span class="product-thumb-info border-0">
                                    <a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
                                        <span class="text-uppercase text-1">Add to Cart</span>
                                    </a>
                                    <a href="shop-product-sidebar-left.html">
                                        <span class="product-thumb-info-image">
                                            <img alt="" class="img-fluid" src="{{asset('frontend/img/products/product-grey-1.jpg')}}">
                                        </span>
                                    </a>
                                    <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                        <a href="shop-product-sidebar-left.html">
                                            <h4 class="text-4 text-primary">Product-1</h4>
                                            <span class="price">
                                                <del><span class="amount">$0</span></del>
                                                <ins><span class="amount text-dark font-weight-semibold">$0</span></ins>
                                            </span>
                                        </a>
                                    </span>
                                </span>
                            </div>
                            <div class="col-sm-6 col-lg-4 product">
                                <span class="product-thumb-info border-0">
                                    <a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
                                        <span class="text-uppercase text-1">Add to Cart</span>
                                    </a>
                                    <a href="shop-product-sidebar-left.html">
                                        <span class="product-thumb-info-image">
                                            <img alt="" class="img-fluid" src="{{asset('frontend/img/products/product-grey-2.jpg')}}">
                                        </span>
                                    </a>
                                    <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                        <a href="shop-product-sidebar-left.html">
                                            <h4 class="text-4 text-primary">Product-2</h4>
                                            <span class="price">
                                                <span class="amount text-dark font-weight-semibold">$0</span>
                                            </span>
                                        </a>
                                    </span>
                                </span>
                            </div>
                            <div class="col-sm-6 col-lg-4 product">
                                <span class="product-thumb-info border-0">
                                    <a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
                                        <span class="text-uppercase text-1">Add to Cart</span>
                                    </a>
                                    <a href="shop-product-sidebar-left.html">
                                        <span class="product-thumb-info-image">
                                            <img alt="" class="img-fluid" src="{{asset('frontend/img/products/product-grey-3.jpg')}}">
                                        </span>
                                    </a>
                                    <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                        <a href="shop-product-sidebar-left.html">
                                            <h4 class="text-4 text-primary">Product-3</h4>
                                            <span class="price">
                                                <span class="amount text-dark font-weight-semibold">$0</span>
                                            </span>
                                        </a>
                                    </span>
                                </span>
                            </div>
                            <div class="col-sm-6 col-lg-4 product">
                                <span class="product-thumb-info border-0">
                                    <a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
                                        <span class="text-uppercase text-1">Add to Cart</span>
                                    </a>
                                    <a href="shop-product-sidebar-left.html">
                                        <span class="product-thumb-info-image">
                                            <img alt="" class="img-fluid" src="{{asset('frontend/img/products/product-grey-4.jpg')}}">
                                        </span>
                                    </a>
                                    <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                        <a href="shop-product-sidebar-left.html">
                                            <h4 class="text-4 text-primary">Product-4</h4>
                                            <span class="price">
                                                <span class="amount text-dark font-weight-semibold">$0</span>
                                            </span>
                                        </a>
                                    </span>
                                </span>
                            </div>
                            <div class="col-sm-6 col-lg-4 product">
                                <span class="product-thumb-info border-0">
                                    <a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
                                        <span class="text-uppercase text-1">Add to Cart</span>
                                    </a>
                                    <a href="shop-product-sidebar-left.html">
                                        <span class="product-thumb-info-image">
                                            <img alt="" class="img-fluid" src="{{asset('frontend/img/products/product-grey-5.jpg')}}">
                                        </span>
                                    </a>
                                    <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                        <a href="shop-product-sidebar-left.html">
                                            <h4 class="text-4 text-primary">Product-5</h4>
                                            <span class="price">
                                                <span class="amount text-dark font-weight-semibold">$0</span>
                                            </span>
                                        </a>
                                    </span>
                                </span>
                            </div>
                            <div class="col-sm-6 col-lg-4 product">
                                <a href="shop-product-sidebar-left.html">
                                    <span class="onsale">Hot!</span>
                                </a>
                                <span class="product-thumb-info border-0">
                                    <a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
                                        <span class="text-uppercase text-1">Add to Cart</span>
                                    </a>
                                    <a href="shop-product-sidebar-left.html">
                                        <span class="product-thumb-info-image">
                                            <img alt="" class="img-fluid" src="{{asset('frontend/img/products/product-grey-6.jpg')}}">
                                        </span>
                                    </a>
                                    <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                        <a href="shop-product-sidebar-left.html">
                                            <h4 class="text-4 text-primary">Product-6</h4>
                                            <span class="price">
                                                <del><span class="amount">$0</span></del>
                                                <ins><span class="amount text-dark font-weight-semibold">$0</span></ins>
                                            </span>
                                        </a>
                                    </span>
                                </span>
                            </div>
                            <div class="col-sm-6 col-lg-4 product">
                                <span class="product-thumb-info border-0">
                                    <a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
                                        <span class="text-uppercase text-1">Add to Cart</span>
                                    </a>
                                    <a href="shop-product-sidebar-left.html">
                                        <span class="product-thumb-info-image">
                                            <img alt="" class="img-fluid" src="{{asset('frontend/img/products/product-grey-7.jpg')}}">
                                        </span>
                                    </a>
                                    <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                        <a href="shop-product-sidebar-left.html">
                                            <h4 class="text-4 text-primary">Product-7</h4>
                                            <span class="price">
                                                <span class="amount text-dark font-weight-semibold">$0</span>
                                            </span>
                                        </a>
                                    </span>
                                </span>
                            </div>
                            <div class="col-sm-6 col-lg-4 product">
                                <span class="product-thumb-info border-0">
                                    <a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
                                        <span class="text-uppercase text-1">Add to Cart</span>
                                    </a>
                                    <a href="shop-product-sidebar-left.html">
                                        <span class="product-thumb-info-image">
                                            <img alt="" class="img-fluid" src="{{asset('frontend/img/products/product-grey-8.jpg')}}">
                                        </span>
                                    </a>
                                    <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                        <a href="shop-product-sidebar-left.html">
                                            <h4 class="text-4 text-primary">Product-9</h4>
                                            <span class="price">
                                                <span class="amount text-dark font-weight-semibold">$0</span>
                                            </span>
                                        </a>
                                    </span>
                                </span>
                            </div>
                            <div class="col-sm-6 col-lg-4 product">
                                <a href="shop-product-sidebar-left.html">
                                    <span class="onsale">Hot!</span>
                                </a>
                                <span class="product-thumb-info border-0">
                                    <a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
                                        <span class="text-uppercase text-1">Add to Cart</span>
                                    </a>
                                    <a href="shop-product-sidebar-left.html">
                                        <span class="product-thumb-info-image">
                                            <img alt="" class="img-fluid" src="{{asset('frontend/img/products/product-grey-9.jpg')}}">
                                        </span>
                                    </a>
                                    <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                                        <a href="shop-product-sidebar-left.html">
                                            <h4 class="text-4 text-primary">Product-9</h4>
                                            <span class="price">
                                                <del><span class="amount">$0</span></del>
                                                <ins><span class="amount text-dark font-weight-semibold">$0</span></ins>
                                            </span>
                                        </a>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <ul class="pagination float-right">
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection