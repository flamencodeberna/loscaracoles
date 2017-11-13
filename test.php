<?php include('include/header.html'); ?>

hello:

<?php perch_content_custom('veranstaltung', [
    'page' => '/veranstaltungen/*.php',
    'template' => '_veranstaltungen_overview.html',
    'sort' => 'date',
    'sort-order' => 'ASC',
    'count' => 1
]); ?>

<?php include('include/footer.html'); ?>
