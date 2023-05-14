<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JUDAS,_As_botas_de
 */

get_header();
?>

<main class="p-12">
    <div class="flex flex-col gap-4">
        <!-- Author archive header -->
        <header class="mb-6 after:block after:h-[8px] after:mt-2 after:w-full after:border-t-2 after:border-b">
            <h1 class="capitalize font-serif text-4xl font-black"><?php single_cat_title(); ?></h1>
        </header>
        <?php if (have_posts()) : ?>
            <!-- Author archive grid -->
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
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
