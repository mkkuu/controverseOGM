<?php

# Récupération de la page demandée
$page = $_GET['page'];

if ($page == 'sommaire') {
    require __DIR__ . '/pages/summary.php';
} elseif ($page == 'podcast') {
    require __DIR__ . '/pages/podcast.php';
} elseif ($page == 'about_us') {
    require __DIR__ . '/pages/about_us.php';
} elseif ($page == 'bibliographie') {
    require __DIR__ . '/pages/bibliographie.php';
} elseif ($page == 'teaser') {
    require __DIR__ . '/pages/teaser.php';
} elseif ($page == 'version_complete') {
    require __DIR__ . '/pages/download_report.php';
} elseif ($page == 'cartographie') {
    require __DIR__ . '/pages/cartographie.php';
} elseif ($page == 'actualites') {
    require __DIR__ . '/pages/actualites.php';
} elseif ($page == 'accueil') {
    require __DIR__ . '/pages/home.php';
} else {
    require __DIR__ . '/pages/home.php';
}

?>