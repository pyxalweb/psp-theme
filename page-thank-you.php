<?php /* Template Name: Thank You */ ?>

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
	<?php // get_template_part( 'template-parts/content', 'page' ); ?>

    <section class="content width-df | mbl-7 mbl-3-vw400 ta-c | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <?php the_content(); ?>

        <div class="mbl-2">
            <?php echo get_field('content_1'); ?>
        </div>

        <?php
            // Contact - Thank You
            if (is_page(145)) {
        ?>
            <a href="/" class="button | mi-center">Return Home</a>
        <?php
            // Waksman's Workbook - Thank You - Mail
            } elseif (is_page(164)) {
        ?>
            <div class="text-700 | mb-1 pt-2 bt-2px-grey-100">
                Or you can pay via PayPal!
            </div>

            <a href="#" class="button button--highlight | mi-center">Pay Now</a>
        <?php
            // Waksman's Workbook - Thank You - PayPal
            } elseif (is_page(171)) {
        ?>
            <a href="#" class="button button--highlight | mi-center">Pay Now</a>

            <script>
                setTimeout(() => {
                    window.location.href = "https://google.com";
                }, 10000)
            </script>
        <?php
            }
        ?>
    </section>
</main>

<?php
get_template_part( 'template-parts/admin', 'meta' );
get_template_part( 'template-parts/admin', 'edit' );
?>

<?php
get_footer();
