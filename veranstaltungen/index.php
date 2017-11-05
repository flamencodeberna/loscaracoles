<?php include('../include/header.html'); ?>

<?php include('../include/navigation.html'); ?>

<section class="py-5">

    <div class="container">

        <?php perch_content_custom('veranstaltung', [
            'page' => '/veranstaltungen/*.php',
            'template' => '_veranstaltungen_overview.html',
            'sort' => 'date',
            'sort-order' => 'DESC',
            #'count' => 2
        ]); ?>

        <!--?php perch_pages_navigation([
                'from-path' => '/veranstaltungen',
                'levels' => 1]
        ); ?-->
    </div>
</section>

<?php include('../include/footer.html'); ?>
