<?php include('include/header.html'); ?>

<?php include('include/navigation.php'); ?>

    <div class="py-5">
        <div class="container">

            <?php perch_content('haupttext'); ?>

        </div>
    </div>

    <div class="p-5 gradient-overlay bg-secondary">
        <div class="container">
            <div class="row">
                <div class="p-3 align-self-center col-md-4">
                    <div class="card">
                        <div class="card-block p-5">
                            <h1>
                                <sup>sFr</sup> 60</h1>
                            <h4>Einzelmitgliedschaft</h4>
                            <hr>
                            <p>Für Einzelpersonen. Beitrag: Fr. 60.-- pro Jahr. Mit dem Beitrag unterstützt Du den
                                Flamenco in Bern. Die Mitgliedschaft berechtigt zu bevorzugten Reservation bei
                                Konzerten. Mitgliedsausweis.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-3 align-self-center col-md-4">
                    <div class="card">
                        <div class="card-block p-5">
                            <h1>
                                <sup>sFr</sup> 200</h1>
                            <h4>Einzelgönnermigliedschaft</h4>
                            <hr>
                            <p>Beitrag: ab Fr. 200.-- pro Jahr, Gratiseintritt an alle Anlässe für eine Person, bei
                                Reservation
                                über die Webseite halten wir Ihnen einen resp. zwei Sitzplätze frei. Auf Wunsch
                                Erwähnung im Programm und/oder auf der Homepage. Mitgliedsausweis.</p>
                        </div>
                    </div>
                </div>
                <div class="p-3 align-self-center col-md-4">
                    <div class="card">
                        <div class="card-block p-5">
                            <h1>
                                <sup>sFr</sup> 300</h1>
                            <h4>Doppelgönnermitgliedschaft</h4>
                            <hr>
                            <p>Beitrag: ab Fr. 300.-- pro Jahr, Gratiseintritt an alle Anlässe mit einer Begleitperson
                                freier Wahl, bei Reservation
                                über die Webseite halten wir Ihnen einen, resp. zwei Sitzplätze frei. Auf Wunsch
                                Erwähnung im Programm und/oder auf der Homepage. Mitgliedsausweis.</p>
                        </div>
                    </div>
                </div>
                <div class="p-3 align-self-center col-md-4">
                    <div class="card">
                        <div class="card-block p-5">
                            <h1>
                                <sup>sFr</sup> 20</h1>
                            <h4>Passivmitgliedschaft</h4>
                            <hr>
                            <p>Als Passivmitglied unterstützen Sie Los Caracoles ideell. Beitrag: Fr. 20.-- pro Jahr.
                                Kein Gratiseintritt an
                                die Anlässe. Kein Mitgliedsausweis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form class="form-horizontal">
        <fieldset></fieldset>
    </form>
    <style>
        .cover {
            position: relative;
            min-height: 350px;
            background: url("img/homenagerafaeldehuelva.jpg") no-repeat scroll 0px 100% / cover transparent;
            background-size: cover;
        }
    </style>
    <div class="py-5 img-fluid cover">
        <div class="container">
            <div class="row">
                <div class="align-self-center col-md-6 text-white">
                    <h1 class="text-center text-md-left display-3">Sich für die Mitgliedschaft bei Los Caracoles
                        einschreiben</h1>
                    <p class="lead">Bitte füllen Sie das Formular vollständig aus und schicken Sie es ab. Danach werden
                        wir Ihnen per Post einen Einzahlungsschein
                        zustellen. Nach Bezahlen des entsprechenden Beitrags erhalten Sie den Mitgliedsausweis
                        zugeschickt.</p>
                </div>
                <div class="col-md-6" id="book">
                    <div class="card">
                        <div class="card-body p-5">
                            <?php perch_content('mitgliederschaft'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('include/footer.html'); ?>