<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package psp
 */
?>
<footer id="site-footer" class="footer">
	<div class="footer__container">
		<div class="footer__main | content width-df">
			<div class="footer__address footer__flex">
				<?php get_template_part( 'template-parts/content', 'contact-info' ); ?>
			</div>

			<div class="footer__nav footer__flex">
				<h2>Helpful Links</h2>
				<?php get_template_part( 'template-parts/site', 'navigation-footer' ); ?>
			</div>

			<div class="footer__social">
				<h2>Follow Me</h2>
				<?php get_template_part( 'template-parts/content', 'social' ); ?>
			</div>
		</div>

		<div class="footer__quotes">
			<div class="content width-df">
				<figure>
					<blockquote>Being nervous is not something you should be ashamed of.<br>Nervous means you care, you really want to do well.</blockquote>
					<figcaption>Paula Creamer, <cite>LGPA Player</cite></figcaption>
				</figure>

				<figure>
					<blockquote>Attention to detail. Being Responsible. Being on time.<br>All of those super basic life things that really anybody in any industry would appreciate and welcome, dancers [athletes] have over and over.</blockquote>
					<figcaption>Bonnie Kim, <cite>Former Top Five Dancer in Toronto</cite></figcaption>
				</figure>

				<figure>
					<blockquote>Arrogance and confidence are different. Confident is leading by example and knowing it's not about you.</blockquote>
					<figcaption>Tom Dillard, <cite>Retired Navy Seal</cite></figcaption>
				</figure>
			</div>
		</div>

		<div class="footer__links">
			<div class="footer__links__container | content width-md">
				<p>© <?php echo date('Y'); ?> Elliott Waksman<span> • </span><br><a href="https://alxwntr.com" target="_blank"> Website by AW</a></p>
			</div>
		</div>
	</div>


</footer>


<?php wp_footer(); ?>

</body>
</html>
