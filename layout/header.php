<!doctype html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="...">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AZTREK</title>
        <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
              crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/jquery.sidr.light.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/styles.css">


        <!-- =================================================
      
          // BODY
          
          // ================================================ -->

        <!-- =================================================
                              HEADER
      
      ================================================ -->


    <body class="page--home">

        <header>

            <div class="headerUp">

                <!-- /* ********************************************
                  TOP-NAV
        ******************************************** */ -->

                <nav class="top--nav1">

                    <div class="container">

                        <div class="top--nav">
                            <div class="top--nav--left">
                                <div class="block-nl">
                                    <p class="nl-link">NEWSLETTER</p>
                                    <form class="newsletter-form" action="#" method="get">
                                        <input type="text" name="keywords" value="" placeholder="Email">
                                        <button type="submit" name="submit-btn">Je m'abonne</button>
                                    </form>
                                </div>
                                <!-- <div class="popup" onclick="myFunction()">NEWSLETTER
                                  <span class="popuptext" id="myPopup">Popup text...</span>
                                </div> -->
                                <a href="# ">BROCHURE</a>
                                <a href="# ">LE BLOG</a>
                            </div>
                            <div class="top--nav--right">
                                <a href="# ">CONTACT</a>
                                <diV class="phone-call">
                                    <img class="phone" src="images/phone.png " alt="Phone" />
                                    <p>09 51 25 72 84</p>
                                </diV>
                                <a href="# ">EN-ES-FR</a>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- /* ********************************************
                         LOGO
        ******************************************** */ -->

                <div class="header--logo">
                    <a href="index.html ">
                        <img class="logo" src="images/logo.png " alt="Logo ">
                    </a>
                    <div class="espace-voyage">
                        <a href="#">
                            <img class="picto--header" src="images/user.png " alt="User">
                            <ul class="inline-list">
                                <?php if (empty($utilisateur)) : ?>
                                    <li>
                                        <a href="admin/register.php">
                                            <i class="fa fa-user-plus"></i>
                                            Créer un compte
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin/login.php">
                                            <i class="fa fa-sign-in"></i>
                                            Se connecter
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <?php if ($utilisateur["admin"] == 1) : ?>
                                        <li>
                                            <a href="admin/">
                                                <i class="fa fa-sign-out"></i>
                                                Administration
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <li>
                                        <a href="admin/logout.php">
                                            <i class="fa fa-sign-out"></i>
                                            Déconnexion
                                        </a>
                                    </li>
                                <?php endif; ?>

                            </ul>
                        </a>

                    </div>
                </div>

                <!-- /* ********************************************
                         BURGER
        ******************************************** */ -->


                <a class="burger " href="#sidr-main ">
                    <i class="fa fa-bars " aria-hidden="true"></i>Menu
                </a>

                <!-- /* ********************************************
                         RS
        ******************************************** */ -->

                <div class="rs ">

                    <a href="# ">
                        <img src="images/facebook.png " alt="Facebook " />
                    </a>
                    <a href="# ">
                        <img src="images/twitter.png " alt="Twitter " />
                    </a>
                    <a href="# ">
                        <img src="images/insta.png " alt="Instagram " />
                    </a>
                    <a href="# ">
                        <img src="images/mail.png " alt="Mail " />
                    </a>
                    <a href="# ">
                        <img src="images/blog.png " alt="Blog " />
                    </a>

                </div>
                <!-- /* ********************************************
                         TITLE
        ******************************************** */ -->
                <div class="accueil--title">
                    <h1>ÉVADEZ VOUS EN AMÉRIQUE CENTRALE</h1>
                    <p>Parce que chaque voyageur est unique, votre voyage le sera aussi !</p>

                    <form class="search-form" action="#" method="get">
                        <input type="text" name="keywords" value="" placeholder="Dans quel pays souhaitez vous allez ?">
                        <i class="fas fa-caret-down"></i>
                            <!--<ul class="sous-menu">
                              <li>
                                <a href="#">Mexique</a>
                              </li>
                              <li>
                                <a href="#">Guatemala</a>
                              </li>
                              <li>
                                <a href="#">Honduras</a>
                              </li>
                              <li>
                                <a href="#">Salvador</a>
                              </li>
                              <li>
                                <a href="#">Costa-Rica</a>
                              </li>
                            </ul>-->
                            <div class="dropdown">
                                <button class="boutonmenuprincipal"></button>
                                <div class="dropdown-child">
                                    <a href="#">Mexique</a>
                                    <a href="#">Guatemal</a>
                                    <a href="#">Honduras</a>
                                    <a href="#">Salvador</a>
                                    <a href="#">Costa Rica</a>
                                </div>
                            </div>·
                        </i>
                        <button type="submit" name="submit-btn">

                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                    <a href="# " class="call-to-action dests"> Découvrez nos destinations</a>

                </div>


                <!-- /* ********************************************
                         SLIDER
        ******************************************** */ -->
            </div>
            <div class="slider">
                <div class="owl-carousel">
                    <article class="item">
                        <div class="item-img">
                            <a href="#">
                                <img src="images/accueil.jpg " alt="photo accueil" />
                            </a>
                        </div>
                    </article>

                    <article class="item">
                        <div class="item-img">
                            <a href="#">
                                <img src="images/accueil2.jpg" alt="photo accueil2" />
                            </a>
                        </div>
                    </article>

                    <article class="item">
                        <div class="item-img">
                            <a href="#">
                                <img src="images/accueil3.jpg" alt="photo accueil3" />
                            </a>
                        </div>
                    </article>

                    <article class="item">
                        <div class="item-img">
                            <a href="#">
                                <img src="images/accueil4.jpg" alt="photo accueil4" />
                            </a>
                        </div>
                    </article>

                    <article class="item">
                        <div class="item-img">
                            <a href="#">
                                <img src="images/accueil5.jpg" alt="photo accueil5" />
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </header>

        <main>