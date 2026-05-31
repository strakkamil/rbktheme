<?php
$post_id = $args['id'];
?>

<a href="<?php the_permalink(); ?>" class="blog-card">
  <img src="<?php echo get_the_post_thumbnail_url($args['id'], 'full'); ?>" alt="">
  <div class="text">
    <div class="text-content">
      <p class="title"><?php the_title(); ?></p>
      <p class="excerpt"><?php echo get_the_excerpt($args['id']); ?></p>
      <p class="read-more">Czytaj dalej &rsaquo;</p>
      <p class="date"><?php echo get_the_date('d.m.Y', $args['id']); ?></p>
    </div>
  </div>
</a>