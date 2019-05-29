<!DOCTYPE html>
<html>

<head>
    <title>Added</title>
    <link rel="stylesheet" href="./includes/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <a href="#" class="navbar-brand"><img class="logo" src="./images/take1.png" alt="take1" border="0"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <i class="fas fa-home"></i>
                    <a class="nav-link" href="./index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <i class="far fa-envelope"></i>
                    <a class="nav-link" href="#">Inbox</a>
                </li>
                <li class="nav-item">
                    <i class="fas fa-book-reader"></i>
                    <a class="nav-link" href="#">Library</a>
                </li>
                <li class="nav-item">
                    <i class="fas fa-cog"></i>
                    <a class="nav-link" href="#">Setting</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary btn-lg active" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <?php
    $fn = $_GET["f_n"];
    $ls = $_GET["l_n"];
    $pn = $_GET["p_n"];
    $em = $_GET["mail"];
    $des = $_GET["description"];
    $ded = $_GET["deadline"];
    ?>
    <main class="info-text">
        <h3><?php echo $pn ?></h3>
        <article class="audition-text">
            <?php echo $des ?>
            <br><br>
            DIRECTOR: <?php echo $fn . $ls ?>
            <br><br>
            DEADLINE:<?php echo $ded ?>
            <br><br>
            EMAIL: <?php echo $em ?>

        </article>
        <section id="options">
            <a href="./index.html" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Add audition</a>
        </section>
    </main>

    <footer></footer>
</body>

</html>