<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Tsn
 * @since Tsn 1.0
 */

?>

<header>
	<!-- Header Start -->
	<div class="header-area">
		<div class="main-header header-sticky">
			<div class="container-fluid">
				<div class="menu-wrapper">
					<!-- Logo -->
					<?php get_template_part( 'template-parts/header/site-branding' ); ?>
					<!-- Main-menu -->
					<?php get_template_part( 'template-parts/header/site-nav' ); ?>

					<!-- Header Right -->
					<div class="header-right">
						<ul>
							<li>
								<div class="nav-search search-switch">
									<span class="flaticon-search"></span>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- Mobile Menu -->
				<div class="col-12">
					<div class="mobile_menu d-block d-lg-none"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- Header End -->
</header>
