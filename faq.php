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


        <header class="site-header section-padding d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12">
                        <h1 id="ss">
                            <span id="ss" class="d-block">Vos questions préférées
                                et </span>
                            <span class="d-block text-dark">nos réponses</span>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <section class="faq section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12">
                        <h2>Informations générales..</h2>

                        <div class="accordion" id="accordionGeneral">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralOne" aria-expanded="true" aria-controls="accordionGeneralOne">
                                    Quels types d'ascenseurs SG Amal installe-t-il ?                                    </button>
                                </h2>

                                <div id="accordionGeneralOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionGeneral">

                                    <div class="accordion-body">
                                        <p class="large-paragraph">Nous installons une large gamme d'ascenseurs adaptés aux besoins spécifiques de chaque client, y compris des ascenseurs résidentiels, commerciaux, industriels et des plateformes élévatrices.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralTwo" aria-expanded="false" aria-controls="accordionGeneralTwo">
                                    Comment puis-je obtenir un devis pour l'installation d'un ascenseur ?
                                    </button>
                                </h2>

                                <div id="accordionGeneralTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionGeneral">

                                    <div class="accordion-body">
                                        <p class="large-paragraph">Vous pouvez obtenir un devis en remplissant notre formulaire de contact en ligne ou en nous appelant directement. Nous évaluerons vos besoins et vous fournirons un devis détaillé.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralThree" aria-expanded="false" aria-controls="accordionGeneralThree">
                                    SG Amal propose-t-il des services de maintenance d'ascenseurs ?
                                    </button>
                                </h2>

                                <div id="accordionGeneralThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionGeneral">

                                    <div class="accordion-body">
                                        <p class="large-paragraph">Oui, nous offrons des services de maintenance réguliers pour assurer le bon fonctionnement de vos ascenseurs. Nos équipes sont formées pour intervenir rapidement et efficacement.</p>
                                    </div>
                                </div>
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