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
<!-- Authors carrousel -->
<?php
$args = array(
    'orderby' => 'post_count',
    'order' => 'DESC',
    'number' => 8
);
$authors = get_users($args);
// Checks if the author has posts
if (!empty($authors)) {
    // Display if the author has more than one post
    echo '<section class="px-8 flex flex-row justify-between mb-12">';
    foreach ($authors as $author) {
        $author_id = $author->ID;
        $author_link = get_author_posts_url($author_id);
        $post_count = count_user_posts($author_id);
        $author_image = get_the_author_meta('author_image', $author_id);
        if ($post_count > 1) {
            echo '<!-- Author div -->';
            echo '<div class="relative">';
            echo '<a class="max-w-fit flex flex-col justify-center content-center items-center gap-2" href="' . $author_link . '">';
            echo '<img class="w-16 h-16 rounded-full object-cover saturate-0" src="' . esc_url($author_image) . '" alt="">';
            echo '<span class="block font-mono text-foreground/80 text-xs w-1/2 text-center">' . esc_html($author->display_name) . '</span>';
            echo '</a>';
            echo '</div>';
        }
    }
    echo '</section>';
}
?>
<!-- Main articles -->
<section class="grid grid-cols-12 px-8 gap-12 mb-12">
    <!-- New posts column -->
    <div class="col-span-4">
        <h1 class="capitalize font-display text-4xl font-black mb-6 after:block after:h-[6px] after:mt-2 after:w-full after:border-t after:border-b">Mais recente</h1>
        <?php
        $args = array(
            'posts_per_page' => 1, // Retrieve only the latest post
        );
        $latest_post = get_posts($args)[0]; // Get the latest post from the WordPress database

        // Extract post data
        $post_categories = wp_get_post_categories($latest_post->ID);
        $post_title = $latest_post->post_title;
        $post_excerpt = $latest_post->post_excerpt;
        $post_author = get_the_author_meta('display_name', $latest_post->post_author);
        $post_image_id = get_post_thumbnail_id($latest_post->ID);
        $post_image_url = get_the_post_thumbnail_url($latest_post->ID);
        $post_image = get_post($post_image_id);
        $post_image_caption = $post_image->post_excerpt;
        $post_permalink = get_permalink($latest_post->ID);

        // Display post using the HTML code
        ?>
        <!-- Newest post -->
        <a class="group" href="<?php echo $post_permalink ?>">
            <div class="flex flex-col gap-2" id="newest-post">
                <div class="flex flex-row flex-wrap gap-2">
                    <?php
                    // Display post categories
                    foreach ($post_categories as $category) {
                        $category_name = get_cat_name($category);
                        echo '<span class="relative text-sm max-w-fit font-sans font-bold lowercase text-red-600">' . $category_name . '</span>';
                    }
                    ?>
                </div>
                <div class="flex flex-col gap-1">
                    <img src="<?php echo $post_image_url ?>" alt="">
                    <span class="text-foreground/80 text-xs font-mono"><?php echo $post_image_caption ?></span>
                </div>
                <h2 class="group-hover:opacity-70 font-bold capitalize text-lg font-serif transition-opacity"><?php echo $post_title ?></h2>
                <p class="line-clamp-6 text-foreground/90 text-sm"><?php echo $post_excerpt ?></p>
                <span class="text-xs font-mono text-foreground/80 mt-2">Por <u><?php echo $post_author ?></u></span>
            </div>
        </a>
    </div>
    <!-- Cinema articles -->
    <?php
    $args = array(
        'post_type' => 'post',
        'category_name' => 'cinema',
        'posts_per_page' => 8
    );
    $query = new WP_Query($args);
    ?>
    <div class="col-span-4">
        <h1 class="capitalize font-display text-4xl font-black mb-6 after:block after:h-[6px] after:mt-2 after:w-full after:border-t after:border-b">Cinema</h1>
        <div class="grid grid-cols-2 p-4 gap-6">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <!-- Small thumbnail -->
                <div class="group flex flex-col gap-2">
                    <a href="<?php the_permalink(); ?>">
                        <h3 class="group-hover:opacity-70 transition-opacity font-bold capitalize font-serif text-sm">
                            <?php the_title(); ?>
                        </h3>
                    </a>
                    <span class="text-xs font-mono text-foreground/80">Por <u><?php the_author(); ?></u></span>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    </div>
    <!-- Support us -->
    <div class="col-span-4">
        <div class="max-h-fit flex flex-col gap-4 border p-4 outline outline-offset-4 outline-1 outline-[#e5e7eb]">
            <h2 class="font-display text-4xl font-black">Apoie esse projeto e participe de nossos grupos</h2>
            <p class="text-sm text-foreground/90">O <b class="font-bold">JUDAS, As botas de</b> e a <b class="font-bold">Forca de Judas</b> são organizações independentes, multidisciplinares e livres. Acreditamos que conteúdo de qualidade, compreensível, escrito com base em dados factuais e por autores que entendem do assunto, devem estar disponíveis para todos que os procurarem. Para continuar existindo e expandindo o projeto, precisamos de recursos. Assim como você, somos <i>estudantes, trabalhadores e pais</i></p>
            <button class="px-4 py-2 bg-amber-500 text-white max-w-fit max-h-fit rounded-3xl text-sm flex flex-row gap-2 justify-center content-center items-center">
                <span>Apoie-nos</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="miter" stroke-linejoin="miter" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </button>
        </div>
    </div>
</section>
<!-- Magazine publications slider -->
<section class="px-8 mb-12">
    <h1 class="capitalize font-display text-4xl font-black mb-6 after:block after:h-[6px] after:mt-2 after:w-full after:border-t after:border-b">Forca de Judas</h1>
    <!-- Swiper library slider -->
    <div class="swiper magazineSwiper">
        <div class="swiper-wrapper" id="magazine-posts-container">
        </div>
    </div>
    <script>
        fetch('https://revista.judasasbotasde.com.br/wp-json/wp/v2/posts?_embed')
            .then(response => response.json())
            .then(posts => {
                const container = document.getElementById('magazine-posts-container');
                for (const post of posts) {
                    const postHtml = `
        <!-- API retrived magazine publications -->
        <div class="swiper-slide">
          <a href="${post.permalink}">
            <div class="group flex flex-col gap-3">
              <div class="relative">
                <img class="min-h-[14rem] max-h-56 object-cover" src="${post.thumbnail}" alt="${post.title}"">
                <span class="font-mono text-xs text-foreground/80">${post.thumbnail_caption}</span>
              </div>
              <h2 class="group-hover:opacity-70 transition-opacity font-bold capitalize font-serif text-lg">${post.title}</h2>
              <div class="flex flex-row gap-6">
                <span class="font-mono text-xs text-foreground/80">${post.author}</span>
                <span class="font-mono text-xs text-foreground/80">vol. ${post.volume}</span>
                <span class="font-mono text-xs text-foreground/80">n. ${post.numero}</span>
                <span class="font-mono text-xs text-foreground/80">${post.ano}</span>
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
        });
    </script>
</section>
<!-- Bulk of posts -->
<section class="grid grid-cols-12 gap-12 px-8 mb-12">
    <!-- General posts -->
    <div class="col-span-9">
        <h1 class="capitalize font-display text-4xl font-black mb-6 after:block after:h-[6px] after:mt-2 after:w-full after:border-t after:border-b">Nossos artigos</h1>
        <!-- Three columns scheme -->
        <div class="grid grid-cols-3 gap-12">
            <!-- Individual post -->
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6
            );
            $query = new WP_Query($args);
            ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="relative group flex flex-col gap-2">
                    <div class="flex flex-row flex-wrap gap-2">
                        <span class="relative max-w-fit text-sm font-sans font-bold lowercase text-red-600"><?php echo get_the_category_list(', '); ?></span>
                    </div>
                    <div class="relative flex flex-col gap-1">
                        <img class="min-h-[14rem] max-h-56 object-cover" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        <span class="text-foreground/80 text-xs font-mono"><?php echo get_the_post_thumbnail_caption(); ?></span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h2 class="group-hover:opacity-70 transition-opacity font-bold capitalize text-lg font-serif transition-all"><?php the_title(); ?></h2>
                        <span class="line-clamp-6 text-foreground/90 text-sm"><?php the_excerpt(); ?></span>
                        <span class="text-xs font-mono text-foreground/80 mt-2">Por <u><?php the_author(); ?></u></span>
                    </div>
                    <a class="z-[999] absolute h-full w-full" href="<?php the_permalink(); ?>"></a>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    </div>
    <!-- Opinion articles -->
    <?php
    $args = array(
        'post_type' => 'post',
        'category_name' => 'opiniao', // Grabs only articles from this category
        'posts_per_page' => 5
    );
    $query = new WP_Query($args);
    ?>
    <div class="col-span-3">
        <h1 class="capitalize font-display text-4xl font-black mb-6 after:block after:h-[6px] after:mt-2 after:w-full after:border-t after:border-b">Opinião</h1>
        <div class="flex flex-col gap-12">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php $author_image = get_the_author_meta('author_image', get_the_author_meta('ID')); ?>
                <!-- Individual post -->
                <div class="group grid grid-cols-6 gap-2">
                    <div class="flex flex-col gap-2 col-span-4 justify-start content-center">
                        <h2 class="font-mono text-xs text-foreground/80">Por <u><?php the_author(); ?></u></h2>
                        <a href="<?php the_permalink(); ?>">
                            <h3 class="group-hover:opacity-70 transition-opacity font-bold font-serif capitalize text-sm"><?php the_title(); ?></h3>
                        </a>
                    </div>
                    <div class="flex flex-col gap-2 col-span-2 justify-center items-center content-end">
                        <?php if (!empty($author_image)) : // Checks if the author has a custom profile picture 
                        ?>
                            <img class="w-10 h-10 rounded-full object-cover saturate-0" src="<?php echo esc_url($author_image); ?>" alt="<?php the_author(); ?>">
                        <?php else : ?>
                            <?php echo get_avatar(get_the_author_meta('email'), 64, '', '', array('class' => 'w-10 h-10 rounded-full object-cover saturate-0')); ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<!-- Editorials slider -->
<section class="px-8 mb-12">
    <h1 class="capitalize font-display text-4xl font-black mb-6 after:block after:h-[6px] after:mt-2 after:w-full after:border-t after:border-b">Editoriais</h1>
    <!-- Swiper library slider -->
    <div class="swiper editorialsSwiper">
        <div class="swiper-wrapper">
            <?php
            $query_args = array(
                'category_name' => 'Editoriais',
                'posts_per_page' => 6,
            );
            $editoriais_query = new WP_Query($query_args);

            if ($editoriais_query->have_posts()) {
                while ($editoriais_query->have_posts()) {
                    $editoriais_query->the_post();
            ?>
                    <!-- Individual slider -->
                    <div class="swiper-slide">
                        <a href="<?php the_permalink(); ?>">
                            <div class="group flex flex-col gap-3">
                                <div class="relative flex flex-col gap-1">
                                    <img class="min-h-[14rem] max-h-56 object-cover" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                    <span class="text-foreground/80 text-xs font-mono"><?php echo get_the_post_thumbnail_caption(); ?></span>
                                </div>
                                <h2 class="group-hover:opacity-70 transition-opacity font-bold capitalize font-serif text-lg"><?php the_title(); ?></h2>
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
    <!-- Handles the Swiper initialization -->
    <script id="swiper-handler">
        var swiper = new Swiper(".editorialsSwiper", {
            slidesPerView: 4,
            spaceBetween: 30,
        });
    </script>
</section>
<!-- Featured posts slider -->
<section class="px-8 mb-12">
    <h1 class="font-display text-4xl font-black mb-6 after:block after:h-[6px] after:mt-2 after:w-full after:border-t after:border-b capitalize">Ditaduras da América Latina</h1>
    <!-- Featured articles swiper -->
    <div class="swiper featuredSwiper">
        <div class="swiper-wrapper">
            <?php
            $feat_query = new WP_Query(array(
                'post_type' => 'post',
                'tag' => 'feat'
            ));
            if ($feat_query->have_posts()) :
                while ($feat_query->have_posts()) : $feat_query->the_post();
            ?>
                    <div class="swiper-slide">
                        <!-- Featured articles -->
                        <a class="group" href="<?php the_permalink(); ?>">
                            <div class="grid grid-cols-12 gap-12">
                                <div class="col-span-3 flex flex-col gap-2 items-center justify-center content-center">
                                    <h2 class="group-hover:opacity-70 transition-opacity font-bold font-serif capitalize text-4xl text-center"><?php the_title(); ?></h2>
                                    <span class="text-xs font-mono text-foreground/80 mt-2">Por <u><?php the_author(); ?></u></span>
                                </div>
                                <div class="col-span-9">
                                    <?php the_post_thumbnail('large', array('class' => 'w-full h-[72vh] object-cover object-center')); ?>
                                    <span class="absolute bottom-1 right-2 text-white/80 text-xs font-mono"><?php the_post_thumbnail_caption(); ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <!-- Handles the Swiper initialization -->
    <script id="swiper-handler">
        var swiper = new Swiper(".featuredSwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
        });
    </script>
</section>
<!-- Academic publications grid -->
<section class="px-8 mb-12">
    <h1 class="font-display text-4xl font-black mb-6 after:block after:h-[6px] after:mt-2 after:w-full after:border-t after:border-b capitalize">Acadêmico</h1>
    <div class="grid grid-cols-4 gap-12">
        <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'artigos-cientificos',
            'posts_per_page' => 8
        );
        $query = new WP_Query($args);
        ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <!-- Academic publications -->
            <a class="group" href="<?php the_permalink(); ?>">
                <div class="grid grid-cols-12 gap-3">
                    <div class="flex flex-col gap-2 col-span-8">
                        <h3 class="group-hover:opacity-70 transition-opacity font-serif font-bold text-sm capitalize"><?php the_title(); ?></h3>
                        <span class="text-xs font-mono text-foreground/80">Opinião de <u><?php the_author(); ?></u></span>
                    </div>
                    <div class="col-span-4">
                        <img class="h-20 w-full object-cover" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </div>
                </div>
            </a>
        <?php endwhile;
        wp_reset_postdata(); ?>
    </div>
</section>
<?php
get_footer();
