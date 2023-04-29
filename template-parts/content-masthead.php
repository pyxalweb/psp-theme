<section id="site-masthead" class="masthead" role="complementary" aria-label="Page heading and decorative photo">
    <div class="masthead__overlay interior | animate-scroll-fade-in" data-delay="0.5">
        <div class="masthead__overlay__box">
            <div class="masthead__overlay__heading">
                <?php the_title( '<h1>', '</h1>' ); ?>
            </div>
        </div>
    </div>

    <div class="masthead__media photo">
		<?php
		$image = get_field('masthead');
		if ($image):
			$url = $image['url'];
			$alt = $image['alt'];
		?>
		<img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="1920" height="500">
        <?php endif; ?>
	</div>
</section>