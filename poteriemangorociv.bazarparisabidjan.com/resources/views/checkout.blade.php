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
                        <h2>Paiement</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ url('/') }}">Accueil</a>
                            <span>Paiement</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Détails de facturation</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Prénom<span>*</span></p>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Nom de famille<span>*</span></p>
                                        <input type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Pays<span>*</span></p>
                                <input type="text" />
                            </div>
                            <div class="checkout__input">
                                <p>Adresse<span>*</span></p>
                                <input type="text" placeholder="Adresse postale" class="checkout__input__add" />
                                <input type="text" placeholder="Appartement, suite, unité, etc. (optionnel)" />
                            </div>
                            <div class="checkout__input">
                                <p>Ville<span>*</span></p>
                                <input type="text" />
                            </div>
                            <div class="checkout__input">
                                <p>Pays/État<span>*</span></p>
                                <input type="text" />
                            </div>
                            <div class="checkout__input">
                                <p>Code postal<span>*</span></p>
                                <input type="text" />
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Téléphone<span>*</span></p>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    Créer un compte?
                                    <input type="checkbox" id="acc" />
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <p>
                                Créez un compte en entrant les informations ci-dessous. Si vous êtes un client existant, veuillez vous connecter en haut de la page.
                            </p>
                            <div class="checkout__input">
                                <p>Mot de passe<span>*</span></p>
                                <input type="password" />
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="diff-acc">
                                    Envoyer à une adresse différente?
                                    <input type="checkbox" id="diff-acc" />
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input">
                                <p>Notes de commande<span>*</span></p>
                                <input type="text" placeholder="Notes sur votre commande, par exemple des instructions spéciales de livraison." />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Votre Commande</h4>
                                <div class="checkout__order__products">
                                    Produits <span>Total</span>
                                </div>
                                <ul>
                                    <li>Poterie <span>175,99 FCFA</span></li>
                                </ul>
                                <div class="checkout__order__subtotal">
                                    Sous-total <span>75 000,99 FCFA</span>
                                </div>
                                <div class="checkout__order__total">
                                    Total <span>75 000,99 FCFA</span>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Paiement à la livraison
                                        <input type="checkbox" id="payment" />
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">
                                    PASSER LA COMMANDE
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

@endsection