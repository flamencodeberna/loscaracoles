<?php include('include/header.html'); ?>

<?php include('include/navigation.html'); ?>

<?php include('include/title-carousel.html'); ?>

<section class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <h1 class="">Herzlich willkommen auf der Homepage der Peña Flamenca Los Caracoles!</h1>

            <p class="">
                Seit 1990 führt Los Caracoles in Bern Flamenco-Konzerte mit verschiedenen Künstlern und Gruppen aus
                Spanien, aus der Schweiz und anderen Ländern durch. In all den Jahren hat sich die Peña einen guten
                Namen geschaffen und ihre Anlässe sind zu einem unentbehrlichen Bestandteil des kulturellen Angebotes
                der Stadt und Region Bern geworden.
            </p>
            <div>

                <div class="container-fluid">
                    <div class="row">

                        <img href="" alt="abc"/>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        Veranstaltungsart
                                    </div>
                                    <div class="col-sm-6">
                                        Los Caracoles Konzert
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        Datum
                                    </div>
                                    <div class="col-sm-8">
                                        01.01.2018
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        Zeit
                                    </div>
                                    <div class="col-sm-8">
                                        20:00
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        Preis
                                    </div>
                                    <div class="col-sm-8">
                                        35 Fr.
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        Ort
                                    </div>
                                    <div class="col-sm-8">
                                        Vidmarhalle 2
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-4">
                                        Künstler
                                    </div>
                                    <div class="col-sm-8">
                                        Test, Test
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <ul class="event-list">

                        <?php
                        $today = date('Y-m-d');

                        perch_content_custom('veranstaltung', [
                            'page' => '/veranstaltungen/*.php',
                            'template' => '_veranstaltungen_overview.html',
                            'sort' => 'date',
                            'sort-order' => 'DESC',
                            'filter' => 'date',
                            'match' => 'lte',
                            'value' => "$today"
                            #'count' => 2
                        ]); ?>


                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <?php include('include/concert-carousel.html'); ?>
            </div>
        </div>
</section>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card">
                    <img class="card-img-top" src="img/vivencias.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Vivencias</h4>
                        <p class="card-text">Bei den Vivencias treffen sich Vereinsmitglieder und aber auch andere
                            Flamencointeressierte zum gemeinsamen Musizieren in ungezwungener Atmosphäre, einem Glas
                            Wein und Tapas. Gelegentlich findet zuvor ein kleiner Workshop oder ein Kozert statt und
                            anschliessend hängt es von den Teilnehmenden ab, wie der Abend weiter verläuft. Alle sind
                            herzlich eingeladen teilzunehmen. Es ist auch nicht nötig ein Instrument zu spielen. Die
                            nächsten Daten finden Sie <a href="/veranstaltungen">hier</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <img class="card-img-top" src="img-caracoles/pepehabichuela.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Konzerte</h4>
                        <p class="card-text">Die von uns organisierten Konzerte sind weit über den Verein hinaus bekannt
                            und bringen jeweils hervorragende Künstler aus der Schweiz, Spanien und anderswo nach Bern.
                            Aktuell finden diese Konzerte meist in der Vidmarhalle statt, teilweise aber auch an anderen
                            Orten. Das aktuelle Konzertprogramm finden Sie <a href="/veranstaltungen">hier</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <img class="card-img-top" src="img-caracoles/maxspring.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Der Verein</h4>
                        <p class="card-text">Der Verein Los-Caracoles existiert seit 1989 und ist aus der Idee heraus
                            entstanden, in der Stadt Bern einen Ort zu schaffen, wo sich Leute, die an Flamenco und der
                            spanischen Kultur und Lebensart interessiert sind regelmässig treffen, und wo einheimische
                            und auswärtige Flamencokünstler in einem geeigneten Rahmen auftreten können. Die Statuten
                            und weitere Informationen zum Verein finden Sie <a href="verein.php">hier</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('include/footer.html'); ?>
