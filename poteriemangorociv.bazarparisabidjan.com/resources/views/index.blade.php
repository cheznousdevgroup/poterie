@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <!-- Hero Section Begin -->
    @include('partials.indexhero')
    <!-- Hero Section End -->

    <!-- Section Catégories Début -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach($categories as $category)
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('img/' . $category->image) }}">
                            <h5><a href="#">{{ $category->name }}</a></h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Section Catégories Fin -->

<!-- Section Produits Mis en Avant Début -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Produit Mis en Avant</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">Categories</li>
                        <li><a href="#">Sacs</a></li>
                        <li><a href="#">Chaussettes</a></li>
                        <li><a href="#">Chaussures</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            @foreach($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/' . $product->image) }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">{{ $product->name }}</a></h6>
                            <h5>{{ number_format($product->price, 2, ',', ' ') }} FCFA</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Section Produits Mis en Avant Fin -->


    <!-- Début de la bannière -->
    <div class="bannière">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="bannière__image">
                        <img src="{{ asset('img/bannière/bannière-1.jpg') }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="bannière__image">
                        <img src="{{ asset('img/bannière/bannière-2.jpg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la bannière -->
@endsection
