<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webproger_theme
 */

?>

<footer id="colophon" class="site-footer">
  <div class="site-info">
    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'webproger_theme' ) ); ?>">
      <?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'webproger_theme' ), 'WordPress' );
				?>
    </a>
    <span class="sep"> | </span>
    <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'webproger_theme' ), 'webproger_theme', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
  </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>