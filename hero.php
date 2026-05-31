<section class="hero triangle">
  <div class="hero-img">
    <div class="gradient-element"></div>
    <picture>
      <source srcset="<?php echo $args['hero_image'] ?>" media="(min-width: 600px)">
      <source srcset="<?php echo $args['hero_image'] ?>" media=" (max-width: 599px)">
      <img src="<?php echo $args['hero_image'] ?>" width="412" height="232"
        alt="Relacja video z imprezy rolki na instagram; Realizacja: N&S FOTO STUDIO | https://www.nsfotostudio.com'"
        fetchpriority="high">
    </picture>
  </div>
  <header>
    <h1 class="heading <?= $args['class'] ?>">
      <?php echo $args['title'] ?>&nbsp;&nbsp;&nbsp;
    </h1>
  </header>
</section>