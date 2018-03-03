<?php include('../include/header.html'); ?>

<?php include('../include/navigation.php'); ?>

<div class="py-5">

    <div class="container">

        <h1>Veranstaltungen</h1>
        <p>
            Los Caracoles organisiert einerseits professionelle Konzerte und anderseits sogenannte Vivencias, bei denen
            sich Flamenco-Interessierte treffen. Daneben finden sich auf dieser Liste auch Fremdveranstaltungen.
        </p>
        <!--        <div class="row">-->
        <div>
            <?php
            $today = date('Y-m-d');

            perch_content_custom('veranstaltung', [
                'page' => '/veranstaltungen/*.php',
                'template' => '_veranstaltungen_overview2.html',
                'sort' => 'date',
                'sort-order' => 'ASC',
                //'category' => 'veranstaltungen/'.perch_get('los-caracoles-konzert'),
                //'type' => "veranstaltungen/los-caracoles-konzert/",
                'filter'=> [
                    [
                        'filter' => 'date',
                        'match' => 'gte',
                        'value' => "$today"
                    ],
                    [
                        'filter' => 'eventType',
                        'match' => 'regex',
                        'value' => '^[^Los Caracoles].+'
                    ]
                ]
                #'count' => 2
            ]); ?>


        </div>
        <!--        </div>-->

        <!--?php perch_pages_navigation([
                'from-path' => '/veranstaltungen',
                'levels' => 1]
        ); ?-->
    </div>

</div>

<?php include('../include/footer.html'); ?>
