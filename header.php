<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php
	wp_head();
	?>
</head>
<header class="template_3_head">
<!-- navigation menu -->

	<nav class="navbar">
		<div class="navbar-container">
			<div class="logo">
				<a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>">
					<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo           = wp_get_attachment_image_src( $custom_logo_id, 'full' );

					if (  has_custom_logo() ) {
						echo '<img class="header_logo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
					} else {
						echo '<img src="' . get_bloginfo( 'template_directory' ) . '/assets/images/Temp3_Logo.png' . '" alt="' . get_bloginfo( 'name' ) . '">';
					}
					?>
				</a>
			</div>

			<div class="menu-container">
				<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
					<svg width="35" height="25" viewBox="0 0 35 25" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 2H35" stroke="white" stroke-width="4"/>
						<path d="M0 12.04H35" stroke="white" stroke-width="4"/>
						<path d="M5 22.08H35" stroke="white" stroke-width="4"/>
					</svg>
				</button>

				<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
					<div class="offcanvas-header">
						<a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>">
							<?php
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$logo           = wp_get_attachment_image_src( $custom_logo_id, 'full' );

							if ( has_custom_logo() ) {
								echo '<img class="header_logo" src="' . get_theme_mod( 'footer_image_logo', get_bloginfo( 'template_directory' ) . '/assets/images/Temp3_logo2.png' ) . '" alt="' . get_bloginfo( 'name' ) . '">';
							} else {
								echo '<img src="' . get_bloginfo( 'template_directory' ) . '/assets/images/Temp3_logo2.png' . '" alt="' . get_bloginfo( 'name' ) . '">';
							}
							?>
						</a>

						<button type="button" class="close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-sharp fa-solid fa-xmark"></i></button>
					</div>

					<div class="offcanvas-body">
						<div class="template_3_header_menu">

							<?php wp_nav_menu( 'primary' ); ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
</header>
