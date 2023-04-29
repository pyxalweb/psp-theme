<?php /* Template Name: Success Stories */ ?>

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

    <section class="pbl-7 pbl-3-vw400 mb-7 mb-3-vw400 ta-c | content-bg | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="content width-df">
            <div class="svg svg--57h | mb-1 mi-center-child">
                <?php load_inline_svg('icon-smile.svg'); ?>
            </div>
            <h1>Success Stories & Testimonials</h1>
            <div class="mt-1">
                <p>See What Others Are Saying</p>
            </div>
        </div>

        <?php
		$image = get_field('masthead');
		if ($image):
			$url = $image['url'];
			$alt = $image['alt'];
		?>
		<img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="1920" height="500" class="content-bg__photo">
        <?php endif; ?>
    </section>

    <section class="expandable-list content width-df | mb-7 mb-3-vw400 | ta-c-vw200 | list-boxes list-boxes--4 list-boxes--rounded | mt-6 mt-3-vw400 mb-7 mb-3-vw400 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;" data-reduce="12">
        <div class="mb-1 ta-c">
            <p>Elliott Waksman is a well-renowned sport pyschologist in the Portland metro area. A few organizations he's worked with include:</p>
        </div>
        <ul>
            <li>Advantage Basketball Camps</li>
            <li>All In One Basketball</li>
            <li>Aloha High School</li>
            <li>Athletes In Motion</li>
            <li>Canby High School</li>
            <li>Concordia University</li>
            <li>Corban University</li>
            <li>David Douglas High School</li>
            <li>George Fox University</li>
            <li>Glazier Clinics</li>
            <li>Glendale Community College</li>
            <li>Grant High School</li>
            <li>Heritage High School</li>
            <li>Hood River Valley High School</li>
            <li>Irvington Tennis Club</li>
            <li>Jesuit High School</li>
            <li>The Kor Physical Therapy</li>
            <li>Lakeridge High School</li>
            <li>Lewis and Clark College</li>
            <li>Lincoln High School</li>
            <li>La Salle High School</li>
            <li>MVP Performance Training</li>
            <li>National Strength and Conditioning Association</li>
            <li>Nike</li>
            <li>North Marion High School</li>
            <li>North Salem High School</li>
            <li>Northwest Baseball Convention</li>
            <li>Northwest Futures Baseball</li>
            <li>Oregon Athletic Coaches</li>
            <li>Oregon Dream Cheerleading</li>
            <li>Oregon Dressage Society</li>
            <li>Oregon Premier Volleyball Club</li>
            <li>Oregon Xtreme Basketball</li>
            <li>Pacific University</li>
            <li>Pan American Taekwondo Union</li>
            <li>Portland City United Soccer</li>
            <li>Portland Community College</li>
            <li>Portland Jr Hawks Hockey</li>
            <li>Portland Golf Club</li>
            <li>Portland State University</li>
            <li>The Practice Facility</li>
            <li>Providence Hospital</li>
            <li>Skating Club of Oregon</li>
            <li>Southridge High School</li>
            <li>Stafford Hills Club</li>
            <li>Strength Farm CrossFit</li>
            <li>Sunset Athletic Club</li>
            <li>Sunset High School</li>
            <li>Therapeutic Associates Physical Therapy Clinics</li>
            <li>TWIST Sport Conditioning</li>
            <li>University of Portland</li>
            <li>Valley Catholic High School</li>
            <li>Vancouver Tennis Center</li>
            <li>Warner Pacific University</li>
            <li>Westview High School</li>
            <li>Willamette University</li>
        </ul>

        <button class="expandable-list__more">View More</button>
    </section>

    <section class="content width-df | quotes | mbl-7 mbl-3-vw400 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <figure>
            <h2>Elliott immediately made an impact.</h2>
            <blockquote>I've been coaching for 15 years, and the number one thing athletes lack in their training is the practice of their mental game. Elliott immediately made an impact on how our players perceived sport psychology and how they worked on their mental toughness. Without a doubt, Elliott was a major part of our success this year. We set a school record with seven wins and four top five finishes.</blockquote>
            <figcaption>Patrick Daugherty, <cite>Head Golf Coach, Willamette University</cite></figcaption>
        </figure>

        <figure>
            <h2>A direct and significant role in our success.</h2>
            <blockquote>Elliott played a direct and significant role in our success this past season by helping to create a strong chemistry and providing our players with the tools to build their confidence and be prepared to face adversity.</blockquote>
            <figcaption>Pat Coons, <cite>Head Boys Basketball Coach, Westview High School, 2010 Oregon Coach of the Year</cite></figcaption>
        </figure>

        <figure>
            <h2>A major role helping us become State Champions.</h2>
            <blockquote>Elliott played a major role helping Jesuit become the 2016 State Champions. We used his visualization audio track as a routine to mentally prepare for games. It was just as valuable as our pregame infield/outfield drills.</blockquote>
            <figcaption>Colin Griffin, <cite>Head Baseball Coach, Jesuit High School, 2016 Oregon Coach of the Year</cite></figcaption>
        </figure>

        <figure>
            <h2>It changed his life.</h2>
            <blockquote>Scott read and filled out your workbook and said it changed his life. He takes it with him to all his tournaments.</blockquote>
            <figcaption>Alice, <cite>Sport Mother, La Salle High School, Milwaukie, Oregon</cite></figcaption>
        </figure>

        <figure>
            <h2>We now have a much calmer and more supportive sideline.</h2>
            <blockquote>Elliott's approach to parent education provides immediate rewards to those in attendance. By teaching our parents how to best promote the success of their children, we now have a much calmer and more supportive sideline.</blockquote>
            <figcaption>Sean Janson, <cite>Executive Director, Washington Timbers Soccer Club</cite></figcaption>
        </figure>

        <figure>
            <h2>You did a terrific job!</h2>
            <blockquote>We had a great evening with you - engaging presentation and lively conversation. It was everything we hope for in our Teen Topic Talks. I really appreciate the time you took to prepare and the extra touches you provided. You did a terrific job!</blockquote>
            <figcaption>Brian Devine, <cite>Vice Principal, La Salle High School</cite></figcaption>
        </figure>
    </section>
</main>

<?php
get_template_part( 'template-parts/admin', 'meta' );
get_template_part( 'template-parts/admin', 'edit' );
?>

<?php
get_footer();
