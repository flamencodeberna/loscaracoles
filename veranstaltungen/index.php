<?php include('../include/header.html'); ?>

<?php include('../include/navigation.html'); ?>

<div class="py-5">

    <div class="container">

        <h1>Veranstaltungen</h1>
        <p>
            Los Caracoles organisiert einerseits professionelle Konzerte und anderseits sogenannte Vivencias, bei denen
            sich
            Flamenco-Interessierte treffen. Daneben finden sich auf dieser Liste auch Fremdveranstaltungen.
            <?php perch_page_url(); ?>

            <?php perch_pages_navigation([
                    'from-path' => '/veranstaltungen/',
                    'levels' => 1
            ]); ?>
        </p>

        <div class="row">
            <div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
                <ul class="event-list">

                    <?php perch_content_custom('veranstaltung', [
                        'page' => '/veranstaltungen/*.php',
                        'template' => '_veranstaltungen_overview2.html',
                        'sort' => 'date',
                        'sort-order' => 'DESC',
                        #'count' => 2
                    ]); ?>


                </ul>
            </div>
        </div>

        <!--?php perch_pages_navigation([
                'from-path' => '/veranstaltungen',
                'levels' => 1]
        ); ?-->
    </div>

</div>

<?php include('../include/footer.html'); ?>
