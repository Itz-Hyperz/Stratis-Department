<?php
    require("config.php");
?>
<html>
<head>
    <title>Home - <?php echo CONFIG['information']['name'] ?></title>
	<link rel="icon" type="image/png" href="<?php echo CONFIG['information']['logo'] ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/home.css">
	<meta name="theme-color" content="#<?php echo CONFIG['information']['meta']['color'] ?>">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:creator" content="@jekeltor">
	<meta property="og:url" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
	<meta property="og:title" content="Home - <?php echo CONFIG['information']['name'] ?>">
	<meta property="og:description" content="<?php echo CONFIG['information']['meta']['description'] ?>">
	<meta property="og:image" content="<?php echo CONFIG['information']['meta']['logo'] ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        :root {
            --background-color: #<?php echo CONFIG['colors']['backgroundColor'] ?>;
            --accent-color: #<?php echo CONFIG['colors']['accentColor'] ?>;
            --button-text-color: #<?php echo CONFIG['colors']['buttonTextColor'] ?>;
            --background-image: url("<?php echo CONFIG['information']['background'] ?>");
            --first-line-font-size: <?php echo CONFIG['navbar']['name']['firstLine']['fontSize']."vh" ?>;
            --second-line-font-size: <?php echo CONFIG['navbar']['name']['secondLine']['fontSize']."vh" ?>;
            --name-font-size: <?php echo CONFIG['header']['nameFontSize']."vh" ?>;
            --external-link: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 640'%3E%3Cpath fill='%23<?php echo CONFIG['colors']['buttonTextColor'] ?>' d='M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l82.7 0L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3l0 82.7c0 17.7 14.3 32 32 32s32-14.3 32-32l0-160c0-17.7-14.3-32-32-32L320 0zM80 32C35.8 32 0 67.8 0 112L0 432c0 44.2 35.8 80 80 80l320 0c44.2 0 80-35.8 80-80l0-112c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 112c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-320c0-8.8 7.2-16 16-16l112 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 32z'/%3E%3C/svg%3E");
        }
    </style>
</head>
<body>
    <section class="preloader">
    </section>
    <section class="navbar">
        <div class="left">
            <img src="<?php echo CONFIG['information']['logo'] ?>" />
            <div class="alt-text">
                <h1><?php echo CONFIG['navbar']['name']['firstLine']['text'] ?></h1>
                <h2><?php echo CONFIG['navbar']['name']['secondLine']['text'] ?></h2>
            </div>
        </div>
        <div class="center">
            <?php
                foreach(CONFIG['navbar']['links'] as $name => $link) {
            ?>
            <a href="<?php echo $link ?>" target="__blank"><?php echo $name ?></a>
            <?php
                }
            ?>
        </div>
        <div class="right">
            <a href="<?php echo CONFIG['information']['button']['link'] ?>" target="__blank"><?php echo CONFIG['information']['button']['text'] ?> <i class="icon link"></i></a>
        </div>
    </section>
    <section class="header">
        <div class="right">
            <h1><?php echo CONFIG['header']['tagline'] ?></h1>
            <h2><?php echo CONFIG['information']['name'] ?></h2>
            <p><?php echo CONFIG['header']['message'] ?></p>
            <div class="apply-button">
                <a href="<?php echo CONFIG['information']['button']['link'] ?>" target="__blank"><?php echo CONFIG['information']['button']['text'] ?> <i class="icon link"></i></a>
            </div>
        </div>
    <section>
    <script>
        window.onload = function() {
            document.querySelector(".preloader").classList.add("loaded");
        }
    </script>
</body>
</html>