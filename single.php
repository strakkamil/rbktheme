<?php get_header(); ?>
<?php
$current_id = get_the_ID();
get_template_part('hero', null, ['title' => get_the_title($current_id), 'hero_image' => get_the_post_thumbnail_url($current_id, 'full'), 'class' => ''])
?>
<section class="wrapper article">
  <article>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
  </article>

  <p class="all-posts">Ostatnie posty</p>
  <div class="posts-grid">
    <?php
    $recent = new WP_Query([
      'posts_per_page' => 3,
      'post__not_in'   => [$current_id],
    ]);
    if ($recent->have_posts()) : while ($recent->have_posts()) : $recent->the_post(); ?>
    <?php get_template_part('card', null, ['id' => get_the_ID()]); ?>
    <?php endwhile;
      wp_reset_postdata();
    endif; ?>
  </div>
</section>

<?php get_footer(); ?>