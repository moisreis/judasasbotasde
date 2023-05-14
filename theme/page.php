<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JUDAS,_As_botas_de
 */

get_header();
?>

<main class="p-12">
    <section class="flex flex-col mb-12">
        <h1 class="capitalize font-serif text-4xl font-black mb-6 after:block after:h-[8px] after:mt-2 after:w-full after:border-t-2 after:border-b"><?php the_title(); ?></h1>
    </section>
</main>

<?php
get_footer();
?>