<?php /* Template Name: About */ ?>

<?php
get_header();
?>

<?php
while ( have_posts() ) :
	the_post();
endwhile;

// get_template_part( 'template-parts/content', 'masthead' );
?>

<main id="site-content" <?php post_class($class = 'site-content interior no-masthead | mb-1--h2'); ?>>
    <?php //get_template_part( 'template-parts/content', 'page' ); ?>

    <section class="content-photo | content-photo--gtc-1-vw500 | content width-df | mt-7 mb-4 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div style="opacity:0;">
            <h1>Empowering Athletes</h1>
            <?php echo get_field('split_content_text_1'); ?>
        </div>

        <div class="image--maxheight-760 image--rounded | image--size-50--vw500 | mi-center-child-vw500 | image--circle--vw200 image--position-down--vw200 image--size-100--vw200">
            <?php
            $image = get_field('split_content_image_1');
            if ($image):
                $url = $image['url'];
                $alt = $image['alt'];
            ?>
            <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="676" height="744">
            <?php endif; ?>
        </div>
    </section>

    <section class="content width-df | dg gtc-2 g-clamp-1-3-3 | gtc-1-vw500 | mbl-4 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="df fd-c jc-c | o-2 | o-1-vw500">
            <div>
                <?php echo get_field('split_content_text_2'); ?>
            </div>
        </div>

        <div class="df fd-c jc-c p-clamp-1-5-2 | br-2 | o-1 | o-2-vw500 | bg-gradient">
            <div class="video-embed">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/5LVy1iWk54o" title="YouTube video player" frameallow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section class="content width-df | dg gtc-2 g-clamp-1-3-3 | gtc-1-vw500 | mbl-4 mbl-2-vw500 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="b-2px-grey-100 br-2 p-2">
            <?php echo get_field('box_1'); ?>
        </div>
        <div class="b-2px-grey-100 br-2 p-2">
            <?php echo get_field('box_2'); ?>
        </div>
    </section>

    <section class="content width-df | dg gtc-2 g-clamp-1-3-3 | gtc-1-vw500 | mbl-4 mbl-2-vw500 mb-4-vw500 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="b-2px-grey-100 br-2 p-2">
            <?php echo get_field('box_3'); ?>
        </div>
        <div class="b-2px-grey-100 br-2 p-2">
            <?php echo get_field('box_4'); ?>
        </div>
    </section>
</main>

<?php
get_template_part( 'template-parts/admin', 'meta' );
get_template_part( 'template-parts/admin', 'edit' );
?>

<?php
get_footer();
