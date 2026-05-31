<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header>
    <nav class="main-nav">
      <a class="logo" href="/" aria-label="Strona główna">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-rbk-events.svg" alt="Logo RBK Events"
          title="Logo RBK Events" width="138" height="55" fetchpriority="high" />
      </a>
      <ul class="list">
        <li><a href="https://rbk-events.pl/o-mnie">O mnie</a></li>
        <li><a href="https://rbk-events.pl/oferta/wesele">Oferta</a></li>
        <li><a href="https://rbk-events.pl/media/zdjecia">Media</a></li>
        <li><a href="https://rbk-events.pl/kontakt">Kontakt</a></li>
      </ul>
      <button class="hamburger" aria-label="hamburger">
        <img class="open" src="<?php echo get_template_directory_uri(); ?>/assets/images/hamburger.svg"
          title="Otwórz hamburgera" width="50" height="50" alt="Ikona otwórz menu" />
        <img class="close" src="<?php echo get_template_directory_uri(); ?>/assets/images/close.svg"
          title="Zamknij hamburgera" width="50" height="50" alt="Ikona zamknij menu" />
      </button>
    </nav>
  </header>