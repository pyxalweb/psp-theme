<?php /* Template Name: Team Workshops */ ?>

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
        <h1>Team Workshops</h1>
        <div class="mt-1">
            <p>Elevate team performance with dynamic workshops that strengthen team culture, communication, and mental toughness.</p>
        </div>

        <a href="contact" class="button button--highlight | mi-center mt-2">Schedule Consultation</a>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-icon.svg" alt="" class="content-bg__circle">
    </section>

    <section class="content width-df | dg gtc-3 g-clamp-1-3-3 | gtc-1-vw500 | mb-4 | ta-c-vw500 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <div class="svg svg--57h | mi-center-vw500">
                <?php load_inline_svg('icon-light-bulb.svg'); ?>
            </div>
            <h2>Dynamic Presentations</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque hendrerit gravida justo, a aliquet est eleifend id. Suspendisse fermentum leo at turpis ultrices pretium.</p>
        </div>

        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <div class="svg svg--57h | mi-center-vw500">
                <?php load_inline_svg('icon-brain-tough.svg'); ?>
            </div>
            <h2>Mental Skill Techniques</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque hendrerit gravida justo, a aliquet est eleifend id. Suspendisse fermentum leo at turpis ultrices pretium.</p>
        </div>

        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <div class="svg svg--57h | mi-center-vw500">
                <?php load_inline_svg('icon-clipboard.svg'); ?>
            </div>
            <h2>Collaboration w/ Coaching Staff</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque hendrerit gravida justo, a aliquet est eleifend id. Suspendisse fermentum leo at turpis ultrices pretium.</p>
        </div>

        <!--
        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <div class="svg svg--57h | mi-center-vw500">
                <?php //load_inline_svg('icon-graph.svg'); ?>
            </div>
            <h2>Goal Setting</h2>
            <p>Players will learn the importance of process goals, outline the team's goals for the season, and complete individual S.M.A.R.T. goals. Goal setting locker room posters included.</p>
        </div>

        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <div class="svg svg--57h | mi-center-vw500">
                <?php //load_inline_svg('icon-trophy.svg'); ?>
            </div>
            <h2>Motivation</h2>
            <p>Learn to dig deep during crunch time by sharing personal, outside-of-the-box motivational stories and designing the visual aid “bag tag”. Individual bag tags included.</p>
        </div>
    
        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <div class="svg svg--57h | mi-center-vw500">
                <?php //load_inline_svg('icon-brain-visualization.svg'); ?>
            </div>
            <h2>Visualization</h2>
            <p>Learn to visualize like an Olympian! Players will learn about and practice the five senses of visualization. Personal audio tracks included.</p>
        </div>

        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <div class="svg svg--57h | mi-center-vw500">
                <?php //load_inline_svg('icon-brain-tough.svg'); ?>
            </div>
            <h2>Mental Toughness</h2>
            <p>Play to win, as opposed to making mistakes out of fear by defining mental toughness and developing mental toughness strategies. Mental toughness mini posters included.</p>
        </div>

        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <div class="svg svg--57h | mi-center-vw500">
                <?php //load_inline_svg('icon-smile.svg'); ?>
            </div>
            <h2>Staying Positive</h2>
            <p>Players will learn to better recognize negative self-talk and learn reframing techniques. Positive affirmation mini posters included.</p>
        </div>

        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <div class="svg svg--57h | mi-center-vw500">
                <?php //load_inline_svg('icon-mentor.svg'); ?>
            </div>
            <h2>Team Building</h2>
            <p>The group will compete in the strength photo challenge and other hands-on team chemistry activities, which help to unify teams and recognize player roles.</p>
        </div>
        -->
    </section>

    <section class="mbl-4 pbl-4 bg-grey-100 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="content width-df | text-1000--h2 | mb-4 pb-4 ta-c bb-2px-white">
            <h2>Choose A Workshop</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque hendrerit gravida justo, a aliquet est eleifend id.<br>Suspendisse fermentum leo at turpis ultrices pretium.</p>

            <a href="contact" class="button button--highlight | mi-center mt-2">Schedule Consultation</a>
        </div>

        <div class="content width-df | numbered-content | boxed-content | mb-4 pb-4 ta-c bb-2px-white | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
            <div class="boxed-content__item | bg-white b-2px-grey-100 br-2 bs-300" style="opacity:0;">
                <h2>Goal Setting</h2>
                <p>Players will learn the importance of process goals, outline the team's goals for the season, and complete individual S.M.A.R.T. goals. Goal setting locker room posters included.</p>
            </div>

            <div class="boxed-content__item | bg-white b-2px-grey-100 br-2 bs-300" style="opacity:0;">
                <h2>Motivation</h2>
                <p>Learn to dig deep during crunch time by sharing personal, outside-of-the-box motivational stories and designing the visual aid “bag tag”. Individual bag tags included.</p>
            </div>
        
            <div class="boxed-content__item | bg-white b-2px-grey-100 br-2 bs-300" style="opacity:0;">
                <h2>Visualization</h2>
                <p>Learn to visualize like an Olympian! Players will learn about and practice the five senses of visualization. Personal audio tracks included.</p>
            </div>

            <div class="boxed-content__item | bg-white b-2px-grey-100 br-2 bs-300" style="opacity:0;">
                <h2>Mental Toughness</h2>
                <p>Play to win, as opposed to making mistakes out of fear by defining mental toughness and developing mental toughness strategies. Mental toughness mini posters included.</p>
            </div>

            <div class="boxed-content__item | bg-white b-2px-grey-100 br-2 bs-300" style="opacity:0;">
                <h2>Staying Positive</h2>
                <p>Players will learn to better recognize negative self-talk and learn reframing techniques. Positive affirmation mini posters included.</p>
            </div>

            <div class="boxed-content__item | bg-white b-2px-grey-100 br-2 bs-300" style="opacity:0;">
                <h2>Team Building</h2>
                <p>The group will compete in the strength photo challenge and other hands-on team chemistry activities, which help to unify teams and recognize player roles.</p>
            </div>
        </div>

        <div class="content width-df | text-1000--h2 | ta-c">
            <a href="contact" class="button button--highlight | mi-center mt-2">Schedule Consultation</a>
        </div>
    </section>

    <section class="content-photo | content-photo--gtc-66-33-vw800 | content-photo--gtc-1-vw500 | content width-df | mbl-4 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="content-photo__container | mb-2-vw500 mb-1--h2" style="opacity:0;">
            <div>
                <h2>Building a Winning Team: Workshops for Mental Toughness and Team Culture</h2>
                <p>Team workshops are dynamic presentations, which introduce mental toughness techniques, strengthen team culture, and improve group communication. Collaboration with the coaching staff on a custom agenda ensures the specific concepts most important to the team are covered. Player folders, mini posters, and audio tracks are provided, which reinforce the workshop's takeaways and remind players to apply the techniques they learned during the workshop. Players learn how to celebrate differences, eliminate jealousy, and recognize that their own unique skills contribute to the team's success.</p>

                <div class="box | mt-2">
                    <div class="box__item | box__list">
                        <ul>
                            <li>Dynamic presentations</li>
                            <li>Mental skill techniques</li>
                            <li>Collaboration w/ coaching staff</li>
                            <li>Celebrate differences</li>
                            <li>Eliminate jealousy</li>
                        </ul>
                    </div>

                    <div class="box__item | box__sale">
                        <div class="text-800">
                            <p>$350 per workshop</p>
                        </div>

                        <a href="/contact" class="button button--highlight | mi-center">Schedule Consultation</a>

                        <div class="text-300">
                            <p>Additional travel fees may apply</p>
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
