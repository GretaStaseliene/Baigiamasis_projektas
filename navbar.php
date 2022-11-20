<?php
    // $baseUrl = "http://localhost/MANO-PROJEKTAS/";
    $baseUrl = "/";
?>

<nav class="navbar navbar-expand-lg navbar-expand-md">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $baseUrl . 'index.php'; ?>">Green House Nails</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-reset" aria-current="page" href="<?php echo $baseUrl . 'paslaugos.php'; ?>">Paslaugos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-reset" aria-current="page" href="<?php echo $baseUrl . 'kainos.php'; ?>">Kainos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-reset" aria-current="page" href="<?php echo $baseUrl . 'galerija.php'; ?>">Galerija</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-reset" aria-current="page" href="<?php echo $baseUrl . 'susisiekime.php'; ?>">Susisiekime</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-reset" aria-current="page" href="<?php echo $baseUrl . 'kontaktai.php'; ?>">Kontaktai</a>
                </li>
            </ul>
        </div>
    </div>
</nav>