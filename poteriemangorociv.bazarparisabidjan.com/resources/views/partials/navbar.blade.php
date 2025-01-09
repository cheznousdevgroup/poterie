<!-- Menu Hamburger -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="#"><img src="{{ asset('img/logo1.jpg') }}" alt="" /></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
        </ul>
        <div class="header__cart__price">article: <span>150.00 FCFA</span></div>
    </div>
    <div class="humberger__menu__widget">
        <div class="header__top__right__language">
            <img src="{{ asset('img/francelangue.png') }}" alt="" />
            <div>Français</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="#">Anglais</a></li>
                <li><a href="#">Français</a></li>
            </ul>
        </div>
        <div class="header__top__right__auth">
            <a href="#"><i class="fa fa-user"></i> Connexion</a>
        </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="/">Accueil</a></li>
            <li><a href="./shop-grid">Boutique</a></li>
            <li>
                <a href="#">Pages</a>
                <ul class="header__menu__dropdown">
                    <li><a href="./shop-details">Détails de la boutique</a></li>
                    <li><a href="./shoping-cart">Panier</a></li>
                    <li><a href="./checkout">Paiement</a></li>
                    <li><a href="./blog-details">Détails du blog</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li>Livraison gratuite pour toutes les commandes de 10.000 FCFA</li>
        </ul>
    </div>
</div>
<!-- Hamburger FIN -->

<!-- Section Header Début -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li>Livraison gratuite pour toutes les commandes de 10.000 FCFA</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <div class="header__top__right__language">
                            <img src="{{ asset('img/francelangue.png') }}" alt="" />
                            <div>Français</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">Anglais</a></li>
                                <li><a href="#">Français</a></li>
                            </ul>
                        </div>
                        <div class="header__top__right__auth">
                            <a href="#"><i class="fa fa-user"></i> Connexion</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="./"><img src="{{ asset('img/logo1.jpg') }}" width="110px" height="80px" alt="" /></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="./">Accueil</a></li>
                        <li><a href="./shop-grid">Boutique</a></li>
                        <li>
                            <a href="#">Pages</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="./shop-details">Détails de la boutique</a></li>
                                <li><a href="./shoping-cart">Panier</a></li>
                                <li><a href="./checkout">Paiement</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                    </ul>
                    <div class="header__cart__price">article: <span>150.00 FCFA</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Section Header FIN -->
