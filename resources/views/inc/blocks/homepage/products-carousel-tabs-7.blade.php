<?php

	$tab_title = array(
		'Bestsellers' , 'Treadmills' , 'Weights' , 'Benches' , 'Exercise Bikes' , 'Yoga'
	);

	$tab_carousel_args = array(
		'slidesToShow'		=> 8,
		'slidesToScroll'	=> 8,
		'dots'				=> true,
		'arrows'			=> false,
		'responsive'		=> array(
			array(
				'breakpoint'	=> 650,
				'settings'		=> array(
					'slidesToShow'		=> 1,
					'slidesToScroll'	=> 1
				)
			),
			array(
				'breakpoint'	=> 780,
				'settings'		=> array(
					'slidesToShow'		=> 3,
					'slidesToScroll'	=> 3
				)
			),
			array(
				'breakpoint'	=> 1200,
				'settings'		=> array(
					'slidesToShow'		=> 4,
					'slidesToScroll'	=> 4
				)
			),
			array(
				'breakpoint'	=> 1400,
				'settings'		=> array(
					'slidesToShow'		=> 6,
					'slidesToScroll'	=> 6
				)
			)
		)
	);

	$id = 'tab-' . uniqid();
?>

<section class="section-products-carousel-tabs">
	<div class="section-products-carousel-tabs-wrap">
		<header class="section-header">
			<h2 class="section-title">Easy Basics for Sports & Fitness</h2>
			<ul role="tablist" class="nav justify-content-end">
				<?php for ($i=0; $i < 6; $i++) { ?>
				<li class="nav-item"><a class="nav-link <?php echo $i == 0 ? 'active' : ''; ?>" href="#<?php echo $id . $i; ?>" data-toggle="tab"><?php echo $tab_title[$i]; ?></a></li>
				<?php } ?>
			</ul>
		</header>

		<div class="tab-content">
			<?php for ($i=0; $i < 6; $i++) { ?>

			<div id="<?php echo $id . $i; ?>" class="tab-pane <?php echo $i == 0 ? 'active' : ''; ?>" role="tabpanel">
				<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
					<div class="container-fluid">
						<div class="woocommerce columns-8">
							<?php @include'inc/components/product-item'; ?>
						</div><!-- .woocommerce -->
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->
			</div><!-- .tab-pane -->			

			<?php } ?>
		</div><!-- .tab-content -->
	</div>
</section>