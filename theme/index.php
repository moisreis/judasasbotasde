<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JUDAS,_As_botas_de
 */

get_header();
?>
<!-- Start of main page -->
<main id="index">
    <!-- Display authors carousel -->
    <section class="px-8 xl:px-12 flex flex-row justify-between mb-12">
        <?php
        // Arguments to get authors with highest post counts
        $args = array(
            'orderby' => 'post_count', // Sort by post count
            'order' => 'DESC', // Sort in descending order
            'number' => 12 // Get maximum of 12 authors
        );

        // Retrieve authors with the given arguments
        $authors = get_users($args);

        // Check if there are any authors with more than 1 post
        if (!empty($authors)) {

            // Start of author div
            echo '<!-- Author div -->';
            echo '<div class="swiper authorSwiper">';
            echo '<div class="swiper-wrapper justify-between">';

            // Display authors carousel if authors with more than 1 post exist
            foreach ($authors as $author) {
                $author_id = $author->ID;
                $author_link = get_author_posts_url($author_id);

                // Count the number of posts for the current author
                $post_count = count_user_posts($author_id);

                // Retrieve author image
                $author_image = get_the_author_meta('author_image', $author_id);

                // Display author information if they have more than 1 post
                if ($post_count > 0) {

                    echo '<!-- Author Swiper slide -->';
                    echo '<div class="swiper-slide">';
                    // Display author image and name with a link to their posts
                    echo '<a class="w-24 flex flex-col justify-center content-center items-center gap-2" href="' . $author_link . '">';
                    echo '<img class="w-16 h-16 rounded-full object-cover saturate-0" src="' . esc_url($author_image) . '" alt="' . esc_html($author->display_name) . '">';
                    echo '<span class="block text-foreground/60 text-xs text-center">' . esc_html($author->display_name) . '</span>';
                    echo '</a>';
                    echo '</div>';
                }
            }

            echo '</div>';

            // End of author div
            echo '</div>';
        }
        ?>
        <!-- Initialize the Swiper plugin -->
        <script id="swiper-handler">
            var swiper = new Swiper(".authorSwiper", {
                slidesPerView: 8,
                spaceBetween: 32,
                breakpoints: {
                    "@0.00": {
                        slidesPerView: 3,
                        spaceBetween: 12,
                    },
                    "@0.75": {
                        slidesPerView: 6,
                        spaceBetween: 24,
                    },
                    "@1.00": {
                        slidesPerView: 8,
                        spaceBetween: 24,
                    },
                },
            });
        </script>
    </section>
    <!-- Main articles -->
    <section class="px-8 xl:px-12 mb-12">
        <h2 class="capitalize font-serif text-4xl font-black mb-6 after:block after:h-[8px] after:mt-2 after:w-full after:border-t-2 after:border-b">Mais recente</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-12">
            <?php
            // Retrieve the two most recent posts
            $args = array(
                'posts_per_page' => 3,
            );
            $latest_posts = get_posts($args);

            // Loop through each post
            foreach ($latest_posts as $post) :
                // Extract post data
                $post_categories = wp_get_post_categories($post->ID);
                $post_title = $post->post_title;
                $post_excerpt = $post->post_excerpt;
                $post_author_id = $post->post_author; // get the author ID
                $post_author = get_the_author_meta('display_name', $post->post_author);
                $post_image_id = get_post_thumbnail_id($post->ID);
                $post_image_url = get_the_post_thumbnail_url($post->ID);
                $post_image = get_post($post_image_id);
                $post_permalink = get_permalink($post->ID);

                // Get the author image
                $author_image = get_the_author_meta('author_image', $post_author_id);

                // Display post using the HTML code
            ?>
                <!-- Newest article -->
                <a class="group" href="<?php echo $post_permalink ?>">
                    <div class="flex flex-col gap-2" id="newest-post">
                        <div class="flex flex-col gap-1">
                            <img class="h-80 object-cover object-center" src="<?php echo $post_image_url ?>" alt="<?php echo the_title(); ?>">
                        </div>
                        <h3 class="group-hover:opacity-80 font-bold capitalize text-xl transition-opacity"><?php echo $post_title ?></h3>
                        <span class="line-clamp-3 text-foreground/90 text-sm"><?php the_excerpt(); ?></span>
                        <div class="flex flex-row gap-2 justify-start content-center items-center mt-1">
                            <!-- Loads the author picture -->
                            <?php if (!empty($author_image)) : // Check if the author has a custom profile picture 
                            ?>
                                <!-- Custom author image -->
                                <img class="w-6 h-6 rounded-full object-cover saturate-0" src="<?php echo esc_url($author_image); ?>" alt="<?php the_author(); ?>">
                            <?php else : ?>
                                <!-- Default author avatar -->
                                <?php echo get_avatar(get_the_author_meta('email'), 64, '', '', array('class' => 'w-6 h-6 rounded-full object-cover saturate-0')); ?>
                            <?php endif; ?>
                            <span class="text-xs text-foreground/60"><?php echo $post_author ?></span>
                            <span class="text-sm text-foreground/60">·</span>
                            <span class="text-xs text-foreground/60"><?php echo get_post_reading_time(); ?> min</span>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- Cinema content -->
    <section class="px-8 xl:px-12 mb-12">
        <h2 class="capitalize font-serif text-4xl font-black mb-6 after:block after:h-[8px] after:mt-2 after:w-full after:border-t-2 after:border-b">Críticas de Cinema</h2>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12">
            <!-- New cinema post column -->
            <div class="col-span-full lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-12">
                <?php
                // Retrieve the 2 latest posts
                $args = array(
                    'posts_per_page' => 2,
                    'category_name' => 'cinema',
                );
                $latest_cinema_posts = get_posts($args);

                // Loop through each post
                foreach ($latest_cinema_posts as $latest_cinema_post) {
                    // Extract post data
                    $post_categories = wp_get_post_categories($latest_cinema_post->ID);
                    $post_title = $latest_cinema_post->post_title;
                    $post_excerpt = $latest_cinema_post->post_excerpt;
                    $post_author_id = $latest_cinema_post->post_author; // get the author ID
                    $post_author = get_the_author_meta('display_name', $latest_cinema_post->post_author);
                    $post_image_id = get_post_thumbnail_id($latest_cinema_post->ID);
                    $post_image_url = get_the_post_thumbnail_url($latest_cinema_post->ID);
                    $post_image = get_post($post_image_id);
                    $post_permalink = get_permalink($latest_cinema_post->ID);

                    // Get the author image
                    $author_image = get_the_author_meta('author_image', $post_author_id);

                    // Display post using the HTML code
                ?>
                    <!-- Newest cinema article -->
                    <a class="group" href="<?php echo $post_permalink ?>">
                        <div class="flex flex-col gap-2" id="newest-post">
                            <div class="flex flex-col gap-1">
                                <img class="h-80 object-cover object-center" src="<?php echo $post_image_url ?>" alt="<?php echo the_title(); ?>">
                            </div>
                            <h3 class="group-hover:opacity-80 font-bold capitalize text-xl transition-opacity"><?php echo $post_title ?></h3>
                            <span class="line-clamp-3 text-foreground/90 text-sm"><?php the_excerpt(); ?></span>
                            <div class="flex flex-row gap-2 justify-start content-center items-center mt-1">
                                <!-- Loads the author picture -->
                                <?php if (!empty($author_image)) : // Check if the author has a custom profile picture 
                                ?>
                                    <!-- Custom author image -->
                                    <img class="w-6 h-6 rounded-full object-cover saturate-0" src="<?php echo esc_url($author_image); ?>" alt="<?php the_author(); ?>">
                                <?php else : ?>
                                    <!-- Default author avatar -->
                                    <?php echo get_avatar(get_the_author_meta('email'), 64, '', '', array('class' => 'w-6 h-6 rounded-full object-cover saturate-0')); ?>
                                <?php endif; ?>
                                <span class="text-xs text-foreground/60"><?php echo $post_author ?></span>
                                <span class="text-sm text-foreground/60">·</span>
                                <span class="text-xs text-foreground/60"><?php echo get_post_reading_time(); ?> min</span>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
            <!-- Cinema articles section -->
            <div class="col-span-full lg:col-span-4 border-t pt-6 xl:border-none xl:pt-0">
                <?php
                // Set the query arguments to retrieve only posts that belong to the 'cinema' category and limit the number of posts to 8
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'cinema',
                    'posts_per_page' => 6
                );

                // Execute the query and store the results in the $query variable
                $query = new WP_Query($args);

                // Get the first post from 'cinema'
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 2,
                    'post_status' => 'publish',
                    'category_name' => 'cinema',
                    'fields' => 'ids', // Only return the post IDs
                );
                $recent_cinema_posts = new WP_Query($args);

                // Create the query for the remaining posts
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'cinema',
                    'posts_per_page' => 6,
                    'post__not_in' => array_merge($recent_cinema_posts->posts), // Merge the post IDs
                );

                // Execute the query and store the results in the $query variable
                $query = new WP_Query($args);
                ?>
                <!-- Cinema articles grid -->
                <div class="grid grid-cols-2 gap-12">
                    <?php
                    // Loop through each post in the query result set and display it as a small thumbnail
                    while ($query->have_posts()) : $query->the_post(); ?>
                        <?php
                        // Get the custom author image if it exists
                        $author_image = get_the_author_meta('author_image', get_the_author_meta('ID'));
                        ?>
                        <!-- Cinema article -->
                        <a href="<?php the_permalink(); ?>">
                            <div class="group flex flex-col gap-2">
                                <!-- Article title -->
                                <h4 class="group-hover:opacity-80 transition-opacity text-sm font-bold capitalize font-sans"><?php the_title(); ?></h4>
                                <!-- Article author and picture -->
                                <div class="flex flex-row gap-2 justify-start items-center content-center mt-1">
                                    <!-- Loads the author picture -->
                                    <?php if (!empty($author_image)) : // Check if the author has a custom profile picture 
                                    ?>
                                        <!-- Custom author image -->
                                        <img class="w-6 h-6 rounded-full object-cover saturate-0" src="<?php echo esc_url($author_image); ?>" alt="<?php the_author(); ?>">
                                    <?php else : ?>
                                        <!-- Default author avatar -->
                                        <?php echo get_avatar(get_the_author_meta('email'), 64, '', '', array('class' => 'w-6 h-6 rounded-full object-cover saturate-0')); ?>
                                    <?php endif; ?>
                                    <!-- Author name -->
                                    <span class="text-xs text-foreground/60"><?php the_author(); ?></span>
                                </div>
                            </div>
                        </a>
                    <?php
                    // Reset the post data after the loop is finished
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Interview posts slider -->
    <section class="px-8 xl:px-12 mb-12">
        <!-- Heading for interview articles -->
        <h2 class="capitalize font-serif text-4xl font-black mb-6 after:block after:h-[8px] after:mt-2 after:w-full after:border-t-2 after:border-b">Nossas entrevistas</h2>
        <!-- Interview articles swiper -->
        <div class="swiper interviewSwiper">
            <div class="swiper-wrapper">
                <?php
                // Query the posts that belong to the 'entrevistas' category
                $feat_query = new WP_Query(array(
                    'post_type' => 'post',
                    'category_name' => 'entrevistas'
                ));

                // Loop through the posts retrieved from the query
                if ($feat_query->have_posts()) :
                    while ($feat_query->have_posts()) : $feat_query->the_post();
                ?>
                        <?php
                        // Get the custom author image if it exists
                        $author_image = get_the_author_meta('author_image', get_the_author_meta('ID'));
                        ?>
                        <!-- Interview Swiper slide -->
                        <div class="swiper-slide">
                            <!-- Interview article link -->
                            <a class="group" href="<?php the_permalink(); ?>">
                                <!-- Interview article content -->
                                <div class="grid grid-cols-1 justify-center items-center content-center lg:grid-cols-12 gap-12">
                                    <!-- Article title and author -->
                                    <div class="col-span-full lg:col-span-4 flex flex-col gap-2 items-center justify-center content-center">
                                        <h3 class="group-hover:opacity-80 transition-opacity font-bold font-sans capitalize text-3xl text-center">
                                            <?php the_title(); ?>
                                        </h3>
                                        <div class="flex flex-row gap-2 justify-start content-center items-center mt-1">
                                            <!-- Loads the author picture -->
                                            <?php if (!empty($author_image)) : // Check if the author has a custom profile picture 
                                            ?>
                                                <!-- Custom author image -->
                                                <img class="w-6 h-6 rounded-full object-cover saturate-0" src="<?php echo esc_url($author_image); ?>" alt="<?php the_author(); ?>">
                                            <?php else : ?>
                                                <!-- Default author avatar -->
                                                <?php echo get_avatar(get_the_author_meta('email'), 64, '', '', array('class' => 'w-6 h-6 rounded-full object-cover saturate-0')); ?>
                                            <?php endif; ?>
                                            <span class="text-xs text-foreground/60"><?php the_author(); ?></span>
                                            <span class="text-sm text-foreground/60">·</span>
                                            <span class="text-xs text-foreground/60"><?php echo get_post_reading_time(); ?> min</span>
                                        </div>
                                    </div>
                                    <!-- Article image and caption -->
                                    <div class="col-span-full lg:col-span-8 items-center justify-center content-center">
                                        <img class="w-full h-[32rem] object-cover object-center" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
                                    </div>
                                </div>
                            </a>
                        </div>
                <?php
                    endwhile;
                endif;

                // Reset post data to the original query
                wp_reset_postdata();
                ?>
                <div class="swiper-button-next">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-foreground">
                        <path d="M6.1584 3.13508C6.35985 2.94621 6.67627 2.95642 6.86514 3.15788L10.6151 7.15788C10.7954 7.3502 10.7954 7.64949 10.6151 7.84182L6.86514 11.8418C6.67627 12.0433 6.35985 12.0535 6.1584 11.8646C5.95694 11.6757 5.94673 11.3593 6.1356 11.1579L9.565 7.49985L6.1356 3.84182C5.94673 3.64036 5.95694 3.32394 6.1584 3.13508Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="swiper-button-prev">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-foreground">
                        <path d="M8.84182 3.13514C9.04327 3.32401 9.05348 3.64042 8.86462 3.84188L5.43521 7.49991L8.86462 11.1579C9.05348 11.3594 9.04327 11.6758 8.84182 11.8647C8.64036 12.0535 8.32394 12.0433 8.13508 11.8419L4.38508 7.84188C4.20477 7.64955 4.20477 7.35027 4.38508 7.15794L8.13508 3.15794C8.32394 2.95648 8.64036 2.94628 8.84182 3.13514Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Initialize the Swiper plugin -->
        <script id="swiper-handler">
            var swiper = new Swiper(".interviewSwiper", {
                slidesPerView: 1,
                spaceBetween: 32,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>
    </section>
    <!-- Magazine publications slider -->
    <section class="px-8 xl:px-12 mb-12">
        <!-- Heading for the magazine publications slider -->
        <h2 class="capitalize font-serif text-4xl font-black mb-6 after:block after:h-[8px] after:mt-2 after:w-full after:border-t-2 after:border-b">Forca de Judas</h2>
        <!-- Swiper library slider -->
        <div class="swiper magazineSwiper">
            <div class="swiper-wrapper" id="magazine-posts-container">
            </div>
        </div>
        <script>
            // Fetch magazine publications from API endpoint
            fetch('https://revista.judasasbotasde.com.br/wp-json/wp/v2/posts?_embed')
                .then(response => response.json())
                .then(posts => {

                    // Get container to insert retrieved posts
                    const container = document.getElementById('magazine-posts-container');

                    // Loop through posts and add to container
                    for (const post of posts) {
                        const postHtml = `
                        <!-- Retrieved magazine publication -->
                        <div class="swiper-slide">
                            <a href="${post.permalink}">
                                <div class="group flex flex-col gap-3">
                                    <div class="relative">
                                        <img class="min-h-[14rem] max-h-56 object-cover" src="${post.thumbnail}" alt="${post.title}"">
                                    </div>
                                    <h3 class="group-hover:opacity-80 line-clamp-3 transition-opacity font-bold capitalize font-sans text-lg">${post.title}</h3>
                                    <div class="flex flex-row justify-start content-center items-center gap-2">
                                        <span class="text-xs text-foreground/60">${post.author}</span>
                                        <span class="text-sm text-foreground/60">·</span>
                                        <span class="text-xs text-foreground/60">vol. ${post.volume}</span>
                                        <span class="text-sm text-foreground/60">·</span>
                                        <span class="text-xs text-foreground/60">n. ${post.numero}</span>
                                        <span class="text-sm text-foreground/60">·</span>
                                        <span class="text-xs text-foreground/60">${post.ano}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    `;
                        container.innerHTML += postHtml;
                    }
                })
                .catch(error => console.error(error));
        </script>
        <!-- Handles the Swiper initialization -->
        <script id="swiper-handler">
            var swiper = new Swiper(".magazineSwiper", {
                slidesPerView: 4,
                spaceBetween: 30,
                breakpoints: {
                    "@0.00": {
                        slidesPerView: 1,
                        spaceBetween: 12,
                    },
                    "@0.75": {
                        slidesPerView: 2,
                        spaceBetween: 24,
                    },
                    "@1.00": {
                        slidesPerView: 4,
                        spaceBetween: 24,
                    },
                },
            });
        </script>
    </section>
    <!-- Bulk of posts -->
    <section class="px-8 xl:px-12 mb-12">
        <!-- Heading for bulk of posts -->
        <h2 class="capitalize font-serif text-4xl font-black mb-6 after:block after:h-[8px] after:mt-2 after:w-full after:border-t-2 after:border-b">Nossos artigos</h2>
        <!-- Grid of articles -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-12 gap-12 xl:divide-x">
            <!-- General posts -->
            <div class="col-span-full xl:col-span-9">
                <!-- Three columns scheme -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-12">
                    <?php
                    // Get the most recent post
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'post_status' => 'publish',
                    );
                    $recent_posts = new WP_Query($args);
                    $most_recent_post_id = $recent_posts->posts[0]->ID;

                    // Get the 8 first posts from CINEMA
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 8,
                        'post_status' => 'publish',
                        'category_name' => 'cinema',
                        'fields' => 'ids', // Only return the post IDs
                    );
                    $cinema_posts = new WP_Query($args);

                    // Get the 8 first posts from OPINIÃO
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                        'post_status' => 'publish',
                        'category_name' => 'opiniao',
                        'fields' => 'ids', // Only return the post IDs
                    );
                    $opiniao_posts = new WP_Query($args);

                    // Get the 8 first posts from ARTIGOS CIENTIFICOS
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 12,
                        'post_status' => 'publish',
                        'category_name' => 'artigos-cientificos',
                        'fields' => 'ids', // Only return the post IDs
                    );
                    $cientificos_posts = new WP_Query($args);

                    // Get the 8 first posts from EDITORIAIS
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'editoriais',
                        'fields' => 'ids', // Only return the post IDs
                    );
                    $editoriais_posts = new WP_Query($args);

                    // Get the 8 first posts from ENTREVISTAS
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'entrevistas',
                        'fields' => 'ids', // Only return the post IDs
                    );
                    $entrevistas_posts = new WP_Query($args);

                    // Create the query for the remaining posts
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 56,
                        'tag__not_in' => array('feat'),
                        'post__not_in' => array_merge(array($most_recent_post_id), $cinema_posts->posts, $opiniao_posts->posts, $cientificos_posts->posts, $editoriais_posts->posts, $entrevistas_posts->posts), // Merge the post IDs
                    );
                    $query = new WP_Query($args);
                    ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <?php
                        // Get the custom author image if it exists
                        $author_image = get_the_author_meta('author_image', get_the_author_meta('ID'));
                        ?>
                        <!-- Individual post -->
                        <div class="relative group flex flex-col gap-2">
                            <!-- Display post thumbnail image and caption -->
                            <div class="relative flex flex-col gap-1">
                                <img class="min-h-[14rem] max-h-56 object-cover" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
                            </div>
                            <!-- Display post title, excerpt, and author -->
                            <div class="flex flex-col gap-2">
                                <h3 class="group-hover:opacity-80 transition-opacity font-bold capitalize font-sans transition-all"><?php the_title(); ?></h3>
                                <span class="line-clamp-3 text-foreground/90 text-sm"><?php the_excerpt(); ?></span>
                                <div class="flex flex-row gap-2 justify-start content-center items-center mt-1">
                                    <?php if (!empty($author_image)) : // Check if the author has a custom profile picture 
                                    ?>
                                        <!-- Custom author image -->
                                        <img class="w-6 h-6 rounded-full object-cover saturate-0" src="<?php echo esc_url($author_image); ?>" alt="<?php the_author(); ?>">
                                    <?php else : ?>
                                        <!-- Default author avatar -->
                                        <?php echo get_avatar(get_the_author_meta('email'), 64, '', '', array('class' => 'w-6 h-6 rounded-full object-cover saturate-0')); ?>
                                    <?php endif; ?>
                                    <span class="text-xs text-foreground/60"><?php the_author(); ?></span>
                                    <span class="text-sm text-foreground/60">·</span>
                                    <span class="text-xs text-foreground/60"><?php echo get_post_reading_time(); ?> min</span>
                                </div>
                            </div>
                            <!-- Create a link to the individual post -->
                            <a class="z-[999] absolute h-full w-full" href="<?php the_permalink(); ?>"></a>
                        </div>
                    <?php endwhile;

                    // Reset the post data to the main query
                    wp_reset_postdata(); ?>
                </div>
            </div>
            <!-- Opinion articles -->
            <aside class="col-span-full xl:col-span-3 pt-6 border-t xl:border-none xl:pl-12">
                <?php
                // Arguments to retrieve opinion articles
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'opiniao', // Grabs only articles from this category
                    'posts_per_page' => 10
                );

                // Query to retrieve opinion articles
                $query = new WP_Query($args);
                ?>
                <div class="grid grid-cols-2 xl:flex-col xl:flex gap-12">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <?php
                        // Get the custom author image if it exists
                        $author_image = get_the_author_meta('author_image', get_the_author_meta('ID'));
                        ?>
                        <!-- Individual post -->
                        <div class="group flex flex-col xl:grid xl:grid-cols-6 gap-2">
                            <div class="flex flex-col order-2 xl:order-1 gap-2 xl:col-span-4 justify-start content-center">
                                <!-- Author name -->
                                <h5 class="text-xs text-foreground/60"><?php the_author(); ?></h5>
                                <a href="<?php the_permalink(); ?>">
                                    <!-- Article title -->
                                    <h4 class="group-hover:opacity-80 transition-opacity font-bold font-sans capitalize text-sm"><?php the_title(); ?></h4>
                                </a>
                            </div>
                            <div class="flex flex-col order-1 xl:order-2 gap-2 xl:col-span-2 justify-start xl:justify-center xl:items-center content-end">
                                <?php if (!empty($author_image)) : // Check if the author has a custom profile picture 
                                ?>
                                    <!-- Custom author image -->
                                    <img class="w-10 h-10 rounded-full object-cover saturate-0" src="<?php echo esc_url($author_image); ?>" alt="<?php the_author(); ?>">
                                <?php else : ?>
                                    <!-- Default author avatar -->
                                    <?php echo get_avatar(get_the_author_meta('email'), 64, '', '', array('class' => 'w-10 h-10 rounded-full object-cover saturate-0')); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile;

                    // Reset the post data to the main query
                    wp_reset_postdata(); ?>
                </div>
            </aside>
        </div>
    </section>
    <!-- Editorials slider -->
    <section class="px-8 xl:px-12 mb-12">
        <!-- Heading for editorial articles -->
        <h2 class="capitalize font-serif text-4xl font-black mb-6 after:block after:h-[8px] after:mt-2 after:w-full after:border-t-2 after:border-b">O que pensamos</h2>
        <!-- Swiper slider wrapper -->
        <div class="swiper editorialsSwiper">
            <div class="swiper-wrapper">

                <?php
                // Query editorials posts
                $query_args = array(
                    'category_name' => 'Editoriais',
                    'posts_per_page' => 6,
                );
                $editorials_query = new WP_Query($query_args);

                // Loop through editorials posts and display them
                if ($editorials_query->have_posts()) {
                    while ($editorials_query->have_posts()) {
                        $editorials_query->the_post();
                ?>
                        <!-- Individual slider item -->
                        <div class="swiper-slide">
                            <a href="<?php the_permalink(); ?>">
                                <div class="group flex flex-col gap-3">
                                    <!-- Post thumbnail and caption -->
                                    <div class="relative flex flex-col gap-1">
                                        <img class="min-h-[14rem] max-h-56 object-cover" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
                                    </div>
                                    <!-- Post title -->
                                    <h3 class="group-hover:opacity-80 transition-opacity font-bold capitalize font-sans text-lg"><?php the_title(); ?></h3>
                                </div>
                            </a>
                        </div>

                <?php
                    }
                    wp_reset_postdata();
                }
                ?>
            </div>
        </div>
        <!-- Swiper initialization script -->
        <script id="swiper-handler">
            var swiper = new Swiper(".editorialsSwiper", {
                slidesPerView: 4,
                spaceBetween: 30,
                breakpoints: {
                    "@0.00": {
                        slidesPerView: 1,
                        spaceBetween: 12,
                    },
                    "@0.75": {
                        slidesPerView: 2,
                        spaceBetween: 24,
                    },
                    "@1.00": {
                        slidesPerView: 4,
                        spaceBetween: 24,
                    },
                },                
            });
        </script>
    </section>
    <!-- Featured posts slider -->
    <section class="px-8 xl:px-12 mb-12">
        <!-- Heading for featured articles -->
        <h2 class="capitalize font-serif text-4xl font-black mb-6 after:block after:h-[8px] after:mt-2 after:w-full after:border-t-2 after:border-b">Ditaduras da América Latina</h2>
        <!-- Featured articles swiper -->
        <div class="swiper featuredSwiper">
            <div class="swiper-wrapper">
                <?php

                // Query to retrieve featured articles
                $feat_query = new WP_Query(array(
                    'post_type' => 'post',
                    'tag' => 'feat'
                ));
                if ($feat_query->have_posts()) :
                    while ($feat_query->have_posts()) : $feat_query->the_post();
                ?>
                        <?php
                        // Get the custom author image if it exists
                        $author_image = get_the_author_meta('author_image', get_the_author_meta('ID'));
                        ?>
                        <!-- Interview Swiper slide -->
                        <div class="swiper-slide">
                            <!-- Interview article link -->
                            <a class="group" href="<?php the_permalink(); ?>">
                                <!-- Interview article content -->
                                <div class="grid grid-cols-1 justify-center items-center content-center lg:grid-cols-12 gap-12">
                                    <!-- Article title and author -->
                                    <div class="col-span-full lg:col-span-4 flex flex-col gap-2 items-center justify-center content-center">
                                        <h3 class="group-hover:opacity-80 transition-opacity font-bold font-sans capitalize text-3xl text-center">
                                            <?php the_title(); ?>
                                        </h3>
                                        <div class="flex flex-row gap-2 justify-start content-center items-center mt-1">
                                            <!-- Loads the author picture -->
                                            <?php if (!empty($author_image)) : // Check if the author has a custom profile picture 
                                            ?>
                                                <!-- Custom author image -->
                                                <img class="w-6 h-6 rounded-full object-cover saturate-0" src="<?php echo esc_url($author_image); ?>" alt="<?php the_author(); ?>">
                                            <?php else : ?>
                                                <!-- Default author avatar -->
                                                <?php echo get_avatar(get_the_author_meta('email'), 64, '', '', array('class' => 'w-6 h-6 rounded-full object-cover saturate-0')); ?>
                                            <?php endif; ?>
                                            <span class="text-xs text-foreground/60"><?php the_author(); ?></span>
                                            <span class="text-sm text-foreground/60">·</span>
                                            <span class="text-xs text-foreground/60"><?php echo get_post_reading_time(); ?> min</span>
                                        </div>
                                    </div>
                                    <!-- Article image and caption -->
                                    <div class="col-span-full lg:col-span-8 items-center justify-center content-center">
                                        <img class="w-full h-[32rem] object-cover object-center" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
                                    </div>
                                </div>
                            </a>
                        </div>
                <?php
                    endwhile;
                endif;

                // Reset post data to the original query
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <!-- Handles the Swiper initialization -->
        <script id="swiper-handler">
            var swiper = new Swiper(".featuredSwiper", {
                slidesPerView: 1,
                spaceBetween: 32,
            });
        </script>
    </section>
    <!-- Academic publications grid -->
    <section class="px-8 xl:px-12 mb-12">
        <!-- Heading for academic publications grid -->
        <h2 class="capitalize font-serif text-4xl font-black mb-6 after:block after:h-[8px] after:mt-2 after:w-full after:border-t-2 after:border-b">Pesquisas</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-12">
            <?php

            // Query to retrieve featured posts
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'tag' => 'feat',
                'fields' => 'ids', // Only return the post IDs
            );
            $feat_posts = new WP_Query($args);

            // Query to retrieve academic publications
            $args = array(
                'post_type' => 'post',
                'category_name' => 'artigos-cientificos',
                'posts_per_page' => 8,
                'post__not_in' => array_merge($feat_posts->posts), // Exclude featured posts
            );
            $query = new WP_Query($args);
            ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <!-- Academic publications grid item -->
                <a class="group" href="<?php the_permalink(); ?>">
                    <div class="grid grid-cols-12 gap-3">
                        <div class="flex flex-col gap-2 col-span-8">
                            <h3 class="group-hover:opacity-80 transition-opacity font-sans font-bold text-sm capitalize"><?php the_title(); ?></h3>
                            <div class="flex flex-row gap-2 justify-start content-center items-center mt-1">
                                <span class="text-xs text-foreground/60"><?php the_author(); ?></span>
                                <span class="text-sm text-foreground/60">·</span>
                                <span class="text-xs text-foreground/60"><?php echo get_post_reading_time(); ?> min</span>
                            </div>
                        </div>
                        <div class="col-span-4">
                            <img class="h-20 w-full object-cover" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
                        </div>
                    </div>
                </a>
            <?php endwhile;
            wp_reset_postdata(); // Reset the query to avoid conflicts with other queries 
            ?>
        </div>
    </section>
</main>
<?php
get_footer();
