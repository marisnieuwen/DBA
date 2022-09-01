<?php

// Random content function
function randomContent()
{
    $content = [
        file_get_contents('http://loripsum.net/api/1/short'),
        file_get_contents('http://loripsum.net/api/1/short'),
        file_get_contents('http://loripsum.net/api/1/short'),
        file_get_contents('http://loripsum.net/api/1/short'),
        file_get_contents('http://loripsum.net/api/1/short'),
    ];
    return $content[rand(0, count($content) - 1)];
};

$currentYear = date("Y");

// Nav variables

$nav = [
    'Home',
    'Programma',
    'Nieuws',
    'Kennisbank',
    'Over ons',
    'Sprekers',
];

// Header variables
$header = [
    "title" =>  "De Digitale Binnenhof Academy",
    "titleText" => "De Digitale Binnenhof Academy is een samenwerkingsverband van kennisinstellingen, publieke en private organisaties die zich actief bezighouden met de digitale samenleving.",
];

// Text variables DBA
$dba = [
    "question" => "Wat is de digitale binnenhof Academy",
    "infoDba" => [
        "De digitale sector heeft een steeds grotere invloed op ons werk en in ons dagelijks leven. Het is daarom belangrijk dat onze politici goed publiek debat voeren over hoe die digitale wereld eruitziet.",
        "In de praktijk blijkt dat echter lastig. De digitale wereld is een technologische wereld en Kamerleden hebben lang niet altijd een technische achtergrond.",
        "De Digitale Binnenhof Academy is een neutraal kenniscentrum waar politici en fractieleden objectieve kennis kunnen opvragen over de werking van de digitale samenleving."
    ],

];

// Kennisbank variables
$bank = [
    "title" => "Kennisbank",
    "undertitle" => "Kom alles te weten over de digitale wereld",
    "topic" => "Nulla quis lorem",
    "cardContent" => [
        [
            "tag" => 'Nulla quis lorem',
            "topic" => 'Digitale Binnenhof Academy organiseert tweede sessie over de Digitale Economie',
        ],
        [
            "tag" => 'Nulla quis lorem | Nulla quis lorem',
            "topic" => 'Digitale Binnenhof Academy organiseert tweede sessie over de Digitale Economie',
        ],
        [
            "tag" => 'Nulla quis lorem | Nulla quis lorem',
            "topic" => 'Digitale Binnenhof Academy organiseert tweede sessie',
        ],
        [
            "tag" => 'Nulla quis lorem',
            "topic" =>  'Digitale Binnenhof Academy organiseert tweede sessie over de Digitale Economie en waterschappen en financiën',
        ],
        [
            "tag" => 'Nulla quis lorem | Nulla quis lorem',
            "topic" => 'Digitale Binnenhof Academy organiseert tweede sessie.',
        ],
        [
            "tag" => 'Nulla quis lorem | Nulla quis lorem',
            "topic" => 'Digitale Binnenhof Academy organiseert tweede sessie over de Digitale Economie en waterschappen en financiën',
        ],
    ],
    "kennisButton" => "Bekijk onze kennisbank"
];

// News variables
$news = [
    "head" => "Nulla porttitor",
    "title" => "Laatste nieuws",
    "articleButton" => "Lees artikel",
    "moreNewsButton" => "Bekijk al het nieuws",
];


// Speaker variables
$speakers = [
    "top" => "Aan het woord",
    "title" => "Onze sprekers",
    "details" => [
        [
            "image" => 'assets/speaker1.png',
            "name" => 'Cornelis Peter van Dongen',
            "jobTitle" => 'Functie',
        ],
        [
            "image" => 'assets/speaker2.png',
            "name" => 'Thomassen à Thuessink van der Hoop van Slochterene',
            "jobTitle" => 'Functie',
        ],
        [
            "image" => 'assets/speaker3.png',
            "name" => 'Marc Marie van Huibrechts',
            "jobTitle" => 'Functie',
        ],
    ],
    "links" => [
        'Bekijk hier de samenvatting van zijn lezing over onderwerp x',
        'Bekijk hier de samenvatting van zijn lezing over onderwerp x',
        'Bekijk hier de samenvatting van haar lezing over onderwerp x',
    ],
    "button" => "Bekijk al onze sprekers",
];

// About
$about = "Over ons";

// Footer variables
$footer = [
    "text" => "Voor vragen en informatie:",
    "mail" => "info@digitalebinnenhofacademy.nl",
    "telText" => "Tel:",
    "phone" => "+31 (0)70 41 90 309",
    "prive" => "Privacy",
    "faq" => "FAQ",
    "contact" =>  "Contact",
    "copyright" =>  "© " . $currentYear . " Digitale Binnenhof Academy",
    "socials" => [
        [
            "links" => 'https://linkedin.com/company/digitale-binnenhof-academy',
            "image" => '<i class="fa-brands fa-linkedin"></i>',
        ],
        [
            "links" => 'https://vimeo.com/538788587',
            "image" => '<i class="fa-brands fa-vimeo-v"></i>',
        ],
        [
            "links" => 'mailto:info@digitalebinnenhofacademy.nl',
            "image" => '<i class="fa-solid fa-envelope"></i>',
        ],
    ],
    "goTo" => "Ga direct naar",
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>De Digitale Binnenhof Academy</title>
</head>

<body>
    <div class="nav-container container-fluid">
        <div class="container">
            <nav class="navbar navbar-expand-xl">
                <div class="logo">
                    <img src="assets\logo-dba.svg">
                </div>

                <ul class="nav-items navbar-nav ms-auto list-unstyled">
                    <?php for ($x = 0; $x <= count($nav) - 2; $x++) : ?>
                    <li>
                        <a href="#"><?= $nav[$x] ?></a>
                    </li>
                    <?php endfor ?>
                </ul>
            </nav>
        </div>
    </div>

    <header class="header-container container-fluid">
        <div class="header-content container">
            <div class="col-md-5">
                <h1>
                    <?= $header['title']; ?>
                </h1>
                <h5>
                    <?= $header['titleText'] ?>
                </h5>
            </div>
        </div>
    </header>

    <main>
        <section class="break-dba container-fluid">
            <div class="container">
                <div class="col-md-4">
                    <p id="question">
                        <?= $dba['question'] ?>
                    </p>

                    <h2>
                        <?= $header['title']; ?>
                    </h2>
                </div>
                <div class="col-md-8">
                    <?php foreach ($dba['infoDba'] as $value) : ?>
                    <p><?= $value ?></p>
                    <?php endforeach ?>
                </div>
            </div>
        </section>

        <!-- Kennisbank -->
        <section class="blue-container container-fluid">
            <div class="container">
                <div class="col-md-12 text-center">
                    <h5 id="title">
                        <?= $bank['title'] ?>
                    </h5>
                    <div class="col-md-12 text-center">
                        <h2 id="underline">
                            <?= $bank['undertitle'] ?>
                        </h2>
                    </div>
                </div>
                <!-- Row 1 -->
                <section class="row p-3">
                    <?php foreach ($bank['cardContent'] as $value) : ?>
                    <!-- column 1 to 6 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card">
                            <img src="assets\kennisbank-img.png" alt="Kennisbank image" class="card-img-top">
                            <div class="card-body">
                                <h6 class="card-title">
                                    <?= $value["tag"] ?>
                                </h6>
                                <a class="card-text stretched-link" href="#">
                                    <?= $value["topic"] ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </section>

                <!-- Kennisbank button -->
                <div class="col-md-12 text-center">
                    <button class="btn btn-outline-secondary">
                        <?= $bank['kennisButton'] ?> <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- Nieuws -->
        <section class="news container-fluid">
            <div class="container">
                <div class="col-md-12 text-center">
                    <h5 id="newstop"><?= $news['head'] ?></h5>
                </div>
                <div class="col-md-12 text-center">
                    <h2><?= $news['title'] ?></h2>
                </div>
                <!-- column 1 -->
                <?php for ($x = 0; $x <= 5; $x++) : ?>
                <div class="card mb-3 newscard">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="assets/nieuws-img.png" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-9 text-left">
                            <div class="card-body news">
                                <h5 class="card-title news"><?= randomContent() ?></h5>
                                <p class="elipses">
                                    <?php foreach ($dba['infoDba'] as $value) : ?>
                                    <?= $value ?>
                                    <?php endforeach ?></p>
                                <div class="btn-bottom-right">
                                    <a class="btn btn-primary stretched-link" href="#" role="button">
                                        <?= $news['articleButton'] ?> <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endfor ?>

                <!-- Nieuws button -->
                <div class="col-md-12 text-center">
                    <button class="btn btn-outline-primary" id="load_more">
                        <?= $news['moreNewsButton'] ?> <i class="fa-solid fa-arrow-down"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- Sprekers -->
        <section class="blue-container container-fluid">
            <div class="container">
                <h5 id="topline"><?= $speakers['top'] ?></h5>
                <h2 id="underline"><?= $speakers['title'] ?></h2>
                <div class="row">
                    <?php foreach ($speakers['details'] as $value) : ?>
                    <!-- Speaker 1 -->
                    <div class="col-md-4 h-100 text-left">
                        <div class="speaker-img">
                            <img src=<?= $value["image"] ?>>
                        </div>
                        <div class="names"><?= $value["name"] ?></div>
                        <div class="title"><?= $value["jobTitle"] ?></div>
                    </div>
                    <?php endforeach ?>

                    <!-- Speaker bio -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="title"><?= randomContent() ?></div>
                        </div>
                        <div class="col-md-4">
                            <div class="title"><?= randomContent() ?></div>
                        </div>
                        <div class="col-md-4">
                            <div class="title"><?= randomContent() ?></div>
                        </div>
                    </div>

                    <!-- Speaker lecture summaries -->
                    <div class="row">
                        <?php foreach ($speakers['links'] as $value) : ?>
                        <div class="col-md-4">
                            <a class="namelink" href="#"><?= $value ?></a>
                        </div>
                        <?php endforeach ?>
                    </div>

                    <!-- Spreker button -->
                    <div class="col-md-12 text-center">
                        <button class="btn btn-outline-secondary">
                            <?= $speakers['button'] ?> <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
        </section>

        <!-- Over ons -->
        <section class="break-dba container-fluid">
            <div class="container">
                <p id="question">
                    <?= $dba['question'] ?>
                </p>
                <h2>
                    <?= $about ?>
                </h2>
                <div class="col-md-8">
                    <?php foreach ($dba['infoDba'] as $value) : ?>
                    <p><?= $value ?></p>
                    <?php endforeach ?>
                </div>
                <div class="video"><iframe src="https://player.vimeo.com/video/538788587?h=7bb9469c54" id="video-style"
                        frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div>
                <script src="https://player.vimeo.com/api/player.js"></script>
            </div>
        </section>
    </main>

    <footer class="blue-container ">
        <div class="container">
            <div class="row">
                <!-- Contact -->
                <div class="col-md-1">
                    <div class="logo" id="logo-footer">
                        <img src="assets/logo-dba.svg">
                    </div>
                </div>
                <div class="col-md-4 text-left">
                    <h4><?= $footer['contact'] ?> </h4>
                    <h5><?= $footer['text'] ?></h5>
                    <h5><a href="mailto:<?= $footer['mail'] ?>"><?= $footer['mail'] ?></a></h5>
                    <h5><?= $footer['telText'] ?> <a href="#"><?= $footer['phone'] ?></a></h5>
                    <ul class="list-group list-group-horizontal list-unstyled">
                        <?php foreach ($footer['socials'] as $value) : ?>
                        <li id="socials">
                            <a href=<?= $value['links'] ?>>
                                <?= $value['image'] ?>
                            </a>
                            <?php endforeach ?>
                    </ul>

                    <h6 id="copy"><?= $footer['copyright'] ?></h6>
                </div>
                <!-- Nav -->
                <div class="col-md-4">
                    <h4><?= $footer['goTo'] ?></h4>
                    <ul class="list-unstyled footer">
                        <?php for ($x = 1; $x <= count($nav) - 1; $x++) : ?>
                        <li>
                            <a href="#"><?= $nav[$x] ?></a>
                        </li>
                        <?php endfor ?>
                    </ul>
                </div>
                <!-- Privacy, FAQ -->
                <div class="col-md-2">
                    <h4 id="empty-space">...</h4>
                    <ul class="list-unstyled footer">
                        <li>
                            <a href="#"><?= $footer['prive'] ?></a>
                        </li>
                        <li>
                            <a href="#"><?= $footer['faq'] ?></a>
                        </li>
                        <li>
                            <a href="#"><?= $footer['contact'] ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="main.js"></script>
</body>

</html>