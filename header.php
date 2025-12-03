<?php
/**
 * The header for our theme
 *
 * @package webproger_theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header id="masthead" class="site-header">
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
      <div class="container">

        <!-- Logo / Site name -->
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <?php
				if ( has_custom_logo() ) {
					the_custom_logo();
				} else {
					bloginfo( 'name' );
				}
				?>
        </a>

        <!-- Offcanvas toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Offcanvas menu -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
              <?php bloginfo( 'name' ); ?>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="offcanvas-body">
            <?php
					wp_nav_menu(
						array(
							'theme_location'  => 'menu-1',
							'menu_class'      => 'navbar-nav justify-content-end flex-grow-1 pe-3',
							'container'       => false,
							'fallback_cb'     => false,
							'walker'         => new WP_Bootstrap_Navwalker(),
						)
					);
					?>
          </div>
        </div>

      </div>
    </nav>
  </header>