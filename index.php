<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oniria</title>
    <link rel="icon" type="image/gif" href="./img/LogoIco.ico">

    <link rel="stylesheet" href="style.css">
    <script src="./script/main.js" defer></script>
    <script src="./script/navbar.js" defer></script>
    <script src="./script/progressBar.js" defer></script>
    <script src="./script/color.js" defer></script>

    <script src="https://kit.fontawesome.com/a560869912.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="navs">
            <div class="logo">
                <img class="logoBleu" src="./img/Logo ecrit.svg" alt="">
                <img class="logoBlanc" src="./img/Logo ecrit blanc.svg" alt="">
            </div>
            <nav>
                <ul>
                    <a class="link color" id="Navone" href="#one">
                        <li>Accueil</li>
                    </a>
                    <a class="link color" id="Navtwo" href="#two">
                        <li>Produit</li>
                    </a>
                    <a class="link color" id="Navthree" href="#three">
                        <li>Informations</li>
                    </a>
                    <a class="link color" id="Navfour" href="#four">
                        <li>Abonnements</li>
                    </a>
                    <a class="link" id="Navfive" href="#five">
                        <li>Contact</li>
                    </a>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <div class="blocHorizontal">
            <div class="slide" id="one">
                <div class="accueil reveal">
                    <div class="content-haut reveal-2">
                        <figure>
                            <img src="./img/masque-sommeil.jpg" alt="">
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet tincidunt nisi, nec feugiat sem. Vestibulum fermentum vehicula erat, vitae sagittis tortor semper in. Vestibulum rhoncus fermentum aliquet. In hac habitasse platea dictumst. Vestibulum tempor nunc id lorem cursus interdum. Sed at nisi vitae.</p>
                    </div>
                    <div class="content-bas reveal-3">
                        <h1>Devenez le <span>héros</span> de vos <span>rêves</span></h1>
                        <figure>
                            <img src="./img/masque3.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>



            <div class="slide" id="two">
                <div class="produit">
                    <div class="content-left reveal">
                        <h2 class="reveal-2">La machine à rêver</h2>
                        <p class="prix reveal-2">125.00 €</p>
                        <div class="cercles-couleur reveal-3">
                            <div class="couleur focus" id="gris"></div>
                            <div class="couleur" id="noir"></div>
                            <div class="couleur" id="bleu"></div>
                            <div class="couleur" id="blanc"></div>
                        </div>
                        <p class="reveal-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum repellat obcaecati in soluta aperiam esse praesentium perspiciatis maiores sapiente? Natus voluptas officia maiores?</p>
                        <div class="bouton reveal-4">
                            <a class="button" href="">Commander</a>
                        </div>
                    </div>
                    <figure>
                        <img id="imgGris" src="./img/masque gris.png" alt="">
                        <img id="imgNoir" class="none" src="./img/masque noir.png" alt="">
                        <img id="imgBleu" class="none" src="./img/masque bleu.png" alt="">
                        <img id="imgBlanc" class="none" src="./img/masque blanc.png" alt="">
                    </figure>
                    <div class="content-right reveal">
                        <figure class="reveal-2"><img src="./img/masque-sommeil.jpg" alt=""></figure>
                        <figure class="reveal-3"><img src="./img/masque3.jpg" alt=""></figure>
                        <figure class="reveal-4"><img src="./img/masque-sommeil.jpg" alt=""></figure>
                    </div>
                </div>
            </div>



            <div class="slide" id="three">
                <div class="infos">
                    <div class="content-left reveal">
                        <figure class="reveal-2">
                            <img src="./img/masque-sommeil.jpg" alt="">
                        </figure>
                        <div class="texte reveal-3">
                            <div class="titre">
                                <h3>La machine à rêve</h3>
                                <div class="soulignage">
                                    <div class="rectangle"></div>
                                    <img src="./img/etoile_Plan de travail 1 copie 2.svg" alt="">
                                </div>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat rerum consequatur tenetur, dolorum molestias recusandae itaque numquam quis saepe necessitatibus ex, tempora ad, nemo maxime perferendis enim. Aspernatur, eos incidunt?</p>
                            </div>
                        </div>
                    </div>
                    <div class="content-right reveal">
                        <div class="texte">
                            <div class="titre reveal-2">
                                <h3>La machine à rêve</h3>
                                <div class="soulignage">
                                    <div class="rectangle"></div>
                                    <img src="./img/etoile_Plan de travail 1 copie 2.svg" alt="">
                                </div>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat rerum consequatur tenetur, dolorum molestias recusandae itaque numquam quis saepe necessitatibus ex, tempora ad, nemo maxime perferendis enim. Aspernatur, eos incidunt?</p>
                            </div>
                        </div>
                        <figure class="reveal-3">
                            <video autoplay muted loop src="./img/video.mp4"></video>
                        </figure>
                    </div>
                </div>
            </div>



            <div class="slide" id="four">
                <div class="abonnement reveal">
                    <div class="card reveal-2">
                        <div class="head-card">
                            <div class="head">
                                <h4>Standard</h4>
                            </div>
                            <p>Pour faire de beaux rêves</p>
                        </div>
                        <div class="body-card">
                            <div class="liste">
                                <ul>
                                    <li>
                                        <i class="fa-regular fa-circle-check"></i>
                                        <p>Rêves prédifinies</p>
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-circle-check"></i>
                                        <p>Choix des films, jeux, sports</p>
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-circle-check"></i>
                                        <p>Masque de sommeil</p>
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-circle-xmark"></i>
                                        <p>Catégorie érotique</p>
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-circle-xmark"></i>
                                        <p>Création de rêves</p>
                                    </li>
                                </ul>

                            </div>
                            <p class="prix">
                                125.00€
                            </p>
                            <div class="bouton">
                                <a href="">Commander</a>
                            </div>
                        </div>
                    </div>
                    <div class="card reveal-4">
                        <div class="head-card">
                            <div class="head">
                                <h4>Premium</h4>
                            </div>
                            <p>Pour des rêves plus créatifs</p>
                        </div>
                        <div class="body-card">
                            <div class="liste">
                                <ul>
                                    <li>
                                        <i class="fa-regular fa-circle-check"></i>
                                        <p>Rêves prédifinies</p>
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-circle-check"></i>
                                        <p>Choix des films, jeux, sports</p>
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-circle-check"></i>
                                        <p>Masque de sommeil</p>
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-circle-check"></i>
                                        <p>Catégorie érotique</p>
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-circle-check"></i>
                                        <p>Création de rêves</p>
                                    </li>
                                </ul>

                            </div>
                            <p class="prix">
                                44.99€<span>/mois</span>
                            </p>
                            <div class="bouton">
                                <a href="">Commander</a>
                            </div>
                        </div>
                    </div>
                    <div class="texte reveal">
                            <div class="titre reveal-4">
                                <h3>La machine à rêve</h3>
                                <div class="soulignage">
                                    <div class="rectangle"></div>
                                    <img src="./img/etoile_Plan de travail 1 copie 2.svg" alt="">
                                </div>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat rerum consequatur tenetur, dolorum molestias recusandae itaque numquam quis saepe necessitatibus ex, tempora ad, nemo maxime perferendis enim. Aspernatur, eos incidunt?</p>
                            </div>
                        </div>
                </div>
            </div>



            <div class="slide slide-contact" id="five">
                <div class="contact">
                    <div class="titre-contact">
                        <h3>Contact</h3>
                        <div class="soulignage">
                            <div class="rectangle"></div>
                            <img src="./img/etoile_Plan de travail 1 copie 2.svg" alt="">
                        </div>
                    </div>
                    <div class="content-contact">
                        <div class="adresse-contact">
                            <p>rue Georges Mandel, 49000 Angers</p>
                        </div>
                        <div class="mail-contact">
                            <a href="mailto:contact@oniria.com">contact@oniria.com</a>
                        </div>
                        <div class="tel-contact">
                            <a href="tel:+0241658962">02 41 65 89 62</a>
                        </div>
                        <div class="rs-contact">
                            <i class="fa-brands fa-instagram fa-2x"></i>
                            <p>@oniria</p>
                        </div>
                    </div>
                    <div class="appli-contact">
                        <div class="content-appli">
                            <h4>lorem ipsum</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, labore adipisci, consequatur</p>
                        </div>
                        <div class="logo-appli">
                            <div class="playstore">
                                <i class="fa-brands fa-google-play"></i>
                                <div class="texte">
                                    <p>Disponible sur</p>
                                    <p>Google Play</p>
                                </div>
                            </div>
                            <div class="playstore">
                                <i class="fa-brands fa-apple"></i>
                                <div class="texte">
                                    <p>Disponible sur</p>
                                    <p>App store</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="formulaire">
                    <h2 class="titre-formulaire">Une question ?</h2>
                    <p>Tu rencontres un problème, tu as une question à poser ? Utilise le formulaire de contact ci-dessous :</p>
                    <form action="">
                        <input type="text" id="name" placeholder="Nom">
                        <input type="text" id="firstname" placeholder="Prénom">
                        <input type="mail" id="mail" placeholder="Adresse email">
                        <textarea id="message" placeholder="Message"></textarea>
                        <button type="submit">envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
    <div class="progressbar">
        <div class="progressbarinner"></div>
    </div>
    </footer>
</body>
</html>