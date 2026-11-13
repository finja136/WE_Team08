<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kanban-Boards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

<!-- Navigation Bar; href="#" vorerst als Platzhalter für spätere Seiten-->
    <nav class="navbar navbar-expand our-nav">
        <div class="container justify-content-start">
            <img class="me-3" src="<?= base_url('assets/logo.svg') ?>" width="138" height="40" alt="logo"> <!-- justify-content-start ist von Bootsrap; für Linksausrichtung, me-3 gibt Abstand nach dem Logo -->
            <ul class="navbar-nav">
                <li><a class="nav-link" href="#">Tasks</a></li>
                <li><a class="nav-link" href="#">Boards</a></li>
                <li><a class="nav-link" href="spalten">Spalten</a></li>
            </ul>
        </div>
    </nav>

<!-- Tasks / Hauptinhalt der Seite -->
    <div class="container mt-4"> <!-- mt-4 ist von Bootstrap; gibt Abstand oberhalb des Inhalts -->
        <div class="card">
            <div class="card-header">
                <h1>Tasks</h1>
            </div>
            <div class="card-body">
            </div>
        </div>
    </div>

<!-- Footer; auch hier href="#" vorerst als Platzhalter für spätere Seiten -->
    <footer class="footer">
        <div class="container">
            © Web-Entwicklung Team 08
            <div class="float-end"> <!-- float-end ist von Bootstrap; damit die Links rechts ausgerichtet sind -->
                <a href="#">Impressum</a>
                <a href="#">Datenschutz</a>
                <a href="#">Kontakt</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>



</body>
</html>