<footer>
  <h2 class="heading">Kontakt</h2>
  <a class="" href="mailto:kontakt@rbk-events.pl"><img loading="lazy" width="30" height="30"
      src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.svg" alt="Ikona mail" />
    kontakt@rbk-events.pl</a>
  <a href="tel:518637234"><img loading="lazy" width="30" height="30"
      src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.svg" alt="Ikona mail" />518 637 234</a>
  <div class="socials">
    <a target="_blank" href="https://www.facebook.com/rbkevents.mrobak/" aria-label="Facebook">
      <img loading="lazy" width="25" height="25"
        src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-facebook.svg" alt="logo-facebook" />
    </a>
    <a target="_blank" href="https://www.tiktok.com/@michal.robak" aria-label="TikTok">
      <img loading="lazy" width="25" height="25"
        src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-tiktok.svg" alt="logo-tiktok" />
    </a>
    <a target="_blank" href="https://www.instagram.com/rbk_events/" aria-label="Instagram">
      <img loading="lazy" width="25" height="25"
        src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-instagram.svg" alt="logo-instagram" />
    </a>
    <a target="_blank" href="https://www.youtube.com/michalrobak" aria-label="YouTube">
      <img loading="lazy" width="25" height="25"
        src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-youtube.svg" alt="logo-youtube" />
    </a>
  </div>
  <div class="privacy"><a href="https://rbk-events.pl/polityka-prywatnosci">Polityka prywatności</a></div>
  <div class="privacy"><button class="cookies-open">Ustawienia plików cookies</button></div>
  <div class="copyrights"><span>© <?= date('Y') ?> RBK Events - Michał Robak</span><span>Realizacja:<a
        href="mailto:strakkamil@protonmail.com">Kamil
        Strąk</span></a></div>
</footer>

<?php get_template_part('cookies'); ?>
<?php wp_footer(); ?>
</body>

</html>