<?php /* Template Name: Homepage */ ?>

<?php
get_header();
?>

<section id="site-masthead" class="masthead" role="complementary" aria-label="Page heading and decorative looping video">
    <div class="masthead__overlay homepage | animate-scroll-fade-in" data-delay="0.5" style="opacity:0;">
        <div class="masthead__overlay__box">
            <div class="masthead__overlay__heading">
                <h1><?php echo get_the_title(); ?></h1>
            </div>
            <div class="masthead__overlay__subtext">
                <p><?php echo get_field('credentials'); ?></p>
                <p><?php echo get_field('titles'); ?></p>
            </div>
            <div class="masthead__overlay__text">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
            </div>
            <div class="masthead__overlay__buttons">
                <a href="/contact" class="button button--highlight">Schedule Consultation</a>
                <a href="/waksmans-workbook" class="button button--highlight">Waksman's Workbook</a>
            </div>
        </div>
    </div>

    <video class="masthead__media video" autoplay muted loop playsinline>
        <source src="<?php echo get_template_directory_uri(); ?>/videos/homepage.mp4" type="video/mp4" />
    </video>
</section>

<main id="site-content" class="site-content">
    <section class="callouts | content width-df | mbl-7 mbl-3-vw400 | text-500--h2 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="100%">
        <div class="callout" style="opacity:0;">
            <div class="callout__text | text-100">
                <div class="svg svg--57h | svg--mi-center-vw800">
                    <?php load_inline_svg('icon-brain.svg'); ?>
                </div>
                <h2><?php echo get_field('callout_1_heading'); ?></h2>
                <p><?php echo get_field('callout_1_paragraph'); ?></p>
            </div>
            <div class="callout__button">
                <a href="/individual-sessions" aria-label="Learn more about Individual Sessions" class="button">Learn More</a>
            </div>
        </div>

        <div class="callout" style="opacity:0;">
            <div class="callout__text | text-100">
                <div class="svg svg--57h | svg--mi-center-vw800">
                    <?php load_inline_svg('icon-clipboard.svg'); ?>
                </div>
                <h2><?php echo get_field('callout_2_heading'); ?></h2>
                <p><?php echo get_field('callout_2_paragraph'); ?></p>
            </div>
            <div class="callout__button">
                <a href="/team-workshops" aria-label="Learn more about Team Workshops" class="button">Learn More</a>
            </div>
        </div>

        <div class="callout" style="opacity:0;">
            <div class="callout__text | text-100">
                <div class="svg svg--57h | svg--mi-center-vw800">
                    <?php load_inline_svg('icon-parents.svg'); ?>
                </div>
                <h2><?php echo get_field('callout_3_heading'); ?></h2>
                <p><?php echo get_field('callout_3_paragraph'); ?></p>
            </div>
            <div class="callout__button">
                <a href="/parenting-workshops" aria-label="Learn more about Parenting Workshops" class="button">Learn More</a>
            </div>
        </div>

        <div class="callout" style="opacity:0;">
            <div class="callout__text | text-100">
                <div class="svg svg--57h | svg--mi-center-vw800">
                    <?php load_inline_svg('icon-mentor.svg'); ?>
                </div>
                <h2><?php echo get_field('callout_4_heading'); ?></h2>
                <p><?php echo get_field('callout_4_paragraph'); ?></p>
            </div>
            <div class="callout__button">
                <a href="/student-mentoring" aria-label="Learn more about Student Mentoring" class="button">Learn More</a>
            </div>
        </div>
    </section>

    <section class="mbl-7 mbl-3-vw400 bg-grey-swoop | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="content-photo | content-photo--gtc-1-vw300 | content width-df">
            <div class="content-photo__container | pbl-5 pbl-3-vw400 | animate-scroll-slide-horizontal" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="-300">
                <div class="content-photo__text | text-1000--h2 | ta-c-vw300">
                    <div class="svg svg--57h | svg--mi-center-vw300">
                        <?php load_inline_svg('icon-light-bulb.svg'); ?>
                    </div>
                    <h2><?php echo get_field('bio_heading'); ?></h2>
                    <div class="gap-line | gap-line--vw300 | text-700">
                        <p><?php echo get_field('bio_tagline'); ?></p>
                    </div>
                    <p><?php echo get_field('bio_paragraph'); ?></p>
                    <a href="/about-elliott" aria-label="Learn more about Elliott Waksman" class="button | mi-center-vw300">About Elliott</a>
                </div>
            </div>

            <div class="image--maxheight-760 image--circle--vw300 image--position-top--vw200 | pb-3-vw300 | animate-scroll-slide-horizontal" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="300">
                <img src="<?php echo get_template_directory_uri(); ?>/photos/elliott-waksman.jpg" alt="Elliott Waksman - Sport Psychologist in Portland, Oregon">
            </div>
        </div>
    </section>

    <section class="content width-df | mbl-7 mbl-3-vw400 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="dg g-clamp-1-5-5 gtc-25-75 gtc-1-vw300">
            <div class="ta-c-vw200 | gap-line | gap-line--vw200 | text-1000--h2">
                <h2><?php echo get_field('testimonials_heading'); ?></h2>
            </div>

            <div class="ta-c-vw200 | list-boxes list-boxes--4 list-boxes--rounded">
                <div class="mb-1">
                    <p><?php echo get_field('testimonials_intro'); ?></p>
                </div>
                <?php /*
                <ul>
                    <li>Nike</li>
                    <li>University of Portland</li>
                    <li>Portland State University</li>
                    <li>Jesuit High School</li>
                    <li>Willamette University</li>
                    <li>Lincoln High School</li>
                    <li>Oregon Athletic Coaches</li>
                    <li><a href="success-stories">And Many More...</a></li>
                </ul>
                */ ?>
                <?php echo get_field('testimonials_list'); ?>
            </div>
        </div>

        <div class="testimonials | content-slider pagination-text | mbl-5 mbl-3-vw400 | text-600 ta-c">
            <div class="glide" data-autoplay="10000">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
                        <figure class="testimonials__item | glide__slide">
                            <blockquote>I've been coaching for 15 years, and the number one thing athletes lack in their training is the practice of their mental game. Elliott immediately made an impact on how our players perceived sport psychology and how they worked on their mental toughness. Without a doubt, Elliott was a major part of our success this year. We set a school record with seven wins and four top five finishes.</blockquote>
                            <figcaption>Patrick Daugherty, <cite>Head Golf Coach, Willamette University</cite></figcaption>
                        </figure>

                        <figure class="testimonials__item | glide__slide">
                            <blockquote>Elliott played a direct and significant role in our success this past season by helping to create a strong chemistry and providing our players with the tools to build their confidence and be prepared to face adversity.</blockquote>
                            <figcaption>Pat Coons, <cite>Head Boys Basketball Coach, Westview High School, 2010 Oregon Coach of the Year</cite></figcaption>
                        </figure>

                        <figure class="testimonials__item | glide__slide">
                            <blockquote>Elliott played a major role helping Jesuit become the 2016 State Champions. We used his visualization audio track as a routine to mentally prepare for games. It was just as valuable as our pregame infield/outfield drills.</blockquote>
                            <figcaption>Colin Griffin, <cite>Head Baseball Coach, Jesuit High School, 2016 Oregon Coach of the Year</cite></figcaption>
                        </figure>

                        <figure class="testimonials__item | glide__slide">
                            <blockquote>Scott read and filled out your workbook and said it changed his life. He takes it with him to all his tournaments.</blockquote>
                            <figcaption>Alice, <cite>Sport Mother, La Salle High School, Milwaukie, Oregon</cite></figcaption>
                        </figure>
                    </div>

                    <div class="glide__bullets" data-glide-el="controls[nav]">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-7 mt-3-vw400 bg-grey-swoop | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="content-photo | content-photo--gtc-1-vw300 | content width-df | pt-3-vw300">
            <div class="content-photo__container | o-2 | o-1-vw500 | pbl-5 pbl-3-vw300 pt-0-vw300 | animate-scroll-slide-horizontal" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="300">
                <div class="content-photo__text | ta-c-vw300 | text-1000--h2">
                    <h2>Waksman's Workbook</h2>
                    
                    <div class="points | text-500--h3 | mt-1">
                        <div class="points__item">
                            <div class="svg svg--57h | mi-center-vw300">
                                <?php load_inline_svg('icon-smile.svg'); ?>
                            </div>
                            <div class="points__text">
                                <h3>Improve Self-Confidence</h3>
                                <p>Learn practical techniques to bounce back from mistakes and build self-confidence.</p>
                            </div>
                        </div>

                        <div class="points__item">
                            <div class="svg svg--57h | mi-center-vw300">
                                <?php load_inline_svg('icon-trophy.svg'); ?>
                            </div>
                            <div class="points__text">
                                <h3>Increase Motivation Levels</h3>
                                <p>Fun exercises, like Waksman's "bag-tag" technique spark persistence and motivation.</p>
                            </div>
                        </div>

                        <div class="points__item">
                            <div class="svg svg--57h | mi-center-vw300">
                                <?php load_inline_svg('icon-graph.svg'); ?>
                            </div>
                            <div class="points__text">
                                <h3>Success On & Off the Field</h3>
                                <p>Grit and mental toughness are life skills every student-athlete can learn to improve their game and quality of life.</p>
                            </div>
                        </div>
                    </div>

                    <a href="/waksmans-workbook" aria-label="Order Waksman's Workbook Now" class="button button--highlight | mt-2-vw300 mi-center-vw300">Order Now</a>
                </div>
            </div>

            <div class="content-photo__container | image--maxheight-760 | image--maxheight-reset | image--objectfit--scaledown | animate-scroll-slide-horizontal | mi-center-child | pt-4-vw300" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="-300">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/photos/waksmans-sport-psychology-workbook-no-shadow.png" type="image/png" media="(max-width: 800px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/photos/waksmans-sport-psychology-workbook.png" alt="Waksman's Sport Psychology Program: A Practical Mental Skills Workbook for Student Athletes">
                </picture>
            </div>
        </div>
    </section>
</main>

<?php
get_template_part( 'template-parts/admin', 'meta' );
get_template_part( 'template-parts/admin', 'edit' );
?>

<?php
get_footer();
