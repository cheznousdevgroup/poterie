@extends('layouts.app')

@section('title', 'Accueil')

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
                        <h2>Panier</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ url('/') }}">Accueil</a>
                            <span>Panier</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Produits</th>
                                    <th>Prix</th>
                                    <th>Quantité</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{ asset('img/cart/8.jpg') }}" alt="" />
                                        <h5>Air Force</h5>
                                    </td>
                                    <td class="shoping__cart__price">55 000.00 FCFA</td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1" />
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">55 000.00 FCFA</td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">CONTINUER MON SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span> Mettre à jour</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Panier Total</h5>
                        <ul>
                            <li>Subtotal <span>55 000.00 FCFA</span></li>
                            <li>Total <span>55 000.00 FCFA</span></li>
                        </ul>
                        <a href="#" class="primary-btn">PROCEDER AU PAIEMENT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

@endsection