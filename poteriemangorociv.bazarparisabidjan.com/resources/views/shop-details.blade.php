@extends('layouts.app')

@section('title', 'Détails de la boutique')

@section('content')

    <!-- Hero Section Begin -->
    @include('partials.hero')
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/hero/banner1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Chips shop</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ url('/') }}">Accueil</a>
                            <span>Magasin</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large" src="{{ asset('img/product/details/1.jpg') }}" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="{{ asset('img/product/details/2.jpg') }}" src="{{ asset('img/product/details/thumb-1.jpg') }}" alt="">
                            <img data-imgbigurl="{{ asset('img/product/details/3.jpg') }}" src="{{ asset('img/product/details/thumb-2.jpg') }}" alt="">
                            <img data-imgbigurl="{{ asset('img/product/details/5.jpg') }}" src="{{ asset('img/product/details/thumb-3.jpg') }}" alt="">
                            <img data-imgbigurl="{{ asset('img/product/details/4.jpg') }}" src="{{ asset('img/product/details/thumb-4.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>Air Force</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 avis)</span>
                        </div>
                        <div class="product__details__price">25 000,00 FCFA</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet harum reiciendis accusamus culpa iure, enim repellat laboriosam esse incidunt. Harum ab voluptatem minus maiores ratione consequatur ipsum repellendus sit dignissimos.</p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">AJOUTER AU PANIER</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Disponibilité</b> <span>En Stock</span></li>
                            <li><b>Livraison</b> <span>Livraison en 1 jour. <samp>Retrait gratuit aujourd'hui</samp></span></li>
                            <li><b>Poids</b> <span>0,5 kg</span></li>
                            <li><b>Partager sur</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab" aria-selected="false">Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab" aria-selected="false">Avis <span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Informations sur les Produits</h6>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed repudiandae perferendis libero cum repellat quos impedit dolores accusantium labore, ex necessitatibus pariatur et ipsam doloribus debitis. Praesentium veniam officiis porro.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Informations sur les Produits</h6>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque ut molestias numquam minima vero, voluptatum assumenda quisquam libero provident harum, tenetur voluptatibus. Necessitatibus doloremque, unde rerum reiciendis voluptate facere consequatur.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Informations sur les Produits</h6>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos, vero autem sint eius quibusdam modi voluptatum veritatis! Hic, iste repudiandae dolor ex commodi iure cupiditate, quaerat laboriosam nihil id nesciunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->
@endsection
