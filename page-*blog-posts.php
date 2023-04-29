<?php /* Template Name: Parent Info */ ?>

<?php
get_header();
?>

<?php
while ( have_posts() ) :
	the_post();
endwhile;

get_template_part( 'template-parts/content', 'masthead' );

// get posts from specific category
$args = array(
    'post_type' => 'post',
    'ignore_sticky_posts' => 1
);
$current_slug = add_query_arg(array(), $wp->request);
if ($current_slug == 'parent-info') {
    $args = ['cat' => '2'];
}
$postsCode = new WP_Query($args);
while($postsCode->have_posts()) {
    $postsCode->the_post();
    $categories = get_the_category();
?>

    		<li>
        		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="post-meta">
					<time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y-m-d') ?></time>
					<?php if ( ! empty($categories[1])) { ?>
					&bull; 
					<span>
						<?php
							echo '<span>';
							echo esc_html( $categories[1]->name );
							echo '</span>';
						?>
					</span>  
					<?php
						}
					?>
				</div>
			</li>

<?php
}
?>











<main id="site-content" <?php post_class($class = 'site-content interior'); ?>>
	<?php //get_template_part( 'template-parts/content', 'page' ); ?>

    <section class="content width-df | mt-7 mb-2 mbl-3-vw400 ta-c | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <h2>Parent Info</h2>
    </section>
    
    
</main>

<?php
get_template_part( 'template-parts/admin', 'meta' );
get_template_part( 'template-parts/admin', 'edit' );
?>

<?php
get_footer();
