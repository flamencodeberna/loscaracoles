<?php

function navitem($requestUri, $text)
{
    $current_file_basename = basename($_SERVER['REQUEST_URI'], ".php");
    $request_uri_basename = basename($requestUri, ".php");
//    echo "$current_file_basename: " . $current_file_basename;
//    echo "$request_uri_basename uri: " . $request_uri_basename;

    if ($current_file_basename == $request_uri_basename) {
        echo "<li class='nav-item active'>";
    } else {
        echo "<li class='nav-item'>";
    }

    echo "<a class='nav-link' href='" . $requestUri . "'>$text</a>";
    echo "</li>";

}

?>

<div class="container-fluid mifondo">
    <nav class="navbar navbar-expand-md navbar-dark mifondo navbar-inverse bg-inverse  container">
        <img class="mr-2" src="../img/logo-caracoles-transparente.png" width="45" height="35">
        <a class="navbar-brand" href="../">Los caracoles</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto text-center">
                <?php navitem('../veranstaltungen', "Veranstaltungen"); ?>
                <?php navitem('../verein.php', "Verein"); ?>
                <?php navitem('../mitgliedschaft.php', "Mitgliedschaft"); ?>
                <?php navitem('../kontakt.php', "Kontakt"); ?>
            </ul>
            <div class="d-flex flex-row justify-content-around ml-2">
                <a href="https://www.facebook.com/search/top/?q=pe%C3%B1a%20flamenca%20los%20caracoles"
                   class="btn btn-outline-danger">F</a>
            </div>
        </div>
    </nav>
</div>