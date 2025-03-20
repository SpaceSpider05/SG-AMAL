<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez nos services professionnels pour l'installation, la réparation et la maintenance d'ascenseurs. Nous offrons des solutions sur mesure pour garantir la sécurité et le confort de vos utilisateurs.">
    <meta name="author" content="SG Amal - Ascenseurs">
    <meta name="keywords" content="ascenseur, installation ascenseur, réparation ascenseur, maintenance ascenseur, sécurité ascenseur, services ascenseurs, ascenseurs professionnels">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="SG Amal - Services d'Ascenseurs">
    <meta property="og:description" content="SG Amal vous propose des services d'installation, réparation et maintenance d'ascenseurs. Pour plus d'informations, contactez-nous dès aujourd'hui.">
    <meta property="og:url" content="https://sgamal.com/">
    <meta property="og:type" content="website">

    <title>SG Amal - Installation, Réparation et Maintenance d'Ascenseurs</title>

    <?php require './components/links.php'; ?>
</head>


<body>

    <section class="preloader">
        <div class="spinner">
            <span class="sk-inner-circle"></span>
        </div>
    </section>

    <main>

        <?php require './components/header.php'; ?>

        <header class="site-header section-padding-img site-header-image">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 header-info">
                        <h1>
                            <span class="d-block">Dites-nous bonjour
                            </span>
                            <span class="d-block text-dark" id="ss" style="font-size: 25px;">Au plaisir de vous entendre</span>
                        </h1>
                    </div>
                </div>
            </div>

            <img src="images/1.jpg" class="header-image img-fluid" alt="">
        </header>

        <section class="contact section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="mb-4">Contactez <span>nous</span></h2>

                        <form class="contact-form me-lg-5 pe-lg-3" role="form">

                            <div class="form-floating">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>

                                <label for="name">Nom Complet</label>
                            </div>

                            <div class="form-floating my-4">
                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>

                                <label for="email">Email address</label>
                            </div>

                            <div class="form-floating my-4">
                                <input type="subject" name="subject" id="subject" class="form-control" placeholder="Subject" required>

                                <label for="subject">Sujet</label>
                            </div>

                            <div class="form-floating mb-4">
                                <textarea id="message" name="message" class="form-control" placeholder="Leave a comment here" required style="height: 160px"></textarea>

                                <label for="message">Parlez-nous du projet</label>
                            </div>

                            <div class="col-lg-5 col-6">
                                <button type="submit" class="form-control">envoyer</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-6 col-12 mt-5 ms-auto">
                        <div class="row">
                            <div class="col-6 border-end contact-info">
                                <h6 class="mb-3">EMAIL</h6>

                                <a href="mailto:sgamal.bat@gmail.com" class="custom-link">
                                    sgamal.bat@gmail.com
                                    <i class="bi-arrow-right ms-2"></i>
                                </a>
                            </div>

                            <div class="col-6 contact-info">
                                <h6 class="mb-3">Numero Telephone</h6>

                                <a href="" class="custom-link">
                                    +2126-69-14-68-43
                                    <i class="bi-arrow-right ms-2"></i>
                                </a>
                            </div>

                            <div class="col-6 border-top border-end contact-info">
                                <h6 class="mb-3">Notre bureau</h6>

                                <p class="text-muted"> 10 RUE CHRARDA RDC DERB LOUBILA BOURGOGNE CASABLANCA. </p>
                            </div>

                            <div class="col-6 border-top contact-info">
                                <h6 class="mb-3">Nos réseaux sociaux</h6>

                                <ul class="social-icon">

                                    <li><a href="#" class="social-icon-link bi-messenger"></a></li>

                                    <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                                    <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                                    <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <?php require './components/footer.php'; ?>
    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>