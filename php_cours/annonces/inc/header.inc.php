<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Annonces</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.3/cerulean/bootstrap.min.css" integrity="sha512-1rXsIsq9uaj3bxRth2+Mw1slRDxuPzGlfJ8PaLmkO3/OtvCL7jVQrdxaC1VvCmCzKRMdKu0pmbCtqQz/3/xORA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>   
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= BASE_PATH ?>">Annonces</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                <a class="nav-link active" href="<?= BASE_PATH  ?>">Home
                    <span class="visually-hidden">(current)</span>
                </a>
                </li>
                <!-- <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">About</a>
                </li> -->
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Admin</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= BASE_PATH . '/back/userList.php' ?>">Gestion utilisateur</a>
                    <!-- <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a> -->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
                </li>
            </ul>
            <a href="<?= BASE_PATH . '/security/login.php'; ?>" class="btn btn-primary">Connexion</a>
            <a href="<?= BASE_PATH. '/security/register.php'; ?>" class="btn btn-success">Inscription</a>
            </div>
        </div>
        </nav>
    </header>
    <div class="container">

    