<?php include('include/header.html'); ?>

<?php include('include/navigation.html'); ?>

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
                            <h1><sup>sFr</sup> 90</h1>
                            <h4>Einzelmitgliedschaft:</h4>
                            <hr>
                            <p>Für Einzelpersonen. Beitrag: Fr. 90.-- pro Jahr, Gratiseintritt in alle regulären
                                Konzerte
                                während eines Vereinsjahres. Informationen wahlweise per Post oder E-Mail.
                                Mitgliedsausweis.</p>                          
                        </div>
                    </div>
                </div>
                <div class="p-3 align-self-center col-md-4">
                    <div class="card">
                        <div class="card-block p-5">
                            <h1><sup>sFr</sup> 250</h1>
                            <h4>Gönnermitgliedschaft:</h4>
                            <hr>
                            <p>Beitrag: ab Fr. 250.-- pro Jahr, Gratiseintritt an alle Anlässe mit einer Begleitperson
                                freier Wahl, bei Reservation über die Webseite halten wir Ihnen einen resp. zwei
                                Sitzplätze
                                frei. Informationen wahlweise per Post oder E-Mail. Auf Wunsch
                                Erwähnung im Programm und/oder auf der Homepage. Mitgliedsausweis.</p>                           
                        </div>
                    </div>
                </div>
                <div class="p-3 align-self-center col-md-4">
                    <div class="card">
                        <div class="card-block p-5">
                            <h1><sup>sFr</sup> 20</h1>
                            <h4>Passivmitgliedschaft:</h4>
                            <hr>
                            <p>Als Passivmitglied unterstützen Sie Los Caracoles ideell. Beitrag: Fr. 20.-- pro Jahr.
                                Kein
                                Gratiseintritt an die Anlässe. Regelmässige Informationen über die Vereinstätigkeit per
                                E-Mail oder per Post. Kein Mitgliedsausweis. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5"
         style="background-image: url(&quot;https://pingendo.github.io/templates/sections/assets/form_red.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="align-self-center col-md-6 text-white">
                    <h1 class="text-center text-md-left display-3">Book a table</h1>
                    <p class="lead">Why waiting if you can do it online?</p>
                </div>
                <div class="col-md-6" id="book">
                    <div class="card">
                        <div class="card-body p-5">
                            <h3 class="pb-3">Make a reservation</h3>
                            <form action="https://formspree.io/YOUREMAILHERE">
                                <div class="form-group"><label>Name</label>
                                    <input class="form-control" placeholder="Your name, please"></div>
                                <div class="form-group"><label>Time</label>
                                    <input type="time" class="form-control"></div>
                                <div class="form-group"><label>People</label>
                                    <input type="number" class="form-control" placeholder="2"></div>
                                <button type="submit" class="btn mt-2 btn-outline-dark">Reserve</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('include/footer.html'); ?>