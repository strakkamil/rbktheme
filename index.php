<?php get_header(); ?>

<main>
  <?php get_template_part('hero', null, ['title' => 'Blog&nbsp;&nbsp;&nbsp;', 'hero_image' => get_template_directory_uri() . '/assets/images/test-zgodnosci-pary-mlodej-zabawa-weselna.webp', 'class' => 'underline']) ?>
  <section class="wrapper posts">
    <p class="home-paragraph">
      Sekcja BLOG na stronie RBK Michał Robak to przestrzeń, w której dzielę się wiedzą, doświadczeniem oraz
      inspiracjami związanymi z muzyką, akordeonem i działalnością sceniczną. Znajdziesz tu ciekawe artykuły, porady
      muzyczne, relacje z wydarzeń oraz materiały dla osób, które pasjonują się muzyką i występami na żywo. To miejsce
      stworzone zarówno dla miłośników akordeonu, jak i wszystkich, którzy chcą zajrzeć za kulisy pracy muzyka i odkryć
      świat muzyki od bliższej strony.
    </p>

    <p class="all-posts">Wszystkie posty</p>

    <div class="posts-grid">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php get_template_part('card', null, ['id' => get_the_ID()]); ?>
      <?php endwhile;
      endif; ?>
    </div>

    <nav>
      <?php rbk_pagination(); ?>
    </nav>
  </section>
</main>

<?php get_footer(); ?>