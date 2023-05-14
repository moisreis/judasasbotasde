<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package JUDAS,_As_botas_de
 */

get_header();
?>

<main class="p-12">
    <div class="flex flex-col gap-4">
        <!-- Search results header -->
        <header class="mb-6 after:block after:h-[8px] after:mt-2 after:w-full after:border-t-2 after:border-b">
            <h1 class="capitalize font-serif text-4xl font-black"><?php printf(esc_html__('Resultados para: %s', 'JUDAS,_As_botas_de'), '<span>' . get_search_query() . '</span>'); ?></h1>
        </header>
        <?php if (have_posts()) : ?>
            <!-- Search results grid -->
            <div class="grid grid-cols-2 gap-16">
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    // Get the custom author image if it exists
                    $author_image = get_the_author_meta('author_image', get_the_author_meta('ID'));
                    ?>
                    <!-- Individual post -->
                    <a class="group" href="<?php the_permalink(); ?>">
                        <div class="grid grid-cols-12 gap-4">
                            <div class="flex flex-col gap-4 col-span-6">
                                <h2 class="text-lg group-hover:opacity-80 transition-opacity font-bold font-sans !underline-none"><?php the_title(); ?></h2>
                                <div class="flex flex-row justify-start gap-2 content-center items-center">
                                    <?php if (!empty($author_image)) : // Check if the author has a custom profile picture 
                                    ?>
                                        <!-- Custom author image -->
                                        <img class="w-6 h-6 rounded-full object-cover saturate-0" src="<?php echo esc_url($author_image); ?>" alt="<?php the_author(); ?>">
                                    <?php else : ?>
                                        <!-- Default author avatar -->
                                        <?php echo get_avatar(get_the_author_meta('email'), 64, '', '', array('class' => 'w-6 h-6 rounded-full object-cover saturate-0')); ?>
                                    <?php endif; ?>
                                    <span class="text-xs font-sans !underline-none text-foreground/60"><?php the_author(); ?></span>
                                    <span class="text-sm text-foreground/60">·</span>
                                    <span class="font-sans text-xs text-foreground/60"><?php echo get_post_reading_time(); ?> min</span>
                                </div>
                                <div class="line-clamp-4 text-foreground/90 text-sm">
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                            <div class="col-span-6">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img style="min-width:full;min-height:16rem;max-height:12rem;object-position:center;object-fit:cover" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>">
                                <?php endif; ?>
                            </div>
                        </div>
                    </a>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <!-- No search results message -->
            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-foreground/80">
                <path d="M7.49991 0.876892C3.84222 0.876892 0.877075 3.84204 0.877075 7.49972C0.877075 11.1574 3.84222 14.1226 7.49991 14.1226C11.1576 14.1226 14.1227 11.1574 14.1227 7.49972C14.1227 3.84204 11.1576 0.876892 7.49991 0.876892ZM1.82708 7.49972C1.82708 4.36671 4.36689 1.82689 7.49991 1.82689C10.6329 1.82689 13.1727 4.36671 13.1727 7.49972C13.1727 10.6327 10.6329 13.1726 7.49991 13.1726C4.36689 13.1726 1.82708 10.6327 1.82708 7.49972ZM5.03747 9.21395C4.87949 8.98746 4.56782 8.93193 4.34133 9.08991C4.11484 9.24789 4.05931 9.55956 4.21729 9.78605C4.93926 10.8211 6.14033 11.5 7.50004 11.5C8.85974 11.5 10.0608 10.8211 10.7828 9.78605C10.9408 9.55956 10.8852 9.24789 10.6587 9.08991C10.4323 8.93193 10.1206 8.98746 9.9626 9.21395C9.41963 9.99238 8.51907 10.5 7.50004 10.5C6.481 10.5 5.58044 9.99238 5.03747 9.21395ZM5.37503 6.84998C5.85828 6.84998 6.25003 6.45815 6.25003 5.97498C6.25003 5.4918 5.85828 5.09998 5.37503 5.09998C4.89179 5.09998 4.50003 5.4918 4.50003 5.97498C4.50003 6.45815 4.89179 6.84998 5.37503 6.84998ZM10.5 5.97498C10.5 6.45815 10.1083 6.84998 9.62503 6.84998C9.14179 6.84998 8.75003 6.45815 8.75003 5.97498C8.75003 5.4918 9.14179 5.09998 9.62503 5.09998C10.1083 5.09998 10.5 5.4918 10.5 5.97498Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
            </svg>
            <span class="text-foreground/80 w-1/3 mb-6"><?php esc_html_e('Desculpa, não encontramos resultados para sua pesquisa, tente algum outro termo', 'JUDAS,_As_botas_de'); ?></span>
            <a href="http://localhost/judasasbotasde/">
                <button class="bg-white border border-neutral-300 focus:outline-none hover:bg-neutral-100 font-medium rounded-3xl max-w-fit max-h-fit text-sm flex flex-row gap-2 justify-center content-center items-center px-3 py-1.5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                    </svg>
                    <span>Voltar</span>
                </button>
            </a>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
