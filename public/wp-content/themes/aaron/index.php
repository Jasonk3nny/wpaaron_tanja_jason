<!--
    TODO: – Add title
    – Add keywords & description
    - Run https://realfavicongenerator.net/ for favicons, tile & touchicons
    – Run https://realfavicongenerator.net/social for og image & info
    - Edit privacy info
    - Create E-mail-address datenschutz@
    – Host fonts locally with https://google-webfonts-helper.herokuapp.com/fonts
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Site for Aaron Miller">
    <meta name="keywords" content="Choreographer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aaron G. Miller | Choreographer</title>
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/favicons/upfav.svg">
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <header>
        <a href="/">
            <h1>Aaron G. Miller | <span style="font-weight: 300; text-transform: none;">Choreographer</span> </h1>
        </a>
        <nav id="mainnav">
            <button id="hamburger" class="closed">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
            </button>
            <ul>
                <li><a href="#workshops">Workshops</a></li>
                <li><a href="#about">About Me</a></li>
                <li><a href="#news">News</a></li>
            </ul>
        </nav>
        <div class="believe">
            <?php
            $header_query = new WP_Query(array('p' => 30));
            if ($header_query->have_posts()) :
                while ($header_query->have_posts()) : $header_query->the_post();
                    if (has_post_thumbnail()) { ?>
                        <img class="header-image" src="<?php the_post_thumbnail(); ?>
                    <?php
                    } ?>

                    <h2>
                        <?php the_title(); ?>
                    </h2>
                    <a href=" #" class="button">Book Workshop</a>

                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
        </div>
    </header>
    <main>

        <section id="workshops">
            <?php
            $header_query = new WP_Query(array('p' => 45));
            if ($header_query->have_posts()) :
                while ($header_query->have_posts()) : $header_query->the_post(); ?>
                    <p class="super-headline"><?php echo get_post_custom_values('super-headline')[0]; ?></p>
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

            <div class="grid-wrapper">
                <?php
                // Workshop Query
                $level_query = new WP_Query(array('category_name' => 'level', 'order' => 'ASC'));
                if ($level_query->have_posts()) :
                    while ($level_query->have_posts()) : $level_query->the_post(); ?>
                        <div class="level-<?php echo get_post_custom_values('Level')[0]; ?>">

                            <p class="number-desktop"><?php echo get_post_custom_values('Level')[0]; ?></p>
                            <div class="step-<?php echo get_post_custom_values('Level')[0]; ?>-container">
                                <div class="icon-container">
                                    <div><span class="icon"><?php the_post_thumbnail(); ?></span></div>
                                    <p class="number-mobile"><?php echo get_post_custom_values('Level')[0]; ?></p>
                                </div>
                                <div>
                                    <h3><?php the_title(); ?></h3>
                                    <?php the_content(); ?>
                                    <a href="#" class="button">Book Workshop</a>
                                </div>
                                <div class="quote-<?php echo get_post_custom_values('Level')[0]; ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/quote.svg" alt='quote sign'>
                                    <blockquote><?php echo get_post_custom_values('Level Slogan')[0]; ?></blockquote>
                                </div>
                            </div>
                        </div>

                        <p class='apply-<?php echo get_post_custom_values('Level')[0]; ?>'><?php echo get_post_custom_values('apply')[0]; ?></p>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </section>

        <section id="about">
            <div class="about-container">
                <?php
                $aboutme_query = new WP_Query(array('p' => 13));
                if ($aboutme_query->have_posts()) :
                    while ($aboutme_query->have_posts()) : $aboutme_query->the_post(); ?>
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        }
                        ?>
                        <div class="about-text">
                            <article>
                                <p class="super-headline"><?php echo get_post_custom_values('super-headline')[0]; ?></p>
                                <h2>
                                    <?php the_title(); ?>
                                </h2>
                                <?php the_content(); ?>
                                <a class="button">Learn more</a>
                            </article>

                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                        </div>
            </div>
        </section>
        <section id="news">
            <?php
            $newsheader_query = new WP_Query(array('p' => 42));
            if ($newsheader_query->have_posts()) :
                while ($newsheader_query->have_posts()) : $newsheader_query->the_post(); ?>
                    <p class="super-headline"><?php echo get_post_custom_values('super-headline')[0]; ?></p>
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

            <div class="flex-wrapper">
                <?php
                $news_query = new WP_Query(array('category_name' => 'news'));
                if ($news_query->have_posts()) :
                    while ($news_query->have_posts()) : $news_query->the_post(); ?>

                        <article>
                            <h3><?php the_title(); ?></h3>
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail();
                            }
                            ?>
                            <?php the_content(); ?>
                            <a href="#" class="button">Read more</a>
                        </article>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </section>
    </main>

    <footer>
        <h4>Thank you for your interest in Art!</h4>
        <p>© 2004 – 2023 Aaron G. Miller</p>
        <a href="#">Imprint & Privacy</a>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            // MainNav.init();
        });
    </script>
    <?php wp_footer(); ?>
</body>

</html>