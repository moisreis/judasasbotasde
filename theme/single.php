<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package JUDAS,_As_botas_de
 */

get_header();
?>

<!-- Main content -->
<main class="grid grid-cols-1 xl:grid-cols-12 p-8 xl:py-12 xl:px-0">
    <aside class="hidden lg:flex col-span-2"></aside>
    <?php while (have_posts()) : the_post(); ?>
        <section class="col-span-6">
            <!-- Post title -->
            <h1 class="font-display text-3xl lg:text-4xl xl:text-5xl font-black mb-6"><?php the_title(); ?></h1>
            <!-- Share buttons -->
            <div class="mb-6 flex flex-wrap items-center justify-start gap-3 xl:gap-6">
                <?php echo do_shortcode('[social_sharing]'); ?>
                <button class="bg-white border border-neutral-300 focus:outline-none hover:bg-neutral-100 font-medium rounded-3xl max-w-fit max-h-fit text-sm flex flex-row gap-2 justify-center content-center items-center px-3 py-1.5">
                    <span>Copiar</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                    </svg>
                </button>
            </div>
            <!-- Post thumbnail -->
            <?php if (has_post_thumbnail()) : ?>
                <figure class="mb-6">
                    <?php the_post_thumbnail('large', array('class' => 'object-cover h-64 sm:h-96')); ?>
                    <figcaption class="text-foreground/80 uppercase text-xs mt-2"><?php the_post_thumbnail_caption(); ?></figcaption>
                </figure>
            <?php endif; ?>
            <!-- Post meta -->
            <div class="flex flex-col justify-start content-start gap-0 before:block before:h-[8px] before:mb-6 before:w-full before:border-t-2 before:border-b">
                <?php
                // Retrieve author image
                $author_image = get_the_author_meta('author_image', get_the_author_meta('ID'));
                ?>
                <?php
                // Check if the author has a custom profile picture 
                if (!empty($author_image)) :
                ?>
                    <!-- Custom author image -->
                    <img class="mb-2 w-12 h-12 rounded-full object-cover saturate-0" src="<?php echo esc_url($author_image); ?>" alt="<?php the_author(); ?>">
                <?php
                // Shows default profile picture if there is no custom image
                else : ?>
                    <!-- Default author avatar -->
                    <?php echo get_avatar(get_the_author_meta('email'), 64, '', '', array('class' => 'mb-2 w-12 h-12 rounded-full object-cover saturate-0')); ?>
                <?php endif; ?>
                <a class="mb-2" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                    <span class="font-bold uppercase text-sm hover:opacity-70 transition-opacity"><?php echo get_the_author(); ?></span>
                </a>
                <div class="flex flex-col sm:flex-row gap-2 content-center justify-start sm:items-center">
                    <time class="text-xs text-foreground/80 uppercase" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                    <span class="hidden sm:block text-sm text-foreground/80 uppercase">·</span>
                    <?php if (get_the_modified_time('F j, Y') !== get_the_time('F j, Y')) : ?>
                        <time class="text-xs text-foreground/80 uppercase"><?php echo __('Última atualização em', 'text-domain') . ' ' . get_the_modified_time('F j, Y'); ?></time>
                    <?php endif; ?>
                    <span class="hidden sm:block text-sm text-foreground/80 uppercase">·</span>
                    <span class="uppercase text-foreground/80 text-xs"><?php echo get_post_reading_time(); ?> min</span>
                </div>
            </div>
            <!-- Post content -->
            <article class="prose prose-a:text-blue-600 prose-a:no-underline transition-colors max-w-none mb-12 prose-lg font-serif text-foreground pt-6 before:block before:h-[8px] before:mb-6 before:w-full before:border-t-2 before:border-b">
                <?php the_content(); ?>
            </article>
            <!-- Share buttons -->
            <div class="mb-6 flex flex-wrap items-center justify-start gap-3 xl:gap-6">
                <?php echo do_shortcode('[social_sharing]'); ?>
                <button class="bg-white border border-neutral-300 focus:outline-none hover:bg-neutral-100 font-medium rounded-3xl max-w-fit max-h-fit text-sm flex flex-row gap-2 justify-center content-center items-center px-3 py-1.5">
                    <span>Copiar</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                    </svg>
                </button>
            </div>
            <!-- Donations -->
            <div class="mb-12">
                <h3 class="font-display text-4xl font-black mb-6 after:block after:h-[8px] after:mt-2 after:w-full after:border-t-2 after:border-b after:border-t-foreground capitalize">Precisamos de você</h3>
                <div class="border p-4 outline outline-offset-4 outline-1 outline-[#e5e7eb] bg-neutral-100">
                    <p class="text-base mb-4">...já que você chegou até aqui, temos um pequeno favor a pedir. Desde que começamos a publicar, em 2020, o Brasil vem enfrentando ameaças autoritárias dia sim e dia também, fome, miséria e violência política - todas fomentadas por um presidente que faz pouco das mais de 600 mil vítimas da pandemia de covid-19. Queremos continuar produzindo um conteúdo combativo e de qualidade em tempos tão conturbados.</p>
                    <p class="text-base mb-4">Mesmo em tempos de crise, toda a nossa equipe trabalha gratuitamente e não cobramos absolutamente nada de nossos leitores - fora o tempo. Fazemos isso porque acreditamos na luta contra a desinformação e o fascismo, e também acreditamos que quanto mais livre é o conhecimento, maior é o número de pessoas que podem acompanhar os acontecimentos que moldam o nosso mundo, compreender o seu impacto nas comunidades e inspirar-se para tomar medidas significativas. Milhões podem se beneficiar do acesso aberto a um conteúdo relevante, confiável e de qualidade, independentemente da sua capacidade de pagar por isso.</p>
                    <p class="text-base mb-4">Cada contribuição, seja ela grande ou pequena, alimenta o nosso trabalho e sustenta o nosso futuro. Apoie o <i>JUDAS, As botas de</i> a partir de R$1 - demora apenas um minuto. <b class="bg-yellow-300 font-bold">Entendemos a situação do Brasil, mas, por favor, considere apoiar-nos com uma quantia regular todos os meses. Obrigado.</b></p>
                    <p class="text-base mb-4">O nosso PIX é <i class="font-bold text-blue-600">74991895723</i>, mas você também pode colaborar clicando no botão abaixo, é muito rápido</p>
                    <button class="px-4 py-2 bg-amber-500 text-white max-w-fit max-h-fit rounded-3xl text-sm flex flex-row gap-2 justify-center content-center items-center">
                        <span>Apoie-nos</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="miter" stroke-linejoin="miter" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </button>
                </div>           
            </div>
            <!-- ABNT references div -->
            <div class="mb-12">
                <h3 class="font-display text-4xl font-black mb-6 after:block after:h-[8px] after:mt-2 after:w-full after:border-t-2 after:border-b after:border-t-foreground capitalize">Cite-nos</h3>
                <!-- ABNT content -->
                <div class="mb-6" id="abnt-reference"><?php echo do_shortcode('[abnt_reference]'); ?></div>
                <!-- Copy button -->
                <button id="copy-reference" data-clipboard-target="#abnt-reference" class="bg-white border border-neutral-300 focus:outline-none hover:bg-neutral-100 font-medium rounded-3xl max-w-fit max-h-fit text-sm flex flex-row gap-2 justify-center content-center items-center px-3 py-1.5">
                    <span>Copiar</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 7.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.123-.08M15.75 18H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08M15.75 18.75v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5A3.375 3.375 0 006.375 7.5H5.25m11.9-3.664A2.251 2.251 0 0015 2.25h-1.5a2.251 2.251 0 00-2.15 1.586m5.8 0c.065.21.1.433.1.664v.75h-6V4.5c0-.231.035-.454.1-.664M6.75 7.5H4.875c-.621 0-1.125.504-1.125 1.125v12c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V16.5a9 9 0 00-9-9z" />
                    </svg>
                </button>
                <!-- Initialize Clipboard.js -->
                <script id="clipboard-handler">
                    var clipboard = new ClipboardJS("#copy-reference");

                    clipboard.on("success", function(e) {
                        console.info("Action:", e.action);
                        console.info("Text:", e.text);
                        console.info("Trigger:", e.trigger);
                    });

                    clipboard.on("error", function(e) {
                        console.info("Action:", e.action);
                        console.info("Text:", e.text);
                        console.info("Trigger:", e.trigger);
                    });
                </script>
            </div>
            <!-- Related articles -->
            <div class="mb-12">
                <h3 class="font-display text-4xl font-black mb-6 after:block after:h-[8px] after:mt-2 after:w-full after:border-t-2 after:border-b after:border-t-foreground capitalize">Leia também</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <?php
                    // Retrieve 4 related posts from the same category
                    $args = array(
                        'category__in' => wp_get_post_categories(get_the_id()),
                        'post__not_in' => array(get_the_id()),
                        'posts_per_page' => 4
                    );
                    $related_posts = new WP_Query($args);

                    // Loop through related posts and display their details
                    if ($related_posts->have_posts()) :
                        while ($related_posts->have_posts()) :
                            $related_posts->the_post();
                    ?>
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
                                    <h3 class="group-hover:opacity-80 transition-opacity font-bold capitalize text-lg font-sans"><?php the_title(); ?></h3>
                                    <span class="line-clamp-3 text-foreground/90 text-sm"><?php the_excerpt(); ?></span>
                                    <!-- Article author and picture -->
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
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
    <aside class="hidden lg:flex">
    </aside>
</main>

<?php
get_footer();
