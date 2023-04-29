<?php /* Template Name: Individual Sessions */ ?>

<?php
get_header();
?>

<?php
while ( have_posts() ) :
	the_post();
endwhile;

// get_template_part( 'template-parts/content', 'masthead' );
?>

<main id="site-content" <?php post_class($class = 'site-content interior no-masthead'); ?>>
	<?php //get_template_part( 'template-parts/content', 'page' ); ?>

    <section class="content width-df | pbl-7 pbl-3-vw400 ta-c | content-bg | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <h1>Individual Sessions</h1>
        <div class="mt-1">
            <p>Maximize your athletic potential with tailored and confidential sports psychology services.</p>
        </div>

        <a href="contact" class="button button--highlight | mi-center mt-2">Schedule Consultation</a>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-icon.svg" alt="" class="content-bg__circle">
    </section>

    <section class="content width-df | dg gtc-3 g-clamp-1-3-3 | gtc-1-vw500 | mb-4 | ta-c-vw500 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <div class="svg svg--57h | mi-center-vw500">
                <?php load_inline_svg('icon-light-bulb.svg'); ?>
            </div>
            <?php echo get_field('box_1'); ?>
        </div>

        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <div class="svg svg--57h | mi-center-vw500">
                <?php load_inline_svg('icon-calendar.svg'); ?>
            </div>
            <?php echo get_field('box_2'); ?>
        </div>

        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <div class="svg svg--57h | mi-center-vw500">
                <?php load_inline_svg('icon-confidential.svg'); ?>
            </div>
            <?php echo get_field('box_3'); ?>
        </div>
    </section>

    <section class="content-photo | content-photo--gtc-66-33-vw800 | content-photo--gtc-1-vw500 | content width-df | mbl-4 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="content-photo__container | mb-2-vw500 mb-1--h2" style="opacity:0;">
            <div>
                <?php echo get_field('split_content_text_1'); ?>
                
                <div class="box | mt-2">
                    <div class="box__item | box__list">
                        <?php echo get_field('list_items'); ?>
                    </div>

                    <div class="box__item | box__sale">
                        <div class="text-800">
                            <p><?php echo get_field('cost'); ?></p>
                        </div>

                        <a href="contact" class="button button--highlight | mi-center">Schedule Consultation</a>

                        <div class="text-300">
                            <p><?php echo get_field('travel_fees'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="image--maxheight-760 image--rounded image--circle--vw200" style="opacity:0;">
            <?php
            $image = get_field('split_content_image_1');
            if ($image):
                $url = $image['url'];
                $alt = $image['alt'];
            ?>
            <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="676" height="760">
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_template_part( 'template-parts/admin', 'meta' );
get_template_part( 'template-parts/admin', 'edit' );
?>

<?php
get_footer();
