<?php get_header(); ?>
<?php
$current_id = get_the_ID();
get_template_part('hero', null, ['title' => 'Wybrany artykuł', 'hero_image' => get_the_post_thumbnail_url($current_id, 'full'), 'class' => 'single'])
?>
<section class="wrapper article">
  <div class="article-info">
    <p class="author">Autor: Michał Robak</p>
    <p class="time"><?= reading_time() ?></p>
    <p class="date">Data: <?= get_the_date('d.m.Y'); ?></p>
  </div>
  <h1> <?= get_the_title() ?></h1>
  <article>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
  </article>

  <?php
  $recent = new WP_Query([
    'posts_per_page' => 3,
    'post__not_in'   => [$current_id],
  ]);
  if ($recent->have_posts()) : ?>
  <p class="all-posts">Ostatnie posty</p>
  <div class="posts-grid">
    <?php while ($recent->have_posts()) : $recent->the_post(); ?>
    <?php get_template_part('card', null, ['id' => get_the_ID()]); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </div>
  <?php endif; ?>
</section>

<?php get_footer(); ?>